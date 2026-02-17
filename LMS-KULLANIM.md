# LMS Sistemi Kullanım Kılavuzu

## 🚀 Hızlı Başlangıç

### 1. Sisteme Erişim

**Ana Sayfa:** http://localhost:8080

Ana sayfada iki seçenek bulunur:
- **Öğrenmeye Başla**: Dil öğrenme içerikleri
- **LMS Giriş**: Video tabanlı öğrenme sistemi

### 2. LMS Giriş Yolları

#### Yöntem 1: Ana Sayfadan
- http://localhost:8080 adresine gidin
- "LMS Giriş" butonuna tıklayın

#### Yöntem 2: Doğrudan Link
- **Giriş:** http://localhost:8080/login.php
- **Kayıt:** http://localhost:8080/signup.php
- **Dashboard:** http://localhost:8080/lms-dashboard.php

### 3. Hesap Oluşturma

1. http://localhost:8080/signup.php adresine gidin
2. Formu doldurun:
   - Ad Soyad
   - E-posta
   - Şifre (en az 6 karakter)
   - Şifre Tekrar
3. "Kayıt Ol" butonuna tıklayın
4. Başarılı mesajı aldıktan sonra "Giriş yap" linkine tıklayın

### 4. Giriş Yapma

1. http://localhost:8080/login.php adresine gidin
2. E-posta ve şifrenizi girin
3. "Giriş Yap" butonuna tıklayın
4. Dashboard'a yönlendirileceksiniz

## 📚 LMS Özellikleri

### Dashboard (Ana Panel)
- **İlerleme Göstergesi**: Tamamlanan videoların yüzdesi
- **Video Listesi**: 9 eğitim videosu
- **Durum İşaretleri**: Tamamlanan videolar yeşil işaretli

### Video İzleme
- **Video Player**: HTML5 video oynatıcı
- **Navigasyon**: Önceki/Sonraki video butonları
- **Tamamlama**: "Tamamlandı Olarak İşaretle" butonu
- **Otomatik Tamamlama**: Video bitince otomatik tamamlama önerisi

### Sertifika
- **Koşul**: Tüm 9 videoyu tamamlayın
- **Özellikler**:
  - Benzersiz sertifika kodu
  - Tarih bilgisi
  - Yazdırma özelliği
  - PDF olarak kaydetme

## 🎥 Video Listesi

1. Giriş ve Tanışma (5:00)
2. Günlük Rutinler (7:00)
3. Alışveriş Diyalogları (6:20)
4. Restoranda Sipariş (6:00)
5. Yol Tarifi (5:40)
6. Sağlık ve Hastane (6:40)
7. Seyahat ve Ulaşım (6:30)
8. Hava Durumu (5:20)
9. Hobiler ve İlgi Alanları (5:50)

## 📱 Mobil Uyumluluk

Tüm sayfalar mobil cihazlarda mükemmel çalışır:
- Responsive tasarım
- Touch-friendly butonlar
- Mobil optimize edilmiş menüler
- Esnek video oynatıcı

## 🔐 Güvenlik

- Şifreler güvenli şekilde hash'lenir (password_hash)
- Session tabanlı kimlik doğrulama
- SQL injection koruması (PDO prepared statements)
- XSS koruması (htmlspecialchars)

## 🛠️ Teknik Detaylar

### Kullanılan Teknolojiler
- **Backend**: PHP 8.2
- **Veritabanı**: MySQL 8.0
- **Frontend**: Tailwind CSS
- **İkonlar**: Material Design Icons
- **Container**: Docker

### Veritabanı Tabloları
- `users`: Kullanıcı bilgileri
- `videos`: Video içerikleri
- `video_progress`: İzleme kayıtları
- `certificates`: Sertifika bilgileri

## 📊 Kullanım Senaryosu

### Örnek Kullanıcı Yolculuğu

1. **Kayıt** (signup.php)
   - Kullanıcı bilgilerini gir
   - Hesap oluştur

2. **Giriş** (login.php)
   - E-posta ve şifre ile giriş yap

3. **Dashboard** (lms-dashboard.php)
   - İlerleme durumunu gör
   - Video listesini incele

4. **Video İzle** (lms-video.php)
   - İlk videoyu izle
   - "Tamamlandı" olarak işaretle
   - Sonraki videoya geç

5. **İlerleme Takibi**
   - Dashboard'da ilerleme yüzdesini kontrol et
   - Kalan videoları izle

6. **Sertifika** (lms-certificate.php)
   - Tüm videoları tamamla
   - Sertifikayı görüntüle
   - Yazdır veya PDF olarak kaydet

## 🎯 İpuçları

### Hızlı İlerleme
- Videoları sırayla izleyin
- Her video sonunda "Tamamlandı" işaretleyin
- Dashboard'dan ilerlemenizi takip edin

### Sertifika Alma
- 9 videoyu da tamamlayın
- Dashboard'da yeşil "Sertifikayı İndir" butonu görünecek
- Sertifika sayfasında yazdırabilirsiniz

### Sorun Giderme
- Giriş yapamıyorsanız: E-posta ve şifrenizi kontrol edin
- Video oynatılmıyorsa: Tarayıcınızı yenileyin
- Sertifika görünmüyorsa: Tüm videoları tamamladığınızdan emin olun

## 📞 Destek

Sorun yaşarsanız:
1. Docker container'ların çalıştığından emin olun: `docker ps`
2. Veritabanı bağlantısını kontrol edin
3. Tarayıcı konsolunu kontrol edin (F12)

## 🎓 Başarı Kriterleri

✅ Hesap oluşturma
✅ Giriş yapma
✅ 9 video izleme
✅ Tüm videoları tamamlama
✅ Sertifika alma

## 🌟 Özellikler

- ✅ Kullanıcı dostu arayüz
- ✅ Responsive tasarım
- ✅ İlerleme takibi
- ✅ Otomatik tamamlama
- ✅ Sertifika sistemi
- ✅ Güvenli kimlik doğrulama
- ✅ Modern tasarım

---

**Başarılar dileriz!** 🎉
