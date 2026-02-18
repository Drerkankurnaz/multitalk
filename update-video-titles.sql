-- Mevcut Türkçe videoların başlıklarını güncelle
UPDATE videos
SET
    title = 'Giriş',
    description = 'Temel tanışma diyalogları ve selamlaşma ifadeleri'
WHERE
    language = 'tr'
    AND order_number = 1;

UPDATE videos
SET
    title = 'Yolda',
    description = 'Yol sorma, yön tarifi ve ulaşım diyalogları'
WHERE
    language = 'tr'
    AND order_number = 2;

UPDATE videos
SET
    title = 'Telefonda',
    description = 'Telefon görüşmesi ve iletişim diyalogları'
WHERE
    language = 'tr'
    AND order_number = 3;

UPDATE videos
SET
    title = 'Üniversitede',
    description = 'Üniversite ortamında günlük iletişim diyalogları'
WHERE
    language = 'tr'
    AND order_number = 4;

UPDATE videos
SET
    title = 'Süpermarkette',
    description = 'Süpermarkette alışveriş ve fiyat sorma diyalogları'
WHERE
    language = 'tr'
    AND order_number = 5;

UPDATE videos
SET
    title = 'Evde',
    description = 'Ev ortamında günlük yaşam diyalogları'
WHERE
    language = 'tr'
    AND order_number = 6;

UPDATE videos
SET
    title = 'Restoranda',
    description = 'Restoranda sipariş verme ve hesap ödeme diyalogları'
WHERE
    language = 'tr'
    AND order_number = 7;

UPDATE videos
SET
    title = 'Mağazada',
    description = 'Mağazada alışveriş ve ürün sorma diyalogları'
WHERE
    language = 'tr'
    AND order_number = 8;

UPDATE videos
SET
    title = 'Garda',
    description = 'Tren garında bilet alma ve seyahat diyalogları'
WHERE
    language = 'tr'
    AND order_number = 9;

-- Mevcut İngilizce videoların başlıklarını güncelle
UPDATE videos
SET
    title = 'Introduction',
    description = 'Basic greeting dialogues and introduction phrases'
WHERE
    language = 'en'
    AND order_number = 1;

UPDATE videos
SET
    title = 'On the Road',
    description = 'Asking directions and transportation dialogues'
WHERE
    language = 'en'
    AND order_number = 2;

UPDATE videos
SET
    title = 'On the Phone',
    description = 'Phone conversation and communication dialogues'
WHERE
    language = 'en'
    AND order_number = 3;

UPDATE videos
SET
    title = 'At the University',
    description = 'Daily communication dialogues at university'
WHERE
    language = 'en'
    AND order_number = 4;

UPDATE videos
SET
    title = 'At the Supermarket',
    description = 'Shopping and asking prices at the supermarket'
WHERE
    language = 'en'
    AND order_number = 5;

UPDATE videos
SET
    title = 'At Home',
    description = 'Daily life dialogues at home'
WHERE
    language = 'en'
    AND order_number = 6;

UPDATE videos
SET
    title = 'At the Restaurant',
    description = 'Ordering food and paying the bill'
WHERE
    language = 'en'
    AND order_number = 7;

UPDATE videos
SET
    title = 'At the Store',
    description = 'Shopping and asking about products'
WHERE
    language = 'en'
    AND order_number = 8;

UPDATE videos
SET
    title = 'At the Station',
    description = 'Buying tickets and travel dialogues at the station'
WHERE
    language = 'en'
    AND order_number = 9;

-- Mevcut Almanca videoların başlıklarını güncelle
UPDATE videos
SET
    title = 'Einführung',
    description = 'Grundlegende Begrüßungsdialoge und Vorstellungsphrasen'
WHERE
    language = 'de'
    AND order_number = 1;

UPDATE videos
SET
    title = 'Unterwegs',
    description = 'Wegbeschreibungen und Transportdialoge'
WHERE
    language = 'de'
    AND order_number = 2;

UPDATE videos
SET
    title = 'Am Telefon',
    description = 'Telefongespräche und Kommunikationsdialoge'
WHERE
    language = 'de'
    AND order_number = 3;

UPDATE videos
SET
    title = 'An der Universität',
    description = 'Tägliche Kommunikation an der Universität'
WHERE
    language = 'de'
    AND order_number = 4;

UPDATE videos
SET
    title = 'Im Supermarkt',
    description = 'Einkaufen und nach Preisen fragen im Supermarkt'
WHERE
    language = 'de'
    AND order_number = 5;

UPDATE videos
SET
    title = 'Zu Hause',
    description = 'Alltagsdialoge zu Hause'
WHERE
    language = 'de'
    AND order_number = 6;

UPDATE videos
SET
    title = 'Im Restaurant',
    description = 'Essen bestellen und die Rechnung bezahlen'
WHERE
    language = 'de'
    AND order_number = 7;

UPDATE videos
SET
    title = 'Im Geschäft',
    description = 'Einkaufen und nach Produkten fragen'
WHERE
    language = 'de'
    AND order_number = 8;

UPDATE videos
SET
    title = 'Am Bahnhof',
    description = 'Fahrkarten kaufen und Reisedialoge am Bahnhof'
WHERE
    language = 'de'
    AND order_number = 9;

-- Mevcut Fransızca videoların başlıklarını güncelle
UPDATE videos
SET
    title = 'Introduction',
    description = 'Dialogues de salutation et phrases de présentation'
WHERE
    language = 'fr'
    AND order_number = 1;

UPDATE videos
SET
    title = 'En Route',
    description = 'Demander son chemin et dialogues de transport'
WHERE
    language = 'fr'
    AND order_number = 2;

UPDATE videos
SET
    title = 'Au Téléphone',
    description = 'Conversations téléphoniques et dialogues de communication'
WHERE
    language = 'fr'
    AND order_number = 3;

UPDATE videos
SET
    title = 'À l''Université',
    description = 'Communication quotidienne à l''université'
WHERE
    language = 'fr'
    AND order_number = 4;

UPDATE videos
SET
    title = 'Au Supermarché',
    description = 'Faire les courses et demander les prix au supermarché'
WHERE
    language = 'fr'
    AND order_number = 5;

UPDATE videos
SET
    title = 'À la Maison',
    description = 'Dialogues de la vie quotidienne à la maison'
WHERE
    language = 'fr'
    AND order_number = 6;

UPDATE videos
SET
    title = 'Au Restaurant',
    description = 'Commander de la nourriture et payer l''addition'
WHERE
    language = 'fr'
    AND order_number = 7;

UPDATE videos
SET
    title = 'Au Magasin',
    description = 'Faire du shopping et demander des renseignements'
WHERE
    language = 'fr'
    AND order_number = 8;

UPDATE videos
SET
    title = 'À la Gare',
    description = 'Acheter des billets et dialogues de voyage à la gare'
WHERE
    language = 'fr'
    AND order_number = 9;

-- Mevcut İspanyolca videoların başlıklarını güncelle
UPDATE videos
SET
    title = 'Introducción',
    description = 'Diálogos básicos de saludo y frases de presentación'
WHERE
    language = 'es'
    AND order_number = 1;

UPDATE videos
SET
    title = 'En el Camino',
    description = 'Pedir direcciones y diálogos de transporte'
WHERE
    language = 'es'
    AND order_number = 2;

UPDATE videos
SET
    title = 'Por Teléfono',
    description = 'Conversaciones telefónicas y diálogos de comunicación'
WHERE
    language = 'es'
    AND order_number = 3;

UPDATE videos
SET
    title = 'En la Universidad',
    description = 'Comunicación diaria en la universidad'
WHERE
    language = 'es'
    AND order_number = 4;

UPDATE videos
SET
    title = 'En el Supermercado',
    description = 'Comprar y preguntar precios en el supermercado'
WHERE
    language = 'es'
    AND order_number = 5;

UPDATE videos
SET
    title = 'En Casa',
    description = 'Diálogos de la vida diaria en casa'
WHERE
    language = 'es'
    AND order_number = 6;

UPDATE videos
SET
    title = 'En el Restaurante',
    description = 'Pedir comida y pagar la cuenta'
WHERE
    language = 'es'
    AND order_number = 7;

UPDATE videos
SET
    title = 'En la Tienda',
    description = 'Comprar y preguntar sobre productos'
WHERE
    language = 'es'
    AND order_number = 8;

UPDATE videos
SET
    title = 'En la Estación',
    description = 'Comprar billetes y diálogos de viaje en la estación'
WHERE
    language = 'es'
    AND order_number = 9;

-- Mevcut İtalyanca videoların başlıklarını güncelle
UPDATE videos
SET
    title = 'Introduzione',
    description = 'Dialoghi di saluto e frasi di presentazione'
WHERE
    language = 'it'
    AND order_number = 1;

UPDATE videos
SET
    title = 'Per Strada',
    description = 'Chiedere indicazioni e dialoghi di trasporto'
WHERE
    language = 'it'
    AND order_number = 2;

UPDATE videos
SET
    title = 'Al Telefono',
    description = 'Conversazioni telefoniche e dialoghi di comunicazione'
WHERE
    language = 'it'
    AND order_number = 3;

UPDATE videos
SET
    title = 'All''Università',
    description = 'Comunicazione quotidiana all''università'
WHERE
    language = 'it'
    AND order_number = 4;

UPDATE videos
SET
    title = 'Al Supermercato',
    description = 'Fare la spesa e chiedere i prezzi al supermercato'
WHERE
    language = 'it'
    AND order_number = 5;

UPDATE videos
SET
    title = 'A Casa',
    description = 'Dialoghi della vita quotidiana a casa'
WHERE
    language = 'it'
    AND order_number = 6;

UPDATE videos
SET
    title = 'Al Ristorante',
    description = 'Ordinare cibo e pagare il conto'
WHERE
    language = 'it'
    AND order_number = 7;

UPDATE videos
SET
    title = 'Al Negozio',
    description = 'Fare acquisti e chiedere informazioni sui prodotti'
WHERE
    language = 'it'
    AND order_number = 8;

UPDATE videos
SET
    title = 'Alla Stazione',
    description = 'Comprare biglietti e dialoghi di viaggio alla stazione'
WHERE
    language = 'it'
    AND order_number = 9;

-- Mevcut Rusça videoların başlıklarını güncelle
UPDATE videos
SET
    title = 'Введение',
    description = 'Базовые диалоги приветствия и фразы знакомства'
WHERE
    language = 'ru'
    AND order_number = 1;

UPDATE videos
SET
    title = 'В Дороге',
    description = 'Спрашивать дорогу и транспортные диалоги'
WHERE
    language = 'ru'
    AND order_number = 2;

UPDATE videos
SET
    title = 'По Телефону',
    description = 'Телефонные разговоры и диалоги общения'
WHERE
    language = 'ru'
    AND order_number = 3;

UPDATE videos
SET
    title = 'В Университете',
    description = 'Повседневное общение в университете'
WHERE
    language = 'ru'
    AND order_number = 4;

UPDATE videos
SET
    title = 'В Супермаркете',
    description = 'Покупки и вопросы о ценах в супермаркете'
WHERE
    language = 'ru'
    AND order_number = 5;

UPDATE videos
SET
    title = 'Дома',
    description = 'Диалоги повседневной жизни дома'
WHERE
    language = 'ru'
    AND order_number = 6;

UPDATE videos
SET
    title = 'В Ресторане',
    description = 'Заказ еды и оплата счёта'
WHERE
    language = 'ru'
    AND order_number = 7;

UPDATE videos
SET
    title = 'В Магазине',
    description = 'Покупки и вопросы о товарах'
WHERE
    language = 'ru'
    AND order_number = 8;

UPDATE videos
SET
    title = 'На Вокзале',
    description = 'Покупка билетов и диалоги о путешествии на вокзале'
WHERE
    language = 'ru'
    AND order_number = 9;

-- Mevcut Arapça videoların başlıklarını güncelle
UPDATE videos
SET
    title = 'المقدمة',
    description = 'حوارات التحية الأساسية وعبارات التعارف'
WHERE
    language = 'ar'
    AND order_number = 1;

UPDATE videos
SET
    title = 'في الطريق',
    description = 'السؤال عن الطريق وحوارات النقل'
WHERE
    language = 'ar'
    AND order_number = 2;

UPDATE videos
SET
    title = 'على الهاتف',
    description = 'المحادثات الهاتفية وحوارات التواصل'
WHERE
    language = 'ar'
    AND order_number = 3;

UPDATE videos
SET
    title = 'في الجامعة',
    description = 'التواصل اليومي في الجامعة'
WHERE
    language = 'ar'
    AND order_number = 4;

UPDATE videos
SET
    title = 'في السوبرماركت',
    description = 'التسوق والسؤال عن الأسعار في السوبرماركت'
WHERE
    language = 'ar'
    AND order_number = 5;

UPDATE videos
SET
    title = 'في البيت',
    description = 'حوارات الحياة اليومية في المنزل'
WHERE
    language = 'ar'
    AND order_number = 6;

UPDATE videos
SET
    title = 'في المطعم',
    description = 'طلب الطعام ودفع الفاتورة'
WHERE
    language = 'ar'
    AND order_number = 7;

UPDATE videos
SET
    title = 'في المتجر',
    description = 'التسوق والسؤال عن المنتجات'
WHERE
    language = 'ar'
    AND order_number = 8;

UPDATE videos
SET
    title = 'في المحطة',
    description = 'شراء التذاكر وحوارات السفر في المحطة'
WHERE
    language = 'ar'
    AND order_number = 9;