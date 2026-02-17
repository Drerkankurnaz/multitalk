-- LMS Veritabanı Yapısı
CREATE DATABASE IF NOT EXISTS lms_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE lms_db;

-- Kullanıcılar tablosu
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Videolar tablosu
CREATE TABLE IF NOT EXISTS videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    video_url VARCHAR(500) NOT NULL,
    duration INT DEFAULT 0,
    order_number INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Video izleme kayıtları
CREATE TABLE IF NOT EXISTS video_progress (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    video_id INT NOT NULL,
    completed BOOLEAN DEFAULT FALSE,
    watched_at TIMESTAMP NULL,
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE,
    FOREIGN KEY (video_id) REFERENCES videos (id) ON DELETE CASCADE,
    UNIQUE KEY unique_user_video (user_id, video_id)
);

-- Sertifikalar tablosu
CREATE TABLE IF NOT EXISTS certificates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    certificate_code VARCHAR(50) UNIQUE NOT NULL,
    issued_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
);

-- Örnek video verileri
INSERT INTO
    videos (
        title,
        description,
        video_url,
        duration,
        order_number
    )
VALUES (
        'Giriş ve Tanışma',
        'Temel tanışma diyalogları ve selamlaşma ifadeleri',
        'assets/images/course/video/1.mp4',
        300,
        1
    ),
    (
        'Günlük Rutinler',
        'Günlük aktiviteler ve zaman ifadeleri',
        'assets/images/course/video/2.mp4',
        420,
        2
    ),
    (
        'Alışveriş Diyalogları',
        'Mağazada alışveriş yapma ve fiyat sorma',
        'assets/images/course/video/3.mp4',
        380,
        3
    ),
    (
        'Restoranda Sipariş',
        'Yemek siparişi verme ve hesap ödeme',
        'assets/images/course/video/4.mp4',
        360,
        4
    ),
    (
        'Yol Tarifi',
        'Yön sorma ve tarif verme ifadeleri',
        'assets/images/course/video/5.mp4',
        340,
        5
    ),
    (
        'Sağlık ve Hastane',
        'Sağlık sorunları ve doktor randevusu',
        'assets/images/course/video/6.mp4',
        400,
        6
    ),
    (
        'Seyahat ve Ulaşım',
        'Bilet alma ve ulaşım araçları',
        'assets/images/course/video/7.mp4',
        390,
        7
    ),
    (
        'Hava Durumu',
        'Hava durumu hakkında konuşma',
        'assets/images/course/video/8.mp4',
        320,
        8
    ),
    (
        'Hobiler ve İlgi Alanları',
        'Boş zaman aktiviteleri ve hobiler',
        'assets/images/course/video/9.mp4',
        350,
        9
    );