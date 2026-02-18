-- =============================================
-- Video başlıklarını güncelle ve Vimeo linkleri ekle
-- 15 konu x 8 dil = 120 video
-- =============================================

-- Önce mevcut videoların başlıklarını ve URL'lerini güncelle
-- Konu 2: Yolda (order_number = 2)
UPDATE videos
SET
    title = 'Yolda',
    description = 'Yol sorma, yön tarifi ve ulaşım diyalogları',
    video_url = 'https://player.vimeo.com/video/1147678374'
WHERE
    language = 'tr'
    AND order_number = 2;

UPDATE videos
SET
    title = 'On the Road',
    description = 'Asking directions and transportation dialogues',
    video_url = 'https://player.vimeo.com/video/1147678972'
WHERE
    language = 'en'
    AND order_number = 2;

UPDATE videos
SET
    title = 'Unterwegs',
    description = 'Wegbeschreibungen und Transportdialoge',
    video_url = 'https://player.vimeo.com/video/1147679436'
WHERE
    language = 'de'
    AND order_number = 2;

UPDATE videos
SET
    title = 'En Route',
    description = 'Demander son chemin et dialogues de transport',
    video_url = 'https://player.vimeo.com/video/1147679173'
WHERE
    language = 'fr'
    AND order_number = 2;

UPDATE videos
SET
    title = 'En el Camino',
    description = 'Pedir direcciones y diálogos de transporte',
    video_url = 'https://player.vimeo.com/video/1147678775'
WHERE
    language = 'es'
    AND order_number = 2;

UPDATE videos
SET
    title = 'Per Strada',
    description = 'Chiedere indicazioni e dialoghi di trasporto',
    video_url = 'https://player.vimeo.com/video/1147678639'
WHERE
    language = 'it'
    AND order_number = 2;

UPDATE videos
SET
    title = 'В Дороге',
    description = 'Спрашивать дорогу и транспортные диалоги',
    video_url = 'https://player.vimeo.com/video/1147678510'
WHERE
    language = 'ru'
    AND order_number = 2;

UPDATE videos
SET
    title = 'في الطريق',
    description = 'السؤال عن الطريق وحوارات النقل',
    video_url = 'https://player.vimeo.com/video/1147679298'
WHERE
    language = 'ar'
    AND order_number = 2;

-- Konu 3: Telefonda (order_number = 3)
UPDATE videos
SET
    title = 'Telefonda',
    description = 'Telefon görüşmesi ve iletişim diyalogları',
    video_url = 'https://player.vimeo.com/video/1147680009'
WHERE
    language = 'tr'
    AND order_number = 3;

UPDATE videos
SET
    title = 'On the Phone',
    description = 'Phone conversation and communication dialogues',
    video_url = 'https://player.vimeo.com/video/1147680353'
WHERE
    language = 'en'
    AND order_number = 3;

UPDATE videos
SET
    title = 'Am Telefon',
    description = 'Telefongespräche und Kommunikationsdialoge',
    video_url = 'https://player.vimeo.com/video/1147680640'
WHERE
    language = 'de'
    AND order_number = 3;

UPDATE videos
SET
    title = 'Au Téléphone',
    description = 'Conversations téléphoniques et dialogues de communication',
    video_url = 'https://player.vimeo.com/video/1147680442'
WHERE
    language = 'fr'
    AND order_number = 3;

UPDATE videos
SET
    title = 'Por Teléfono',
    description = 'Conversaciones telefónicas y diálogos de comunicación',
    video_url = 'https://player.vimeo.com/video/1147680267'
WHERE
    language = 'es'
    AND order_number = 3;

UPDATE videos
SET
    title = 'Al Telefono',
    description = 'Conversazioni telefoniche e dialoghi di comunicazione',
    video_url = 'https://player.vimeo.com/video/1147680186'
WHERE
    language = 'it'
    AND order_number = 3;

UPDATE videos
SET
    title = 'По Телефону',
    description = 'Телефонные разговоры и диалоги общения',
    video_url = 'https://player.vimeo.com/video/1147680099'
WHERE
    language = 'ru'
    AND order_number = 3;

UPDATE videos
SET
    title = 'على الهاتف',
    description = 'المحادثات الهاتفية وحوارات التواصل',
    video_url = 'https://player.vimeo.com/video/1147680540'
WHERE
    language = 'ar'
    AND order_number = 3;

-- Konu 5: Süpermarkette (order_number = 5)
UPDATE videos
SET
    title = 'Süpermarkette',
    description = 'Süpermarkette alışveriş ve fiyat sorma diyalogları',
    video_url = 'https://player.vimeo.com/video/1147652843'
WHERE
    language = 'tr'
    AND order_number = 5;

UPDATE videos
SET
    title = 'At the Supermarket',
    description = 'Shopping and asking prices at the supermarket',
    video_url = 'https://player.vimeo.com/video/1147653707'
WHERE
    language = 'en'
    AND order_number = 5;

UPDATE videos
SET
    title = 'Im Supermarkt',
    description = 'Einkaufen und nach Preisen fragen im Supermarkt',
    video_url = 'https://player.vimeo.com/video/1147654410'
WHERE
    language = 'de'
    AND order_number = 5;

UPDATE videos
SET
    title = 'Au Supermarché',
    description = 'Faire les courses et demander les prix au supermarché',
    video_url = 'https://player.vimeo.com/video/1147653934'
WHERE
    language = 'fr'
    AND order_number = 5;

UPDATE videos
SET
    title = 'En el Supermercado',
    description = 'Comprar y preguntar precios en el supermercado',
    video_url = 'https://player.vimeo.com/video/1147653501'
WHERE
    language = 'es'
    AND order_number = 5;

UPDATE videos
SET
    title = 'Al Supermercato',
    description = 'Fare la spesa e chiedere i prezzi al supermercato',
    video_url = 'https://player.vimeo.com/video/1147653317'
WHERE
    language = 'it'
    AND order_number = 5;

UPDATE videos
SET
    title = 'В Супермаркете',
    description = 'Покупки и вопросы о ценах в супермаркете',
    video_url = 'https://player.vimeo.com/video/1147653101'
WHERE
    language = 'ru'
    AND order_number = 5;

UPDATE videos
SET
    title = 'في السوبرماركت',
    description = 'التسوق والسؤال عن الأسعار في السوبرماركت',
    video_url = 'https://player.vimeo.com/video/1147654175'
WHERE
    language = 'ar'
    AND order_number = 5;

-- Konu 7: Restoranda (order_number = 7)
UPDATE videos
SET
    title = 'Restoranda',
    description = 'Restoranda sipariş verme ve hesap ödeme diyalogları',
    video_url = 'https://player.vimeo.com/video/1147681169'
WHERE
    language = 'tr'
    AND order_number = 7;

UPDATE videos
SET
    title = 'At the Restaurant',
    description = 'Ordering food and paying the bill',
    video_url = 'https://player.vimeo.com/video/1147681670'
WHERE
    language = 'en'
    AND order_number = 7;

UPDATE videos
SET
    title = 'Im Restaurant',
    description = 'Essen bestellen und die Rechnung bezahlen',
    video_url = 'https://player.vimeo.com/video/1147682315'
WHERE
    language = 'de'
    AND order_number = 7;

UPDATE videos
SET
    title = 'Au Restaurant',
    description = 'Commander de la nourriture et payer l''addition',
    video_url = 'https://player.vimeo.com/video/1147681790'
WHERE
    language = 'fr'
    AND order_number = 7;

UPDATE videos
SET
    title = 'En el Restaurante',
    description = 'Pedir comida y pagar la cuenta',
    video_url = 'https://player.vimeo.com/video/1147681555'
WHERE
    language = 'es'
    AND order_number = 7;

UPDATE videos
SET
    title = 'Al Ristorante',
    description = 'Ordinare cibo e pagare il conto',
    video_url = 'https://player.vimeo.com/video/1147681411'
WHERE
    language = 'it'
    AND order_number = 7;

UPDATE videos
SET
    title = 'В Ресторане',
    description = 'Заказ еды и оплата счёта',
    video_url = 'https://player.vimeo.com/video/1147681314'
WHERE
    language = 'ru'
    AND order_number = 7;

UPDATE videos
SET
    title = 'في المطعم',
    description = 'طلب الطعام ودفع الفاتورة',
    video_url = 'https://player.vimeo.com/video/1147682052'
WHERE
    language = 'ar'
    AND order_number = 7;

-- Konu 8: Mağazada (order_number = 8)
UPDATE videos
SET
    title = 'Mağazada',
    description = 'Mağazada alışveriş ve ürün sorma diyalogları',
    video_url = 'https://player.vimeo.com/video/1147674522'
WHERE
    language = 'tr'
    AND order_number = 8;

UPDATE videos
SET
    title = 'At the Store',
    description = 'Shopping and asking about products',
    video_url = 'https://player.vimeo.com/video/1147676606'
WHERE
    language = 'en'
    AND order_number = 8;

UPDATE videos
SET
    title = 'Im Geschäft',
    description = 'Einkaufen und nach Produkten fragen',
    video_url = 'https://player.vimeo.com/video/1147676182'
WHERE
    language = 'de'
    AND order_number = 8;

UPDATE videos
SET
    title = 'Au Magasin',
    description = 'Faire du shopping et demander des renseignements',
    video_url = 'https://player.vimeo.com/video/1147676426'
WHERE
    language = 'fr'
    AND order_number = 8;

UPDATE videos
SET
    title = 'En la Tienda',
    description = 'Comprar y preguntar sobre productos',
    video_url = 'https://player.vimeo.com/video/1147676778'
WHERE
    language = 'es'
    AND order_number = 8;

UPDATE videos
SET
    title = 'Al Negozio',
    description = 'Fare acquisti e chiedere informazioni sui prodotti',
    video_url = 'https://player.vimeo.com/video/1147676957'
WHERE
    language = 'it'
    AND order_number = 8;

UPDATE videos
SET
    title = 'В Магазине',
    description = 'Покупки и вопросы о товарах',
    video_url = 'https://player.vimeo.com/video/1147674721'
WHERE
    language = 'ru'
    AND order_number = 8;

UPDATE videos
SET
    title = 'في المتجر',
    description = 'التسوق والسؤال عن المنتجات',
    video_url = 'https://player.vimeo.com/video/1147676397'
WHERE
    language = 'ar'
    AND order_number = 8;

-- Konu 9: Garda (order_number = 9)
UPDATE videos
SET
    title = 'Garda',
    description = 'Tren garında bilet alma ve seyahat diyalogları',
    video_url = 'https://player.vimeo.com/video/1147672832'
WHERE
    language = 'tr'
    AND order_number = 9;

UPDATE videos
SET
    title = 'At the Station',
    description = 'Buying tickets and travel dialogues at the station',
    video_url = 'https://player.vimeo.com/video/1147673729'
WHERE
    language = 'en'
    AND order_number = 9;

UPDATE videos
SET
    title = 'Am Bahnhof',
    description = 'Fahrkarten kaufen und Reisedialoge am Bahnhof',
    video_url = 'https://player.vimeo.com/video/1147674274'
WHERE
    language = 'de'
    AND order_number = 9;

UPDATE videos
SET
    title = 'À la Gare',
    description = 'Acheter des billets et dialogues de voyage à la gare',
    video_url = 'https://player.vimeo.com/video/1147673905'
WHERE
    language = 'fr'
    AND order_number = 9;

UPDATE videos
SET
    title = 'En la Estación',
    description = 'Comprar billetes y diálogos de viaje en la estación',
    video_url = 'https://player.vimeo.com/video/1147673532'
WHERE
    language = 'es'
    AND order_number = 9;

UPDATE videos
SET
    title = 'Alla Stazione',
    description = 'Comprare biglietti e dialoghi di viaggio alla stazione',
    video_url = 'https://player.vimeo.com/video/1147673321'
WHERE
    language = 'it'
    AND order_number = 9;

UPDATE videos
SET
    title = 'На Вокзале',
    description = 'Покупка билетов и диалоги о путешествии на вокзале',
    video_url = 'https://player.vimeo.com/video/1147673099'
WHERE
    language = 'ru'
    AND order_number = 9;

UPDATE videos
SET
    title = 'في المحطة',
    description = 'شراء التذاكر وحوارات السفر في المحطة',
    video_url = 'https://player.vimeo.com/video/1147674095'
WHERE
    language = 'ar'
    AND order_number = 9;

-- Konu 1: Giriş (order_number = 1) - Link yok, başlık güncelle
UPDATE videos
SET
    title = 'Giriş',
    description = 'Temel tanışma diyalogları ve selamlaşma ifadeleri'
WHERE
    language = 'tr'
    AND order_number = 1;

UPDATE videos
SET
    title = 'Introduction',
    description = 'Basic greeting dialogues and introduction phrases'
WHERE
    language = 'en'
    AND order_number = 1;

UPDATE videos
SET
    title = 'Einführung',
    description = 'Grundlegende Begrüßungsdialoge und Vorstellungsphrasen'
WHERE
    language = 'de'
    AND order_number = 1;

UPDATE videos
SET
    title = 'Introduction',
    description = 'Dialogues de salutation et phrases de présentation'
WHERE
    language = 'fr'
    AND order_number = 1;

UPDATE videos
SET
    title = 'Introducción',
    description = 'Diálogos básicos de saludo y frases de presentación'
WHERE
    language = 'es'
    AND order_number = 1;

UPDATE videos
SET
    title = 'Introduzione',
    description = 'Dialoghi di saluto e frasi di presentazione'
WHERE
    language = 'it'
    AND order_number = 1;

UPDATE videos
SET
    title = 'Введение',
    description = 'Базовые диалоги приветствия и фразы знакомства'
WHERE
    language = 'ru'
    AND order_number = 1;

UPDATE videos
SET
    title = 'المقدمة',
    description = 'حوارات التحية الأساسية وعبارات التعارف'
WHERE
    language = 'ar'
    AND order_number = 1;

-- Konu 4: Üniversitede (order_number = 4) - Link yok, başlık güncelle
UPDATE videos
SET
    title = 'Üniversitede',
    description = 'Üniversite ortamında günlük iletişim diyalogları'
WHERE
    language = 'tr'
    AND order_number = 4;

UPDATE videos
SET
    title = 'At the University',
    description = 'Daily communication dialogues at university'
WHERE
    language = 'en'
    AND order_number = 4;

UPDATE videos
SET
    title = 'An der Universität',
    description = 'Tägliche Kommunikation an der Universität'
WHERE
    language = 'de'
    AND order_number = 4;

UPDATE videos
SET
    title = 'À l''Université',
    description = 'Communication quotidienne à l''université'
WHERE
    language = 'fr'
    AND order_number = 4;

UPDATE videos
SET
    title = 'En la Universidad',
    description = 'Comunicación diaria en la universidad'
WHERE
    language = 'es'
    AND order_number = 4;

UPDATE videos
SET
    title = 'All''Università',
    description = 'Comunicazione quotidiana all''università'
WHERE
    language = 'it'
    AND order_number = 4;

UPDATE videos
SET
    title = 'В Университете',
    description = 'Повседневное общение в университете'
WHERE
    language = 'ru'
    AND order_number = 4;

UPDATE videos
SET
    title = 'في الجامعة',
    description = 'التواصل اليومي في الجامعة'
WHERE
    language = 'ar'
    AND order_number = 4;

-- Konu 6: Evde (order_number = 6) - Link yok, başlık güncelle
UPDATE videos
SET
    title = 'Evde',
    description = 'Ev ortamında günlük yaşam diyalogları'
WHERE
    language = 'tr'
    AND order_number = 6;

UPDATE videos
SET
    title = 'At Home',
    description = 'Daily life dialogues at home'
WHERE
    language = 'en'
    AND order_number = 6;

UPDATE videos
SET
    title = 'Zu Hause',
    description = 'Alltagsdialoge zu Hause'
WHERE
    language = 'de'
    AND order_number = 6;

UPDATE videos
SET
    title = 'À la Maison',
    description = 'Dialogues de la vie quotidienne à la maison'
WHERE
    language = 'fr'
    AND order_number = 6;

UPDATE videos
SET
    title = 'En Casa',
    description = 'Diálogos de la vida diaria en casa'
WHERE
    language = 'es'
    AND order_number = 6;

UPDATE videos
SET
    title = 'A Casa',
    description = 'Dialoghi della vita quotidiana a casa'
WHERE
    language = 'it'
    AND order_number = 6;

UPDATE videos
SET
    title = 'Дома',
    description = 'Диалоги повседневной жизни дома'
WHERE
    language = 'ru'
    AND order_number = 6;

UPDATE videos
SET
    title = 'في البيت',
    description = 'حوارات الحياة اليومية في المنزل'
WHERE
    language = 'ar'
    AND order_number = 6;

-- =============================================
-- YENİ KONULAR (10-15) - INSERT
-- =============================================

-- Konu 10: Otelde
INSERT INTO
    videos (
        title,
        description,
        video_url,
        subtitle_text,
        duration,
        order_number,
        language
    )
VALUES (
        'Otelde',
        'Otel rezervasyonu, giriş-çıkış ve konaklama diyalogları',
        'https://player.vimeo.com/video/1147661062',
        NULL,
        300,
        10,
        'tr'
    ),
    (
        'At the Hotel',
        'Hotel reservation, check-in/out and accommodation dialogues',
        'https://player.vimeo.com/video/1147661553',
        NULL,
        300,
        10,
        'en'
    ),
    (
        'Im Hotel',
        'Hotelreservierung, Ein-/Auschecken und Unterkunftsdialoge',
        'https://player.vimeo.com/video/1147661945',
        NULL,
        300,
        10,
        'de'
    ),
    (
        'À l''Hôtel',
        'Réservation d''hôtel, enregistrement et dialogues d''hébergement',
        'https://player.vimeo.com/video/1147661701',
        NULL,
        300,
        10,
        'fr'
    ),
    (
        'En el Hotel',
        'Reserva de hotel, registro y diálogos de alojamiento',
        'https://player.vimeo.com/video/1147661416',
        NULL,
        300,
        10,
        'es'
    ),
    (
        'In Albergo',
        'Prenotazione albergo, check-in/out e dialoghi di alloggio',
        'https://player.vimeo.com/video/1147661289',
        NULL,
        300,
        10,
        'it'
    ),
    (
        'В Отеле',
        'Бронирование отеля, регистрация и диалоги о проживании',
        'https://player.vimeo.com/video/1147661170',
        NULL,
        300,
        10,
        'ru'
    ),
    (
        'في الفندق',
        'حجز الفندق وتسجيل الدخول والخروج وحوارات الإقامة',
        'https://player.vimeo.com/video/1147661829',
        NULL,
        300,
        10,
        'ar'
    );

-- Konu 11: Şehirde (link yok)
INSERT INTO
    videos (
        title,
        description,
        video_url,
        subtitle_text,
        duration,
        order_number,
        language
    )
VALUES (
        'Şehirde',
        'Şehirde yol sorma, ulaşım ve kamu alanı diyalogları',
        '',
        NULL,
        300,
        11,
        'tr'
    ),
    (
        'In the City',
        'Asking directions, transportation and public area dialogues in the city',
        '',
        NULL,
        300,
        11,
        'en'
    ),
    (
        'In der Stadt',
        'Wegbeschreibungen, Transport und öffentliche Bereichsdialoge in der Stadt',
        '',
        NULL,
        300,
        11,
        'de'
    ),
    (
        'En Ville',
        'Demander son chemin, transport et dialogues dans les espaces publics',
        '',
        NULL,
        300,
        11,
        'fr'
    ),
    (
        'En la Ciudad',
        'Pedir direcciones, transporte y diálogos en áreas públicas',
        '',
        NULL,
        300,
        11,
        'es'
    ),
    (
        'In Città',
        'Chiedere indicazioni, trasporti e dialoghi nelle aree pubbliche',
        '',
        NULL,
        300,
        11,
        'it'
    ),
    (
        'В Городе',
        'Спрашивать дорогу, транспорт и диалоги в общественных местах',
        '',
        NULL,
        300,
        11,
        'ru'
    ),
    (
        'في المدينة',
        'السؤال عن الطريق والنقل وحوارات الأماكن العامة',
        '',
        NULL,
        300,
        11,
        'ar'
    );

-- Konu 12: Düğünde
INSERT INTO
    videos (
        title,
        description,
        video_url,
        subtitle_text,
        duration,
        order_number,
        language
    )
VALUES (
        'Düğünde',
        'Düğün ortamında tebrik, tanışma ve sosyal etkileşim diyalogları',
        'https://player.vimeo.com/video/1147662080',
        NULL,
        300,
        12,
        'tr'
    ),
    (
        'At the Wedding',
        'Congratulations, meeting people and social interaction dialogues at weddings',
        'https://player.vimeo.com/video/1147662566',
        NULL,
        300,
        12,
        'en'
    ),
    (
        'Auf der Hochzeit',
        'Glückwünsche, Kennenlernen und soziale Interaktionsdialoge bei Hochzeiten',
        'https://player.vimeo.com/video/1147662925',
        NULL,
        300,
        12,
        'de'
    ),
    (
        'Au Mariage',
        'Félicitations, rencontres et dialogues d''interaction sociale aux mariages',
        'https://player.vimeo.com/video/1147662703',
        NULL,
        300,
        12,
        'fr'
    ),
    (
        'En la Boda',
        'Felicitaciones, conocer gente y diálogos de interacción social en bodas',
        'https://player.vimeo.com/video/1147662462',
        NULL,
        300,
        12,
        'es'
    ),
    (
        'Al Matrimonio',
        'Congratulazioni, conoscere persone e dialoghi di interazione sociale ai matrimoni',
        'https://player.vimeo.com/video/1147662279',
        NULL,
        300,
        12,
        'it'
    ),
    (
        'На Свадьбе',
        'Поздравления, знакомства и диалоги социального взаимодействия на свадьбах',
        'https://player.vimeo.com/video/1147662098',
        NULL,
        300,
        12,
        'ru'
    ),
    (
        'في الزفاف',
        'التهاني والتعارف وحوارات التفاعل الاجتماعي في حفلات الزفاف',
        'https://player.vimeo.com/video/1147662817',
        NULL,
        300,
        12,
        'ar'
    );

-- Konu 13: Hastanede
INSERT INTO
    videos (
        title,
        description,
        video_url,
        subtitle_text,
        duration,
        order_number,
        language
    )
VALUES (
        'Hastanede',
        'Hastanede randevu, muayene ve tedavi diyalogları',
        'https://player.vimeo.com/video/1147663028',
        NULL,
        300,
        13,
        'tr'
    ),
    (
        'At the Hospital',
        'Hospital appointment, examination and treatment dialogues',
        'https://player.vimeo.com/video/1147663485',
        NULL,
        300,
        13,
        'en'
    ),
    (
        'Im Krankenhaus',
        'Krankenhaustermin, Untersuchung und Behandlungsdialoge',
        'https://player.vimeo.com/video/1147663762',
        NULL,
        300,
        13,
        'de'
    ),
    (
        'À l''Hôpital',
        'Rendez-vous à l''hôpital, examen et dialogues de traitement',
        'https://player.vimeo.com/video/1147663663',
        NULL,
        300,
        13,
        'fr'
    ),
    (
        'En el Hospital',
        'Cita en el hospital, examen y diálogos de tratamiento',
        'https://player.vimeo.com/video/1147663377',
        NULL,
        300,
        13,
        'es'
    ),
    (
        'In Ospedale',
        'Appuntamento in ospedale, visita e dialoghi di trattamento',
        'https://player.vimeo.com/video/1147663269',
        NULL,
        300,
        13,
        'it'
    ),
    (
        'В Больнице',
        'Запись в больницу, осмотр и диалоги о лечении',
        'https://player.vimeo.com/video/1147663155',
        NULL,
        300,
        13,
        'ru'
    ),
    (
        'في المستشفى',
        'موعد المستشفى والفحص وحوارات العلاج',
        'https://player.vimeo.com/video/1147663581',
        NULL,
        300,
        13,
        'ar'
    );

-- Konu 14: Eczanede
INSERT INTO
    videos (
        title,
        description,
        video_url,
        subtitle_text,
        duration,
        order_number,
        language
    )
VALUES (
        'Eczanede',
        'Eczanede ilaç talebi, kullanım bilgisi ve danışma diyalogları',
        'https://player.vimeo.com/video/1147671969',
        NULL,
        300,
        14,
        'tr'
    ),
    (
        'At the Pharmacy',
        'Medicine request, usage information and consultation dialogues at the pharmacy',
        'https://player.vimeo.com/video/1147672303',
        NULL,
        300,
        14,
        'en'
    ),
    (
        'In der Apotheke',
        'Medikamentenanfrage, Gebrauchsinformationen und Beratungsdialoge in der Apotheke',
        'https://player.vimeo.com/video/1147672701',
        NULL,
        300,
        14,
        'de'
    ),
    (
        'À la Pharmacie',
        'Demande de médicaments, informations d''utilisation et dialogues de consultation',
        'https://player.vimeo.com/video/1147672455',
        NULL,
        300,
        14,
        'fr'
    ),
    (
        'En la Farmacia',
        'Solicitud de medicamentos, información de uso y diálogos de consulta',
        'https://player.vimeo.com/video/1147672303',
        NULL,
        300,
        14,
        'es'
    ),
    (
        'In Farmacia',
        'Richiesta di farmaci, informazioni sull''uso e dialoghi di consulenza',
        'https://player.vimeo.com/video/1147672123',
        NULL,
        300,
        14,
        'it'
    ),
    (
        'В Аптеке',
        'Запрос лекарств, информация об использовании и диалоги консультации',
        'https://player.vimeo.com/video/1147672047',
        NULL,
        300,
        14,
        'ru'
    ),
    (
        'في الصيدلية',
        'طلب الأدوية ومعلومات الاستخدام وحوارات الاستشارة',
        'https://player.vimeo.com/video/1147672610',
        NULL,
        300,
        14,
        'ar'
    );

-- Konu 15: Bankada
INSERT INTO
    videos (
        title,
        description,
        video_url,
        subtitle_text,
        duration,
        order_number,
        language
    )
VALUES (
        'Bankada',
        'Bankada hesap işlemleri ve finansal iletişim diyalogları',
        'https://player.vimeo.com/video/1147677427',
        NULL,
        300,
        15,
        'tr'
    ),
    (
        'At the Bank',
        'Bank account transactions and financial communication dialogues',
        'https://player.vimeo.com/video/1147677989',
        NULL,
        300,
        15,
        'en'
    ),
    (
        'In der Bank',
        'Bankgeschäfte und finanzielle Kommunikationsdialoge',
        'https://player.vimeo.com/video/1147678267',
        NULL,
        300,
        15,
        'de'
    ),
    (
        'À la Banque',
        'Opérations bancaires et dialogues de communication financière',
        'https://player.vimeo.com/video/1147678093',
        NULL,
        300,
        15,
        'fr'
    ),
    (
        'En el Banco',
        'Transacciones bancarias y diálogos de comunicación financiera',
        'https://player.vimeo.com/video/1147677843',
        NULL,
        300,
        15,
        'es'
    ),
    (
        'In Banca',
        'Operazioni bancarie e dialoghi di comunicazione finanziaria',
        'https://player.vimeo.com/video/1147677638',
        NULL,
        300,
        15,
        'it'
    ),
    (
        'В Банке',
        'Банковские операции и диалоги финансового общения',
        'https://player.vimeo.com/video/1147677533',
        NULL,
        300,
        15,
        'ru'
    ),
    (
        'في البنك',
        'المعاملات المصرفية وحوارات التواصل المالي',
        'https://player.vimeo.com/video/1147678181',
        NULL,
        300,
        15,
        'ar'
    );