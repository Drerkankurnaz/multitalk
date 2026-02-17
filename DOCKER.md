# Docker Kurulum ve Kullanım Kılavuzu

Bu proje Docker ile kolayca çalıştırılabilir. Aşağıdaki adımları izleyerek projeyi Docker container'ında başlatabilirsiniz.

## 📋 Gereksinimler

- Docker (20.10 veya üzeri)
- Docker Compose (1.29 veya üzeri)

### Docker Kurulumu

#### macOS
```bash
# Homebrew ile
brew install --cask docker

# Veya Docker Desktop'u indirin
# https://www.docker.com/products/docker-desktop
```

#### Linux (Ubuntu/Debian)
```bash
# Docker kurulumu
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh

# Docker Compose kurulumu
sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```

#### Windows
Docker Desktop'u indirin ve kurun:
https://www.docker.com/products/docker-desktop

## 🚀 Hızlı Başlangıç

### 1. Projeyi Klonlayın veya İndirin
```bash
cd diyaloglarla-dil-ogretimi
```

### 2. Docker Container'ı Oluşturun ve Başlatın
```bash
docker-compose up -d
```

Bu komut:
- Docker image'ını oluşturur
- Container'ı arka planda başlatır
- Apache ve PHP'yi yapılandırır

### 3. Tarayıcıda Açın
```
http://localhost:8080
```

## 🛠️ Docker Komutları

### Container'ı Başlatma
```bash
docker-compose up -d
```

### Container'ı Durdurma
```bash
docker-compose down
```

### Container Loglarını Görüntüleme
```bash
docker-compose logs -f
```

### Container'a Bağlanma (Shell)
```bash
docker exec -it diyaloglarla-web bash
```

### Container'ı Yeniden Başlatma
```bash
docker-compose restart
```

### Image'ı Yeniden Oluşturma
```bash
docker-compose build --no-cache
docker-compose up -d
```

### Tüm Container'ları ve Volume'ları Temizleme
```bash
docker-compose down -v
docker system prune -a
```

## 📁 Proje Yapısı

```
.
├── Dockerfile              # Docker image tanımı
├── docker-compose.yml      # Docker Compose yapılandırması
├── .dockerignore          # Docker'a dahil edilmeyecek dosyalar
├── .htaccess              # Apache yapılandırması
└── [proje dosyaları]
```

## 🔧 Yapılandırma

### Port Değiştirme

`docker-compose.yml` dosyasında port numarasını değiştirebilirsiniz:

```yaml
ports:
  - "8080:80"  # Sol taraf: host port, sağ taraf: container port
```

Örneğin `8080` yerine `3000` kullanmak için:
```yaml
ports:
  - "3000:80"
```

### PHP Ayarları

`docker-compose.yml` dosyasında PHP ayarlarını değiştirebilirsiniz:

```yaml
environment:
  - PHP_MEMORY_LIMIT=256M
  - PHP_UPLOAD_MAX_FILESIZE=50M
  - PHP_POST_MAX_SIZE=50M
```

### Veritabanı Ekleme (Opsiyonel)

Gelecekte veritabanı kullanmak isterseniz, `docker-compose.yml` dosyasındaki MySQL ve phpMyAdmin bölümlerinin yorumunu kaldırın:

```bash
# Yorumları kaldırın (# işaretlerini silin)
docker-compose up -d
```

MySQL'e erişim:
- Host: `localhost`
- Port: `3306`
- Kullanıcı: `diyaloglarla_user`
- Şifre: `diyaloglarla_pass`
- Veritabanı: `diyaloglarla`

phpMyAdmin:
```
http://localhost:8081
```

## 🐛 Sorun Giderme

### Port Zaten Kullanımda
```bash
# Kullanılan portu kontrol edin
lsof -i :8080

# Veya docker-compose.yml'de farklı bir port kullanın
```

### Container Başlamıyor
```bash
# Logları kontrol edin
docker-compose logs

# Container'ı yeniden oluşturun
docker-compose down
docker-compose build --no-cache
docker-compose up -d
```

### Dosya İzin Hataları
```bash
# Container içinde izinleri düzeltin
docker exec -it diyaloglarla-web bash
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html
```

### Session Hataları
```bash
# Session dizinini oluşturun
docker exec -it diyaloglarla-web bash
mkdir -p /var/lib/php/sessions
chown -R www-data:www-data /var/lib/php/sessions
```

## 📊 Performans İpuçları

### Volume Mounting (Geliştirme)
Geliştirme sırasında dosyalar otomatik olarak senkronize edilir:
```yaml
volumes:
  - .:/var/www/html
```

### Production için
Production'da volume mounting yerine dosyaları image'a kopyalayın:
```dockerfile
COPY . /var/www/html/
```

## 🔒 Güvenlik

### Production Ortamı için:
1. `.htaccess` dosyasında HTTPS yönlendirmesini etkinleştirin
2. Güçlü veritabanı şifreleri kullanın
3. Debug modunu kapatın
4. Gereksiz portları kapatın
5. Düzenli güvenlik güncellemeleri yapın

## 📝 Notlar

- Container ilk başlatıldığında image oluşturulur (birkaç dakika sürebilir)
- Kod değişiklikleri otomatik olarak yansır (volume mounting sayesinde)
- Production'da volume mounting yerine COPY kullanın
- Veritabanı kullanmıyorsanız MySQL container'ını kaldırabilirsiniz

## 🆘 Yardım

Sorun yaşarsanız:
1. Logları kontrol edin: `docker-compose logs`
2. Container durumunu kontrol edin: `docker ps -a`
3. Image'ı yeniden oluşturun: `docker-compose build --no-cache`

## 📚 Ek Kaynaklar

- [Docker Dokümantasyonu](https://docs.docker.com/)
- [Docker Compose Dokümantasyonu](https://docs.docker.com/compose/)
- [PHP Docker Image](https://hub.docker.com/_/php)
