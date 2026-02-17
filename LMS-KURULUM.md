# LMS Sistemi Kurulum Kılavuzu

## Genel Bakış
Bu proje, basit bir Öğrenme Yönetim Sistemi (LMS) içerir. Kullanıcılar kayıt olabilir, videoları izleyebilir ve tüm videoları tamamladıktan sonra katılım belgesi alabilir.

## Özellikler
- ✅ Kullanıcı kayıt ve giriş sistemi
- ✅ Video izleme ve ilerleme takibi
- ✅ Tamamlama yüzdesi gösterimi
- ✅ Otomatik video tamamlama
- ✅ Katılım belgesi oluşturma ve yazdırma
- ✅ Responsive tasarım (mobil uyumlu)
- ✅ Modern ve kullanıcı dostu arayüz

## Kurulum Adımları

### 1. Veritabanı Yapılandırması
`config.php` dosyasında veritabanı ayarlarını düzenleyin:

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'lms_db');
define('DB_USER', 'root');
define('DB_PASS', '');
```

### 2. Veritabanı Kurulumu
Tarayıcınızda şu adresi açın:
```
http://localhost/install.php
```

Bu sayfa otomatik olarak:
- `lms_db` veritabanını oluşturur
- Gerekli tabloları oluşturur (users, videos, video_progress, certificates)
- Örnek video verilerini ekler

### 3. Kullanım
Kurulum tamamlandıktan sonra:

1. **Kayıt Ol**: `lms-register.php` - Yeni hesap oluşturun
2. **Giriş Yap**: `lms-login.php` - Sisteme giriş yapın
3. **Dashboard**: `lms-dashboard.php` - Video listesini görün ve ilerlemenizi takip edin
4. **Video İzle**: `lms-video.php` - Videoları izleyin ve tamamlayın
5. **Sertifika**: `lms-certificate.php` - Tüm videoları tamamladıktan sonra belgenizi alın

## Veritabanı Yapısı

### users (Kullanıcılar)
- id (Primary Key)
- email (Unique)
- password (Hash)
- full_name
- created_at
- updated_at

### videos (Videolar)
- id (Primary Key)
- title
- description
- video_url
- duration (saniye)
- order_number
- created_at

### video_progress (İzleme Kayıtları)
- id (Primary Key)
- user_id (Foreign Key)
- video_id (Foreign Key)
- completed (Boolean)
- watched_at

### certificates (Sertifikalar)
- id (Primary Key)
- user_id (Foreign Key)
- certificate_code (Unique)
- issued_at

## Dosya Yapısı

```
/
├── lms-login.php          # Giriş sayfası
├── lms-register.php       # Kayıt sayfası
├── lms-dashboard.php      # Ana panel
├── lms-video.php          # Video izleme
├── lms-certificate.php    # Sertifika
├── lms-logout.php         # Çıkış
├── install.php            # Kurulum
├── database.sql           # SQL şeması
├── config.php             # Yapılandırma
└── php/
    ├── db.php            # Veritabanı bağlantısı
    ├── auth.php          # Kimlik doğrulama
    ├── video.php         # Video yönetimi
    └── certificate.php   # Sertifika yönetimi
```

## Güvenlik Notları

- Şifreler `password_hash()` ile güvenli şekilde saklanır
- PDO prepared statements ile SQL injection koruması
- Session tabanlı kimlik doğrulama
- Kullanıcı girişi kontrolü her sayfada yapılır

## Özelleştirme

### Video Ekleme
`database.sql` dosyasındaki INSERT sorgusunu düzenleyin veya veritabanına manuel olarak ekleyin:

```sql
INSERT INTO videos (title, description, video_url, duration, order_number) 
VALUES ('Video Başlığı', 'Açıklama', 'video.mp4', 300, 10);
```

### Sertifika Tasarımı
`lms-certificate.php` dosyasındaki HTML/CSS kodunu düzenleyerek sertifika tasarımını özelleştirebilirsiniz.

## Sorun Giderme

### Veritabanı Bağlantı Hatası
- MySQL servisinin çalıştığından emin olun
- `config.php` dosyasındaki bilgileri kontrol edin

### Session Hatası
- PHP session desteğinin aktif olduğundan emin olun
- Sunucu yazma izinlerini kontrol edin

### Video Oynatma Sorunu
- Video dosyalarının doğru yolda olduğundan emin olun
- Tarayıcı video formatını desteklediğinden emin olun

## Geliştirme Önerileri

- [ ] E-posta doğrulama sistemi
- [ ] Şifre sıfırlama özelliği
- [ ] Video kategorileri
- [ ] Quiz/sınav sistemi
- [ ] Kullanıcı profil fotoğrafı
- [ ] Video yorumlama
- [ ] İlerleme bildirimleri
- [ ] Admin paneli

## Lisans
Bu proje eğitim amaçlı geliştirilmiştir.
