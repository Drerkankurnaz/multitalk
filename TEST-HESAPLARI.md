# Test Hesapları

## 📋 Genel Bakış
Bu dokümanda sistemdeki tüm test hesapları ve kullanım senaryoları bulunmaktadır.

## 🎓 Dil Öğrenme Platformu Test Hesapları

### Demo Hesap
**Kullanım**: Sistemi hızlıca test etmek için
- **E-posta**: demo@test.com
- **Şifre**: 123456
- **Durum**: Aktif
- **Özellikler**: Tüm dillere ve seviyelere erişim

### Test Kullanıcıları

#### 1. Başlangıç Seviyesi Kullanıcı
- **E-posta**: beginner@test.com
- **Şifre**: test123
- **Seviye**: A1
- **Dil**: İngilizce
- **Durum**: Yeni kayıt

#### 2. Orta Seviye Kullanıcı
- **E-posta**: intermediate@test.com
- **Şifre**: test123
- **Seviye**: A2
- **Dil**: Almanca
- **Durum**: İlerleme var

#### 3. Çoklu Dil Kullanıcısı
- **E-posta**: multilang@test.com
- **Şifre**: test123
- **Seviye**: A1, A2
- **Dil**: Türkçe, İngilizce, Almanca
- **Durum**: Aktif öğrenci

## 🎥 LMS Sistemi Test Hesapları

### Yönetici Hesabı
- **E-posta**: admin@lms.com
- **Şifre**: admin123
- **Rol**: Yönetici
- **Durum**: Tam yetki
- **Özellikler**: Tüm içeriklere erişim, kullanıcı yönetimi

### Öğrenci Hesapları

#### 1. Yeni Öğrenci (İlerleme Yok)
- **E-posta**: student1@lms.com
- **Şifre**: student123
- **Ad Soyad**: Ahmet Yılmaz
- **İlerleme**: %0 (Hiç video izlenmedi)
- **Durum**: Yeni kayıt

#### 2. Aktif Öğrenci (Orta İlerleme)
- **E-posta**: student2@lms.com
- **Şifre**: student123
- **Ad Soyad**: Ayşe Demir
- **İlerleme**: %44 (4/9 video tamamlandı)
- **Tamamlanan Videolar**: 1, 2, 3, 4
- **Durum**: Aktif öğreniyor

#### 3. İleri Seviye Öğrenci (Yüksek İlerleme)
- **E-posta**: student3@lms.com
- **Şifre**: student123
- **Ad Soyad**: Mehmet Kaya
- **İlerleme**: %89 (8/9 video tamamlandı)
- **Tamamlanan Videolar**: 1, 2, 3, 4, 5, 6, 7, 8
- **Durum**: Sertifikaya 1 video kaldı

#### 4. Mezun Öğrenci (Tamamlanmış)
- **E-posta**: graduate@lms.com
- **Şifre**: student123
- **Ad Soyad**: Fatma Şahin
- **İlerleme**: %100 (9/9 video tamamlandı)
- **Sertifika**: Var
- **Sertifika Kodu**: CERT-2024-001
- **Durum**: Tamamlandı

#### 5. Test Kullanıcısı (Hızlı Test)
- **E-posta**: test@lms.com
- **Şifre**: test123
- **Ad Soyad**: Test Kullanıcı
- **İlerleme**: %0
- **Durum**: Hızlı test için

## 🧪 Test Senaryoları

### Senaryo 1: Yeni Kullanıcı Kaydı
1. `signup.php` sayfasına git
2. Yeni bilgilerle kayıt ol
3. Giriş yap
4. Dashboard'u kontrol et

### Senaryo 2: Video İzleme ve Tamamlama
1. `student1@lms.com` ile giriş yap
2. İlk videoyu izle
3. "Tamamlandı" olarak işaretle
4. İlerleme yüzdesini kontrol et

### Senaryo 3: Sertifika Alma
1. `student3@lms.com` ile giriş yap
2. Son videoyu (9. video) izle
3. Tamamla
4. Dashboard'da sertifika butonunu gör
5. Sertifikayı indir/yazdır

### Senaryo 4: Dil Öğrenme Platformu
1. `demo@test.com` ile giriş yap
2. Dil seç (örn: İngilizce)
3. Seviye seç (A1 veya A2)
4. Tema seç (örn: Süpermarkette)
5. Videoyu izle

## 🔐 Güvenlik Test Hesapları

### Geçersiz Giriş Testleri
- **E-posta**: invalid@test.com
- **Şifre**: wrongpass
- **Beklenen**: Hata mesajı

### SQL Injection Test
- **E-posta**: admin'--
- **Şifre**: ' OR '1'='1
- **Beklenen**: Güvenli şekilde reddedilmeli

### XSS Test
- **E-posta**: <script>alert('xss')</script>@test.com
- **Şifre**: test123
- **Beklenen**: Güvenli şekilde temizlenmeli

## 📱 Mobil Test Hesapları

### Mobil Kullanıcı
- **E-posta**: mobile@test.com
- **Şifre**: mobile123
- **Cihaz**: iPhone, Android
- **Amaç**: Responsive tasarım testi

## 🌍 Çoklu Dil Test Hesapları

### Türkçe Kullanıcı
- **E-posta**: turkish@test.com
- **Şifre**: test123
- **Dil**: Türkçe

### İngilizce Kullanıcı
- **E-posta**: english@test.com
- **Şifre**: test123
- **Dil**: İngilizce

### Almanca Kullanıcı
- **E-posta**: german@test.com
- **Şifre**: test123
- **Dil**: Almanca

### Fransızca Kullanıcı
- **E-posta**: french@test.com
- **Şifre**: test123
- **Dil**: Fransızca

### İspanyolca Kullanıcı
- **E-posta**: spanish@test.com
- **Şifre**: test123
- **Dil**: İspanyolca

### İtalyanca Kullanıcı
- **E-posta**: italian@test.com
- **Şifre**: test123
- **Dil**: İtalyanca

### Rusça Kullanıcı
- **E-posta**: russian@test.com
- **Şifre**: test123
- **Dil**: Rusça

### Arapça Kullanıcı
- **E-posta**: arabic@test.com
- **Şifre**: test123
- **Dil**: Arapça

## 📊 Performans Test Hesapları

### Yüksek Aktivite Kullanıcısı
- **E-posta**: highactivity@test.com
- **Şifre**: test123
- **Özellik**: Çok sayıda video izleme
- **Amaç**: Performans testi

### Eşzamanlı Kullanıcı 1-10
- **E-posta**: concurrent1@test.com - concurrent10@test.com
- **Şifre**: test123
- **Amaç**: Eşzamanlı erişim testi

## 🎯 Hızlı Erişim Tablosu

| Hesap Türü | E-posta | Şifre | Durum |
|------------|---------|-------|-------|
| Demo | demo@test.com | 123456 | Aktif |
| Yeni Öğrenci | student1@lms.com | student123 | %0 |
| Aktif Öğrenci | student2@lms.com | student123 | %44 |
| İleri Öğrenci | student3@lms.com | student123 | %89 |
| Mezun | graduate@lms.com | student123 | %100 |
| Test | test@lms.com | test123 | Test |
| Admin | admin@lms.com | admin123 | Yönetici |

## 📝 Notlar

### Önemli Bilgiler
- Tüm test hesapları geliştirme ortamı içindir
- Üretim ortamında bu hesapları kullanmayın
- Şifreler güvenli şekilde hash'lenmiştir
- Test sonrası hesapları temizleyebilirsiniz

### Hesap Oluşturma
Test hesaplarını oluşturmak için:
1. `install.php` sayfasını çalıştırın
2. Veya manuel olarak kayıt sayfasından oluşturun
3. Veya SQL scriptini çalıştırın

### Hesap Sıfırlama
Test hesaplarını sıfırlamak için:
```sql
-- Tüm kullanıcıları sil
DELETE FROM users WHERE email LIKE '%@test.com' OR email LIKE '%@lms.com';

-- İlerleme kayıtlarını sil
DELETE FROM video_progress;

-- Sertifikaları sil
DELETE FROM certificates;
```

## 🔄 Güncelleme Geçmişi

- **17.02.2026**: İlk versiyon oluşturuldu
- Test hesapları eklendi
- Senaryolar tanımlandı

---

**Not**: Bu hesaplar sadece test amaçlıdır. Gerçek kullanıcı verileri içermez.
