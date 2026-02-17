<?php
require_once __DIR__ . '/db.php';

class Video {
    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    
    public function getAllVideos($language = 'tr') {
        $stmt = $this->db->prepare("SELECT * FROM videos WHERE language = ? ORDER BY order_number ASC");
        $stmt->execute([$language]);
        return $stmt->fetchAll();
    }
    
    public function getVideoById($id) {
        $stmt = $this->db->prepare("SELECT * FROM videos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    
    public function getUserProgress($user_id, $language = 'tr') {
        $stmt = $this->db->prepare("
            SELECT v.*, vp.completed, vp.watched_at 
            FROM videos v 
            LEFT JOIN video_progress vp ON v.id = vp.video_id AND vp.user_id = ? AND vp.language = ?
            WHERE v.language = ?
            ORDER BY v.order_number ASC
        ");
        $stmt->execute([$user_id, $language, $language]);
        return $stmt->fetchAll();
    }
    
    public function markAsCompleted($user_id, $video_id, $language = 'tr') {
        $stmt = $this->db->prepare("
            INSERT INTO video_progress (user_id, video_id, language, completed, watched_at) 
            VALUES (?, ?, ?, 1, NOW())
            ON DUPLICATE KEY UPDATE completed = 1, watched_at = NOW()
        ");
        return $stmt->execute([$user_id, $video_id, $language]);
    }
    
    public function getCompletionPercentage($user_id, $language = 'tr') {
        $stmt = $this->db->prepare("
            SELECT 
                COUNT(*) as total,
                SUM(CASE WHEN vp.completed = 1 THEN 1 ELSE 0 END) as completed
            FROM videos v
            LEFT JOIN video_progress vp ON v.id = vp.video_id AND vp.user_id = ? AND vp.language = ?
            WHERE v.language = ?
        ");
        $stmt->execute([$user_id, $language, $language]);
        $result = $stmt->fetch();
        
        if ($result['total'] == 0) return 0;
        return round(($result['completed'] / $result['total']) * 100);
    }
    
    public function isAllCompleted($user_id, $language = 'tr') {
        return $this->getCompletionPercentage($user_id, $language) == 100;
    }
}
?>
