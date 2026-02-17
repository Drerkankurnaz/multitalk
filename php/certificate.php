<?php
require_once __DIR__ . '/db.php';

class Certificate {
    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    
    public function generateCertificateCode() {
        return 'LMS-' . date('Y') . '-' . strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));
    }
    
    public function getOrCreateCertificate($user_id) {
        // Mevcut sertifikayı kontrol et
        $stmt = $this->db->prepare("SELECT * FROM certificates WHERE user_id = ?");
        $stmt->execute([$user_id]);
        $certificate = $stmt->fetch();
        
        if ($certificate) {
            return $certificate;
        }
        
        // Yeni sertifika oluştur
        $code = $this->generateCertificateCode();
        $stmt = $this->db->prepare("INSERT INTO certificates (user_id, certificate_code) VALUES (?, ?)");
        $stmt->execute([$user_id, $code]);
        
        return [
            'id' => $this->db->lastInsertId(),
            'user_id' => $user_id,
            'certificate_code' => $code,
            'issued_at' => date('Y-m-d H:i:s')
        ];
    }
    
    public function verifyCertificate($code) {
        $stmt = $this->db->prepare("
            SELECT c.*, u.full_name, u.email 
            FROM certificates c 
            JOIN users u ON c.user_id = u.id 
            WHERE c.certificate_code = ?
        ");
        $stmt->execute([$code]);
        return $stmt->fetch();
    }
}
?>
