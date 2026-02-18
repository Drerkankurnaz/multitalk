# MultiTalk - Canlıya Alma Rehberi

## Seçenek 1: VPS ile Deploy (Önerilen)

En kolay ve ucuz yöntem. Hetzner, DigitalOcean, Contabo gibi sağlayıcılardan aylık ~5-10€'ya VPS alabilirsin.

### 1. VPS Satın Al

| Sağlayıcı | Fiyat | Özellik |
|-----------|-------|---------|
| Hetzner | ~4€/ay | 2 vCPU, 2GB RAM, 20GB SSD |
| DigitalOcean | $6/ay | 1 vCPU, 1GB RAM, 25GB SSD |
| Contabo | ~5€/ay | 4 vCPU, 8GB RAM, 50GB SSD |

Ubuntu 22.04 veya 24.04 seç.

### 2. Sunucuya Bağlan

```bash
ssh root@SUNUCU_IP_ADRESI
```

### 3. Docker Kur

```bash
# Sistem güncelle
apt update && apt upgrade -y

# Docker kur
curl -fsSL https://get.docker.com | sh

# Docker Compose kur (Docker ile birlikte gelir)
docker --version
docker compose version
```

### 4. Projeyi Sunucuya Aktar

```bash
# Git ile çek
apt install git -y
git clone https://github.com/Drerkankurnaz/multitalk.git
cd multitalk
```

### 5. Ortam Değişkenlerini Ayarla

```bash
# .env dosyası oluştur
cp .env.example .env
nano .env
```

`.env` dosyasını düzenle:
```
DB_PASS=guclu_bir_sifre_yaz
MYSQL_ROOT_PASS=baska_guclu_sifre
```

### 6. Başlat

```bash
docker compose -f docker-compose.prod.yml up -d --build
```

Site artık `http://SUNUCU_IP_ADRESI` adresinde çalışıyor.

### 7. Domain Bağla (Opsiyonel)

Domain aldıysan (örn: multitalk.com.tr), DNS ayarlarından:

```
A kaydı:  @    →  SUNUCU_IP_ADRESI
A kaydı:  www  →  SUNUCU_IP_ADRESI
```

### 8. SSL Sertifikası (HTTPS)

Domain bağladıktan sonra ücretsiz SSL için:

```bash
# Nginx reverse proxy + SSL
apt install nginx certbot python3-certbot-nginx -y
```

`/etc/nginx/sites-available/multitalk` dosyası oluştur:

```nginx
server {
    listen 80;
    server_name multitalk.com.tr www.multitalk.com.tr;

    location / {
        proxy_pass http://127.0.0.1:80;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }
}
```

```bash
ln -s /etc/nginx/sites-available/multitalk /etc/nginx/sites-enabled/
nginx -t
systemctl restart nginx

# SSL al
certbot --nginx -d multitalk.com.tr -d www.multitalk.com.tr
```

> Not: Nginx kullanacaksan docker-compose.prod.yml'de portu `"8080:80"` olarak değiştir.

---

## Seçenek 2: Railway.app (Kodsuz Deploy)

En hızlı yöntem, GitHub'dan otomatik deploy.

1. https://railway.app adresine git
2. GitHub hesabınla giriş yap
3. "New Project" → "Deploy from GitHub repo"
4. `Drerkankurnaz/multitalk` reposunu seç
5. MySQL servisi ekle: "New" → "Database" → "MySQL"
6. Environment variables'a DB bilgilerini ekle
7. Deploy otomatik başlar

Ücretsiz plan: Aylık $5 kredi (yeterli).

---

## Seçenek 3: Render.com

1. https://render.com adresine git
2. "New Web Service" → GitHub repo bağla
3. Environment: Docker seç
4. MySQL için: Render'da "New PostgreSQL" veya harici MySQL (PlanetScale)

---

## Hızlı Kontrol Listesi

- [ ] VPS veya platform hesabı aç
- [ ] Projeyi sunucuya aktar (git clone)
- [ ] `.env` dosyasını oluştur ve şifreleri değiştir
- [ ] `docker compose -f docker-compose.prod.yml up -d --build`
- [ ] Tarayıcıdan test et: `http://SUNUCU_IP`
- [ ] Domain bağla (opsiyonel)
- [ ] SSL sertifikası al (opsiyonel)
- [ ] Demo şifresini değiştir (güvenlik)

## Güvenlik Notları

- `.env` dosyasındaki şifreleri mutlaka değiştir
- Demo hesap şifresini production'da güncelle
- phpMyAdmin production'da kapalı (prod compose'da yok)
- MySQL portu dışarıya açık değil (prod compose'da yok)
