# Docker Çalıştırma Kılavuzu

## ✅ Docker Başarıyla Çalıştırıldı!

### Çalışan Servisler

1. **Web Uygulaması**
   - URL: http://localhost:8080
   - Container: lms-web
   - PHP 8.2 + Apache

2. **MySQL Veritabanı**
   - Host: localhost:3306
   - Container: lms-db
   - Database: lms_db
   - User: lms_user
   - Password: lms_pass
   - Root Password: root

3. **phpMyAdmin**
   - URL: http://localhost:8081
   - Container: lms-phpmyadmin
   - Veritabanı yönetim arayüzü

### Kurulum Durumu

✅ Veritabanı oluşturuldu: `lms_db`
✅ Tüm tablolar başarıyla oluşturuldu
✅ Örnek video verileri eklendi

### Kullanım Adımları

1. **Kayıt Ol**
   - http://localhost:8080/lms-register.php
   - Yeni hesap oluşturun

2. **Giriş Yap**
   - http://localhost:8080/lms-login.php
   - Hesabınızla giriş yapın

3. **Dashboard**
   - http://localhost:8080/lms-dashboard.php
   - Video listesini görün ve ilerlemenizi takip edin

4. **Video İzle**
   - Videoları izleyin ve tamamlayın
   - Her video sonunda "Tamamlandı" olarak işaretleyin

5. **Sertifika Al**
   - Tüm videoları tamamladıktan sonra
   - http://localhost:8080/lms-certificate.php
   - Katılım belgenizi indirin

### Docker Komutları

```bash
# Container'ları görüntüle
docker ps

# Logları izle
docker-compose logs -f

# Container'ları durdur
docker-compose down

# Container'ları yeniden başlat
docker-compose restart

# Container'a bağlan
docker exec -it lms-web bash

# Veritabanına bağlan
docker exec -it lms-db mysql -u lms_user -plms_pass lms_db
```

### Makefile Komutları

```bash
make help       # Yardım menüsü
make up         # Container'ları başlat
make down       # Container'ları durdur
make restart    # Yeniden başlat
make logs       # Logları göster
make shell      # Web container'a bağlan
make status     # Durum kontrolü
```

### Veritabanı Yapısı

- **users**: Kullanıcı bilgileri
- **videos**: Video içerikleri (9 adet örnek video)
- **video_progress**: İzleme kayıtları
- **certificates**: Sertifika bilgileri

### Sorun Giderme

**Port çakışması varsa:**
```bash
# docker-compose.yml dosyasında portları değiştirin
# 8080:80 -> 9090:80
# 8081:80 -> 9091:80
# 3306:3306 -> 3307:3306
```

**Container'ları sıfırlamak için:**
```bash
docker-compose down -v
docker-compose up -d
```

**Veritabanını yeniden kurmak için:**
```bash
# Tarayıcıda tekrar ziyaret edin:
http://localhost:8080/install.php
```

### Önemli Notlar

- Tüm veriler Docker volume'ünde saklanır
- Container'ları durdurduğunuzda veriler korunur
- `docker-compose down -v` komutu tüm verileri siler
- Kod değişiklikleri otomatik olarak yansır (volume mount)

### Güvenlik

- Üretim ortamında şifreleri değiştirin
- `install.php` dosyasını üretimde silin
- HTTPS kullanın
- Güçlü şifreler belirleyin

## Başarılı Kurulum! 🎉

Artık LMS sisteminiz hazır. İyi öğrenmeler!
