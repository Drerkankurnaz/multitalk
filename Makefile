# Diyaloglarla Yabancı Dil Öğretimi - Makefile

.PHONY: help build up down restart logs shell clean install

# Varsayılan hedef
.DEFAULT_GOAL := help

# Renkli çıktı için
BLUE := \033[0;34m
GREEN := \033[0;32m
RED := \033[0;31m
YELLOW := \033[0;33m
NC := \033[0m # No Color

help: ## Yardım menüsünü göster
	@echo "$(BLUE)Diyaloglarla Yabancı Dil Öğretimi - Docker Komutları$(NC)"
	@echo ""
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "$(GREEN)%-15s$(NC) %s\n", $$1, $$2}'

build: ## Docker image'ını oluştur
	@echo "$(BLUE)Docker image oluşturuluyor...$(NC)"
	docker-compose build --no-cache
	@echo "$(GREEN)✓ Image başarıyla oluşturuldu!$(NC)"

up: ## Container'ları başlat
	@echo "$(BLUE)Container'lar başlatılıyor...$(NC)"
	docker-compose up -d
	@echo "$(GREEN)✓ Container'lar başlatıldı!$(NC)"
	@echo "$(YELLOW)Uygulama: http://localhost:8080$(NC)"

down: ## Container'ları durdur
	@echo "$(BLUE)Container'lar durduruluyor...$(NC)"
	docker-compose down
	@echo "$(GREEN)✓ Container'lar durduruldu!$(NC)"

restart: ## Container'ları yeniden başlat
	@echo "$(BLUE)Container'lar yeniden başlatılıyor...$(NC)"
	docker-compose restart
	@echo "$(GREEN)✓ Container'lar yeniden başlatıldı!$(NC)"

logs: ## Container loglarını göster
	docker-compose logs -f

shell: ## Web container'ına bağlan
	@echo "$(BLUE)Container shell'e bağlanılıyor...$(NC)"
	docker exec -it diyaloglarla-web bash

clean: ## Tüm container'ları ve volume'ları temizle
	@echo "$(RED)Tüm container'lar ve volume'lar temizlenecek!$(NC)"
	@read -p "Devam etmek istiyor musunuz? [y/N] " -n 1 -r; \
	echo; \
	if [[ $$REPLY =~ ^[Yy]$$ ]]; then \
		docker-compose down -v; \
		docker system prune -af; \
		echo "$(GREEN)✓ Temizlik tamamlandı!$(NC)"; \
	fi

install: build up ## Projeyi kur ve başlat
	@echo "$(GREEN)✓ Kurulum tamamlandı!$(NC)"
	@echo "$(YELLOW)Uygulama: http://localhost:8080$(NC)"
	@echo "$(YELLOW)Demo Hesap: demo@test.com / 123456$(NC)"

status: ## Container durumunu göster
	@echo "$(BLUE)Container Durumu:$(NC)"
	docker-compose ps

rebuild: down build up ## Container'ları yeniden oluştur ve başlat
	@echo "$(GREEN)✓ Yeniden oluşturma tamamlandı!$(NC)"

test: ## Uygulamayı test et
	@echo "$(BLUE)Uygulama test ediliyor...$(NC)"
	@curl -s -o /dev/null -w "HTTP Status: %{http_code}\n" http://localhost:8080
	@echo "$(GREEN)✓ Test tamamlandı!$(NC)"
