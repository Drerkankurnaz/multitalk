#!/bin/bash

# Diyaloglarla Yabancı Dil Öğretimi - Başlatma Scripti

# Renkler
BLUE='\033[0;34m'
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[0;33m'
NC='\033[0m' # No Color

echo -e "${BLUE}"
echo "╔═══════════════════════════════════════════════════════════╗"
echo "║   Diyaloglarla Yabancı Dil Öğretimi - Docker Kurulum    ║"
echo "╚═══════════════════════════════════════════════════════════╝"
echo -e "${NC}"

# Docker kontrolü
echo -e "${BLUE}[1/4] Docker kontrolü yapılıyor...${NC}"
if ! command -v docker &> /dev/null; then
    echo -e "${RED}✗ Docker bulunamadı!${NC}"
    echo -e "${YELLOW}Lütfen Docker'ı yükleyin: https://www.docker.com/get-started${NC}"
    exit 1
fi
echo -e "${GREEN}✓ Docker bulundu!${NC}"

# Docker Compose kontrolü
echo -e "${BLUE}[2/4] Docker Compose kontrolü yapılıyor...${NC}"
if ! command -v docker-compose &> /dev/null; then
    echo -e "${RED}✗ Docker Compose bulunamadı!${NC}"
    echo -e "${YELLOW}Lütfen Docker Compose'u yükleyin${NC}"
    exit 1
fi
echo -e "${GREEN}✓ Docker Compose bulundu!${NC}"

# Port kontrolü
echo -e "${BLUE}[3/4] Port 8080 kontrolü yapılıyor...${NC}"
if lsof -Pi :8080 -sTCP:LISTEN -t >/dev/null 2>&1 ; then
    echo -e "${YELLOW}⚠ Port 8080 kullanımda!${NC}"
    echo -e "${YELLOW}Farklı bir port kullanmak için docker-compose.yml dosyasını düzenleyin.${NC}"
    read -p "Devam etmek istiyor musunuz? [y/N] " -n 1 -r
    echo
    if [[ ! $REPLY =~ ^[Yy]$ ]]; then
        exit 1
    fi
else
    echo -e "${GREEN}✓ Port 8080 müsait!${NC}"
fi

# Container'ları başlat
echo -e "${BLUE}[4/4] Docker container'ları başlatılıyor...${NC}"
docker-compose up -d

if [ $? -eq 0 ]; then
    echo -e "${GREEN}"
    echo "╔═══════════════════════════════════════════════════════════╗"
    echo "║              ✓ Kurulum Başarıyla Tamamlandı!            ║"
    echo "╚═══════════════════════════════════════════════════════════╝"
    echo -e "${NC}"
    echo -e "${YELLOW}🌐 Uygulama: ${GREEN}http://localhost:8080${NC}"
    echo -e "${YELLOW}👤 Demo Hesap:${NC}"
    echo -e "   E-posta: ${GREEN}demo@test.com${NC}"
    echo -e "   Şifre: ${GREEN}123456${NC}"
    echo ""
    echo -e "${BLUE}Faydalı Komutlar:${NC}"
    echo -e "  ${GREEN}docker-compose logs -f${NC}     - Logları görüntüle"
    echo -e "  ${GREEN}docker-compose down${NC}        - Container'ları durdur"
    echo -e "  ${GREEN}docker-compose restart${NC}     - Container'ları yeniden başlat"
    echo -e "  ${GREEN}make help${NC}                  - Tüm komutları gör"
    echo ""
else
    echo -e "${RED}"
    echo "╔═══════════════════════════════════════════════════════════╗"
    echo "║                  ✗ Kurulum Başarısız!                    ║"
    echo "╚═══════════════════════════════════════════════════════════╝"
    echo -e "${NC}"
    echo -e "${YELLOW}Logları kontrol edin: ${GREEN}docker-compose logs${NC}"
    exit 1
fi
