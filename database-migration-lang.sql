-- Dil desteği için veritabanı migration
-- videos tablosuna language sütunu ekle
ALTER TABLE videos
ADD COLUMN language VARCHAR(5) DEFAULT 'tr' AFTER order_number;

-- video_progress tablosuna language sütunu ekle
ALTER TABLE video_progress
ADD COLUMN language VARCHAR(5) DEFAULT 'tr' AFTER video_id;

-- Mevcut unique key'i güncelle (user_id, video_id, language)
ALTER TABLE video_progress DROP INDEX unique_user_video;

ALTER TABLE video_progress
ADD UNIQUE KEY unique_user_video_lang (user_id, video_id, language);

-- Mevcut videoları Türkçe olarak işaretle
UPDATE videos
SET
    language = 'tr'
WHERE
    language IS NULL
    OR language = 'tr';

-- Her dil için video başlıkları
-- İngilizce
INSERT INTO
    videos (
        title,
        description,
        video_url,
        duration,
        order_number,
        language
    )
VALUES (
        'Introduction & Greetings',
        'Basic greeting dialogues and introduction phrases',
        'assets/videos/en/1.mp4',
        300,
        1,
        'en'
    ),
    (
        'Daily Routines',
        'Daily activities and time expressions',
        'assets/videos/en/2.mp4',
        420,
        2,
        'en'
    ),
    (
        'Shopping Dialogues',
        'Shopping at stores and asking prices',
        'assets/videos/en/3.mp4',
        380,
        3,
        'en'
    ),
    (
        'Ordering at Restaurant',
        'Ordering food and paying the bill',
        'assets/videos/en/4.mp4',
        360,
        4,
        'en'
    ),
    (
        'Asking Directions',
        'Asking and giving directions',
        'assets/videos/en/5.mp4',
        340,
        5,
        'en'
    ),
    (
        'Health & Hospital',
        'Health issues and doctor appointments',
        'assets/videos/en/6.mp4',
        400,
        6,
        'en'
    ),
    (
        'Travel & Transport',
        'Buying tickets and transportation',
        'assets/videos/en/7.mp4',
        390,
        7,
        'en'
    ),
    (
        'Weather Talk',
        'Talking about the weather',
        'assets/videos/en/8.mp4',
        320,
        8,
        'en'
    ),
    (
        'Hobbies & Interests',
        'Free time activities and hobbies',
        'assets/videos/en/9.mp4',
        350,
        9,
        'en'
    );

-- Almanca
INSERT INTO
    videos (
        title,
        description,
        video_url,
        duration,
        order_number,
        language
    )
VALUES (
        'Begrüßung & Vorstellung',
        'Grundlegende Begrüßungsdialoge und Vorstellungsphrasen',
        'assets/videos/de/1.mp4',
        300,
        1,
        'de'
    ),
    (
        'Tägliche Routinen',
        'Tägliche Aktivitäten und Zeitausdrücke',
        'assets/videos/de/2.mp4',
        420,
        2,
        'de'
    ),
    (
        'Einkaufsdialoge',
        'Im Geschäft einkaufen und nach Preisen fragen',
        'assets/videos/de/3.mp4',
        380,
        3,
        'de'
    ),
    (
        'Im Restaurant bestellen',
        'Essen bestellen und die Rechnung bezahlen',
        'assets/videos/de/4.mp4',
        360,
        4,
        'de'
    ),
    (
        'Nach dem Weg fragen',
        'Nach dem Weg fragen und Wegbeschreibungen geben',
        'assets/videos/de/5.mp4',
        340,
        5,
        'de'
    ),
    (
        'Gesundheit & Krankenhaus',
        'Gesundheitsprobleme und Arzttermine',
        'assets/videos/de/6.mp4',
        400,
        6,
        'de'
    ),
    (
        'Reisen & Verkehr',
        'Tickets kaufen und Transportmittel',
        'assets/videos/de/7.mp4',
        390,
        7,
        'de'
    ),
    (
        'Wettergespräch',
        'Über das Wetter sprechen',
        'assets/videos/de/8.mp4',
        320,
        8,
        'de'
    ),
    (
        'Hobbys & Interessen',
        'Freizeitaktivitäten und Hobbys',
        'assets/videos/de/9.mp4',
        350,
        9,
        'de'
    );

-- Fransızca
INSERT INTO
    videos (
        title,
        description,
        video_url,
        duration,
        order_number,
        language
    )
VALUES (
        'Salutations & Présentation',
        'Dialogues de salutation et phrases de présentation',
        'assets/videos/fr/1.mp4',
        300,
        1,
        'fr'
    ),
    (
        'Routines Quotidiennes',
        'Activités quotidiennes et expressions de temps',
        'assets/videos/fr/2.mp4',
        420,
        2,
        'fr'
    ),
    (
        'Dialogues de Shopping',
        'Faire des achats et demander les prix',
        'assets/videos/fr/3.mp4',
        380,
        3,
        'fr'
    ),
    (
        'Commander au Restaurant',
        'Commander de la nourriture et payer',
        'assets/videos/fr/4.mp4',
        360,
        4,
        'fr'
    ),
    (
        'Demander son Chemin',
        'Demander et donner des directions',
        'assets/videos/fr/5.mp4',
        340,
        5,
        'fr'
    ),
    (
        'Santé & Hôpital',
        'Problèmes de santé et rendez-vous médical',
        'assets/videos/fr/6.mp4',
        400,
        6,
        'fr'
    ),
    (
        'Voyage & Transport',
        'Acheter des billets et transports',
        'assets/videos/fr/7.mp4',
        390,
        7,
        'fr'
    ),
    (
        'Parler de la Météo',
        'Parler du temps qu\'il fait',
        'assets/videos/fr/8.mp4',
        320,
        8,
        'fr'
    ),
    (
        'Loisirs & Centres d\'intérêt',
        'Activités de loisirs et hobbies',
        'assets/videos/fr/9.mp4',
        350,
        9,
        'fr'
    );

-- İspanyolca
INSERT INTO
    videos (
        title,
        description,
        video_url,
        duration,
        order_number,
        language
    )
VALUES (
        'Saludos y Presentación',
        'Diálogos básicos de saludo y frases de presentación',
        'assets/videos/es/1.mp4',
        300,
        1,
        'es'
    ),
    (
        'Rutinas Diarias',
        'Actividades diarias y expresiones de tiempo',
        'assets/videos/es/2.mp4',
        420,
        2,
        'es'
    ),
    (
        'Diálogos de Compras',
        'Comprar en tiendas y preguntar precios',
        'assets/videos/es/3.mp4',
        380,
        3,
        'es'
    ),
    (
        'Pedir en el Restaurante',
        'Pedir comida y pagar la cuenta',
        'assets/videos/es/4.mp4',
        360,
        4,
        'es'
    ),
    (
        'Pedir Direcciones',
        'Preguntar y dar direcciones',
        'assets/videos/es/5.mp4',
        340,
        5,
        'es'
    ),
    (
        'Salud y Hospital',
        'Problemas de salud y citas médicas',
        'assets/videos/es/6.mp4',
        400,
        6,
        'es'
    ),
    (
        'Viaje y Transporte',
        'Comprar billetes y medios de transporte',
        'assets/videos/es/7.mp4',
        390,
        7,
        'es'
    ),
    (
        'Hablar del Clima',
        'Hablar sobre el tiempo',
        'assets/videos/es/8.mp4',
        320,
        8,
        'es'
    ),
    (
        'Pasatiempos e Intereses',
        'Actividades de ocio y pasatiempos',
        'assets/videos/es/9.mp4',
        350,
        9,
        'es'
    );

-- İtalyanca
INSERT INTO
    videos (
        title,
        description,
        video_url,
        duration,
        order_number,
        language
    )
VALUES (
        'Saluti e Presentazione',
        'Dialoghi di saluto e frasi di presentazione',
        'assets/videos/it/1.mp4',
        300,
        1,
        'it'
    ),
    (
        'Routine Quotidiane',
        'Attività quotidiane ed espressioni di tempo',
        'assets/videos/it/2.mp4',
        420,
        2,
        'it'
    ),
    (
        'Dialoghi di Shopping',
        'Fare acquisti e chiedere i prezzi',
        'assets/videos/it/3.mp4',
        380,
        3,
        'it'
    ),
    (
        'Ordinare al Ristorante',
        'Ordinare cibo e pagare il conto',
        'assets/videos/it/4.mp4',
        360,
        4,
        'it'
    ),
    (
        'Chiedere Indicazioni',
        'Chiedere e dare indicazioni stradali',
        'assets/videos/it/5.mp4',
        340,
        5,
        'it'
    ),
    (
        'Salute e Ospedale',
        'Problemi di salute e appuntamenti medici',
        'assets/videos/it/6.mp4',
        400,
        6,
        'it'
    ),
    (
        'Viaggio e Trasporto',
        'Comprare biglietti e mezzi di trasporto',
        'assets/videos/it/7.mp4',
        390,
        7,
        'it'
    ),
    (
        'Parlare del Tempo',
        'Parlare del tempo atmosferico',
        'assets/videos/it/8.mp4',
        320,
        8,
        'it'
    ),
    (
        'Hobby e Interessi',
        'Attività del tempo libero e hobby',
        'assets/videos/it/9.mp4',
        350,
        9,
        'it'
    );

-- Rusça
INSERT INTO
    videos (
        title,
        description,
        video_url,
        duration,
        order_number,
        language
    )
VALUES (
        'Приветствие и Знакомство',
        'Базовые диалоги приветствия и фразы знакомства',
        'assets/videos/ru/1.mp4',
        300,
        1,
        'ru'
    ),
    (
        'Ежедневные Рутины',
        'Ежедневные занятия и выражения времени',
        'assets/videos/ru/2.mp4',
        420,
        2,
        'ru'
    ),
    (
        'Диалоги о Покупках',
        'Покупки в магазинах и вопросы о ценах',
        'assets/videos/ru/3.mp4',
        380,
        3,
        'ru'
    ),
    (
        'Заказ в Ресторане',
        'Заказ еды и оплата счёта',
        'assets/videos/ru/4.mp4',
        360,
        4,
        'ru'
    ),
    (
        'Спросить Дорогу',
        'Спрашивать и объяснять дорогу',
        'assets/videos/ru/5.mp4',
        340,
        5,
        'ru'
    ),
    (
        'Здоровье и Больница',
        'Проблемы со здоровьем и запись к врачу',
        'assets/videos/ru/6.mp4',
        400,
        6,
        'ru'
    ),
    (
        'Путешествие и Транспорт',
        'Покупка билетов и транспорт',
        'assets/videos/ru/7.mp4',
        390,
        7,
        'ru'
    ),
    (
        'Разговор о Погоде',
        'Разговоры о погоде',
        'assets/videos/ru/8.mp4',
        320,
        8,
        'ru'
    ),
    (
        'Хобби и Интересы',
        'Досуг и увлечения',
        'assets/videos/ru/9.mp4',
        350,
        9,
        'ru'
    );

-- Arapça
INSERT INTO
    videos (
        title,
        description,
        video_url,
        duration,
        order_number,
        language
    )
VALUES (
        'التحية والتعارف',
        'حوارات التحية الأساسية وعبارات التعارف',
        'assets/videos/ar/1.mp4',
        300,
        1,
        'ar'
    ),
    (
        'الروتين اليومي',
        'الأنشطة اليومية وتعبيرات الوقت',
        'assets/videos/ar/2.mp4',
        420,
        2,
        'ar'
    ),
    (
        'حوارات التسوق',
        'التسوق في المتاجر والسؤال عن الأسعار',
        'assets/videos/ar/3.mp4',
        380,
        3,
        'ar'
    ),
    (
        'الطلب في المطعم',
        'طلب الطعام ودفع الفاتورة',
        'assets/videos/ar/4.mp4',
        360,
        4,
        'ar'
    ),
    (
        'السؤال عن الاتجاهات',
        'السؤال عن الطريق وإعطاء التوجيهات',
        'assets/videos/ar/5.mp4',
        340,
        5,
        'ar'
    ),
    (
        'الصحة والمستشفى',
        'المشاكل الصحية ومواعيد الطبيب',
        'assets/videos/ar/6.mp4',
        400,
        6,
        'ar'
    ),
    (
        'السفر والمواصلات',
        'شراء التذاكر ووسائل النقل',
        'assets/videos/ar/7.mp4',
        390,
        7,
        'ar'
    ),
    (
        'الحديث عن الطقس',
        'التحدث عن حالة الطقس',
        'assets/videos/ar/8.mp4',
        320,
        8,
        'ar'
    ),
    (
        'الهوايات والاهتمامات',
        'أنشطة وقت الفراغ والهوايات',
        'assets/videos/ar/9.mp4',
        350,
        9,
        'ar'
    );