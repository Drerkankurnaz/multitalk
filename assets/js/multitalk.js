// MultiTalk - Ortak JavaScript Fonksiyonları

// LocalStorage yönetimi
const Storage = {
    get(key, defaultValue = null) {
        try {
            const item = localStorage.getItem(key);
            return item ? JSON.parse(item) : defaultValue;
        } catch {
            return defaultValue;
        }
    },
    
    set(key, value) {
        try {
            localStorage.setItem(key, JSON.stringify(value));
            return true;
        } catch {
            return false;
        }
    },
    
    remove(key) {
        localStorage.removeItem(key);
    }
};

// İlerleme yönetimi
const Progress = {
    getKey(lang, level) {
        return `${lang}_${level}`;
    },
    
    getCompleted(lang, level) {
        const data = Storage.get('completed_themes', {});
        const key = this.getKey(lang, level);
        return data[key] || [];
    },
    
    markComplete(lang, level, themeId) {
        const data = Storage.get('completed_themes', {});
        const key = this.getKey(lang, level);
        
        if (!data[key]) data[key] = [];
        if (!data[key].includes(themeId)) {
            data[key].push(themeId);
            Storage.set('completed_themes', data);
            return true;
        }
        return false;
    },
    
    reset(lang, level) {
        const data = Storage.get('completed_themes', {});
        const key = this.getKey(lang, level);
        delete data[key];
        Storage.set('completed_themes', data);
    },
    
    getPercentage(lang, level, total = 8) {
        const completed = this.getCompleted(lang, level);
        return (completed.length / total) * 100;
    }
};

// Sosyal medya paylaşım
const Share = {
    twitter(text) {
        const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
        window.open(url, '_blank', 'width=550,height=420');
    },
    
    facebook(url = window.location.href) {
        const shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
        window.open(shareUrl, '_blank', 'width=550,height=420');
    },
    
    linkedin(url = window.location.href) {
        const shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`;
        window.open(shareUrl, '_blank', 'width=550,height=420');
    },
    
    copyLink(url = window.location.href) {
        navigator.clipboard.writeText(url).then(() => {
            alert('Link kopyalandı!');
        }).catch(() => {
            alert('Link kopyalanamadı!');
        });
    }
};

// Fullscreen yönetimi
const Fullscreen = {
    request(element) {
        if (element.requestFullscreen) {
            element.requestFullscreen();
        } else if (element.webkitRequestFullscreen) {
            element.webkitRequestFullscreen();
        } else if (element.msRequestFullscreen) {
            element.msRequestFullscreen();
        }
    },
    
    exit() {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    },
    
    toggle(element) {
        if (!document.fullscreenElement) {
            this.request(element);
        } else {
            this.exit();
        }
    }
};

// Sertifika indirme
const Certificate = {
    async download(elementId, filename) {
        const element = document.getElementById(elementId);
        if (!element) return;
        
        try {
            const canvas = await html2canvas(element, {
                scale: 2,
                backgroundColor: '#ffffff',
                logging: false
            });
            
            const link = document.createElement('a');
            link.download = filename;
            link.href = canvas.toDataURL('image/png');
            link.click();
        } catch (error) {
            console.error('Sertifika indirilemedi:', error);
            alert('Sertifika indirilemedi. Lütfen tekrar deneyin.');
        }
    }
};

// Utility fonksiyonlar
const Utils = {
    escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    },
    
    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },
    
    formatDate(date, locale = 'tr-TR') {
        return new Intl.DateTimeFormat(locale).format(date);
    }
};
