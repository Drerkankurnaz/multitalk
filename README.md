# Diyaloglarla Yabancı Dil Öğretimi Platformu

Anadolu Üniversitesi Bilimsel Araştırma Projeleri Koordinasyon Birimi tarafından desteklenen "Diyaloglarla Yabancı Dil Öğretimi" projesi için geliştirilmiş web platformu.

## 🌟 Özellikler

### 🌍 Çok Dilli Destek
- **8 Farklı Dil**: Türkçe, İngilizce, Almanca, Fransızca, İspanyolca, İtalyanca, Rusça, Arapça
- Her dil için kültürel bağlama uygun içerikler

### 📚 CEFR Uyumlu İçerik
- **A1 Seviyesi**: Başlangıç seviyesi kullanıcılar için
- **A2 Seviyesi**: Temel seviye kullanıcılar için
- Avrupa Konseyi standartlarına uygun

### 🎬 Günlük Yaşam Temaları
1. 🛒 Süpermarkette
2. 🍽️ Restoranda
3. 🏨 Otelde
4. 🏥 Hastanede
5. 💊 Eczanede
6. 🏦 Bankada
7. 🏙️ Şehirde
8. 💒 Düğünde

### 🎥 Video Özellikleri
- Animasyonlu içerikler
- Altyazı desteği
- YouTube ve Vimeo entegrasyonu
- Responsive video oynatıcı

### 📱 Responsive Tasarım
- Tüm mobil cihazlarla uyumlu
- Tablet ve masaüstü desteği
- Modern ve kullanıcı dostu arayüz

### 🎓 Sertifika Sistemi
- Tamamlama sertifikası
- Yazdırma ve indirme özellikleri
- Sosyal medya paylaşım entegrasyonu
- Benzersiz sertifika numarası
- Doğrulama sistemi

## 🚀 Kurulum

### Gereksinimler
- PHP 7.4 veya üzeri
- Web sunucusu (Apache/Nginx)
- Modern web tarayıcı

**VEYA**

- Docker ve Docker Compose (Önerilen)

### Docker ile Kurulum (Önerilen) 🐳

Docker ile kurulum en hızlı ve kolay yöntemdir:

#### 1. Hızlı Başlangıç
```bash
# Otomatik kurulum scripti
chmod +x start.sh
./start.sh
```

#### 2. Manuel Kurulum
```bash
# Container'ları oluştur ve başlat
docker-compose up -d

# Tarayıcıda aç
open http://localhost:8080
```

#### 3. Makefile ile (Opsiyonel)
```bash
# Tüm komutları gör
make help

# Kur ve başlat
make install

# Durdur
make down

# Yeniden başlat
make restart
```

Detaylı Docker dokümantasyonu için: [DOCKER.md](DOCKER.md)

### Manuel Kurulum

### Manuel Kurulum

1. Projeyi klonlayın veya indirin
```bash
git clone [proje-url]
cd diyaloglarla-dil-ogretimi
```

2. Web sunucunuzun document root klasörüne kopyalayın

3. Tarayıcınızda açın
```
http://localhost/
```

## 🐳 Docker Komutları

```bash
# Başlat
docker-compose up -d

# Durdur
docker-compose down

# Logları görüntüle
docker-compose logs -f

# Yeniden başlat
docker-compose restart

# Container'a bağlan
docker exec -it diyaloglarla-web bash
```

Detaylı bilgi için: [DOCKER.md](DOCKER.md)

## 📖 Kullanım

### Demo Hesap
Sistemi test etmek için demo hesap bilgileri:
- **E-posta**: demo@test.com
- **Şifre**: 123456

### Kullanıcı Akışı
1. **Kayıt/Giriş**: Ana sayfadan kayıt olun veya giriş yapın
2. **Dil Seçimi**: Öğrenmek istediğiniz dili seçin
3. **Seviye Seçimi**: A1 veya A2 seviyesini seçin
4. **Tema Seçimi**: 8 farklı günlük yaşam temasından birini seçin
5. **Video İzleme**: Altyazılı videoları izleyin ve öğrenin

## 📁 Proje Yapısı

```
├── index.php                    # Ana sayfa
├── login.php                    # Giriş sayfası
├── register.php                 # Kayıt sayfası
├── language-selection.php       # Dil seçimi
├── level-selection.php          # Seviye seçimi (A1/A2)
├── themes.php                   # Tema listesi
├── video-player.php             # Video oynatıcı
├── logout.php                   # Çıkış işlemi
├── profile.php                  # Kullanıcı profili
├── certificate.php              # Tamamlama sertifikası
├── config.php                   # Yapılandırma dosyası
├── assets/
│   ├── css/                     # Tailwind CSS
│   ├── js/                      # JavaScript dosyaları
│   ├── images/                  # Görseller
│   └── libs/                    # Kütüphaneler
└── Base/                        # Şablon bileşenleri
```

## 🎨 Teknolojiler

- **Frontend**: HTML5, Tailwind CSS, JavaScript
- **Backend**: PHP (Session yönetimi)
- **İkonlar**: Material Design Icons
- **Video**: YouTube & Vimeo API
- **Responsive**: Mobile-first yaklaşım

## 🔧 Yapılandırma

### Video URL'lerini Güncelleme
`themes.php` ve `video-player.php` dosyalarında video URL'lerini güncelleyin:

```php
$themes = [
    'supermarket' => [
        'video_url' => 'https://www.youtube.com/embed/YOUR_VIDEO_ID',
        'vimeo_url' => 'https://player.vimeo.com/video/YOUR_VIDEO_ID'
    ],
    // ...
];
```

### Veritabanı Entegrasyonu (Opsiyonel)
Şu anda statik içerik kullanılmaktadır. Veritabanı entegrasyonu için:
- `login.php` ve `register.php` dosyalarını güncelleyin
- Kullanıcı ilerleme takibi ekleyin
- Video tamamlanma durumlarını kaydedin

## 🌐 Tarayıcı Desteği

- ✅ Chrome (son 2 versiyon)
- ✅ Firefox (son 2 versiyon)
- ✅ Safari (son 2 versiyon)
- ✅ Edge (son 2 versiyon)
- ✅ Mobil tarayıcılar

## 📝 Lisans

Bu proje Anadolu Üniversitesi Bilimsel Araştırma Projeleri Koordinasyon Birimi tarafından desteklenmektedir.

## 👥 İletişim

- **E-posta**: info@diyaloglarla.edu.tr
- **Telefon**: +90 (222) 335 05 80
- **Adres**: Anadolu Üniversitesi, Eskişehir

## 🙏 Teşekkürler

Bu proje, Avrupa Konseyi'nin CEFR standartları çerçevesinde geliştirilmiştir. Alan uzmanlarının katkılarıyla hazırlanmış pedagojik, dilbilimsel ve kültürel açıdan değerlendirilmiş içerikler sunmaktadır.

---

**Not**: Bu platform eğitim amaçlı geliştirilmiştir ve sürekli olarak güncellenmektedir.
