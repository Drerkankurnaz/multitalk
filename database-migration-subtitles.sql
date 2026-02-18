-- Altyazı desteği için veritabanı migration
-- videos tablosuna subtitle_text sütunu ekle (diyalog metinleri)
ALTER TABLE videos
ADD COLUMN subtitle_text TEXT NULL AFTER video_url;

-- Türkçe altyazılar
UPDATE videos
SET
    subtitle_text = '- Merhaba, hoş geldiniz! Ben Ayşe.\n- Merhaba Ayşe, ben Mehmet. Tanıştığımıza memnun oldum.\n- Ben de memnun oldum. Nereden geliyorsunuz?\n- İstanbul''dan geliyorum. Siz?\n- Ben Ankara''dan geliyorum. Burada ne yapıyorsunuz?\n- Türkçe öğreniyorum. Çok güzel bir dil.\n- Teşekkür ederim! Hoş geldiniz tekrar.'
WHERE
    language = 'tr'
    AND order_number = 1;

UPDATE videos
SET
    subtitle_text = '- Günaydın! Saat kaç?\n- Günaydın! Saat yedi buçuk.\n- Kahvaltı hazır mı?\n- Evet, masada. Bugün ne yapacaksın?\n- Önce işe gideceğim, sonra spor yapacağım.\n- Ben de alışverişe çıkacağım.\n- Akşam yemeğinde buluşalım mı?\n- Olur, saat yedide görüşürüz.'
WHERE
    language = 'tr'
    AND order_number = 2;

UPDATE videos
SET
    subtitle_text = '- İyi günler, size nasıl yardımcı olabilirim?\n- Merhaba, bu elbisenin fiyatı ne kadar?\n- 250 lira efendim.\n- Biraz pahalı. İndirim var mı?\n- Bu hafta %20 indirim var, 200 liraya olur.\n- Tamam, alayım. Kredi kartı geçiyor mu?\n- Evet, geçiyor. Başka bir şey ister misiniz?\n- Hayır, teşekkürler. İyi günler.'
WHERE
    language = 'tr'
    AND order_number = 3;

UPDATE videos
SET
    subtitle_text = '- Hoş geldiniz! Kaç kişisiniz?\n- İki kişiyiz. Pencere kenarı masa var mı?\n- Evet, buyurun bu tarafa. İşte menü.\n- Teşekkürler. Ne önerirsiniz?\n- Bugünkü özel yemeğimiz ızgara levrek.\n- Bir levrek ve bir çorba lütfen.\n- İçecek olarak ne istersiniz?\n- İki ayran lütfen.\n- Hemen getiriyorum, afiyet olsun!'
WHERE
    language = 'tr'
    AND order_number = 4;

UPDATE videos
SET
    subtitle_text = '- Affedersiniz, müze nerede?\n- Düz gidin, ikinci sokaktan sağa dönün.\n- Buradan uzak mı?\n- Hayır, yürüyerek beş dakika.\n- Otobüsle de gidebilir miyim?\n- Evet, 42 numaralı otobüs oraya gider.\n- Durak nerede?\n- Şurada, karşı tarafta. Kolay gelsin!'
WHERE
    language = 'tr'
    AND order_number = 5;

UPDATE videos
SET
    subtitle_text = '- Günaydın doktor bey.\n- Günaydın, buyurun oturun. Şikayetiniz nedir?\n- Başım çok ağrıyor ve ateşim var.\n- Ne zamandır böyle hissediyorsunuz?\n- İki gündür. Boğazım da ağrıyor.\n- Bakayım... Grip olmuşsunuz. İlaç yazıyorum.\n- Günde kaç defa alacağım?\n- Sabah akşam birer tane. Bol su için ve dinlenin.\n- Teşekkür ederim doktor bey.'
WHERE
    language = 'tr'
    AND order_number = 6;

UPDATE videos
SET
    subtitle_text = '- Merhaba, Ankara''ya bir bilet lütfen.\n- Tek yön mü, gidiş-dönüş mü?\n- Gidiş-dönüş olsun.\n- Otobüs mü, tren mi tercih edersiniz?\n- Tren olsun, daha rahat.\n- Saat 14:00 seferi var. Uygun mu?\n- Evet, çok iyi. Fiyatı ne kadar?\n- 180 lira. Pencere kenarı mı istersiniz?\n- Evet lütfen. Teşekkürler.'
WHERE
    language = 'tr'
    AND order_number = 7;

UPDATE videos
SET
    subtitle_text = '- Bugün hava çok güzel, değil mi?\n- Evet, güneşli ve sıcak. Kaç derece?\n- 28 derece gösteriyor.\n- Yarın yağmur yağacakmış.\n- Gerçekten mi? Şemsiye almam lazım.\n- Hafta sonu nasıl olacak?\n- Bulutlu ama yağmursuz diyorlar.\n- İyi, pikniğe gidebiliriz o zaman.'
WHERE
    language = 'tr'
    AND order_number = 8;

UPDATE videos
SET
    subtitle_text = '- Boş zamanlarında ne yaparsın?\n- Kitap okumayı ve yüzmeyi severim. Sen?\n- Ben fotoğraf çekmeyi seviyorum.\n- Ne güzel! Hangi tür fotoğraflar?\n- Doğa fotoğrafları çekiyorum.\n- Ben de doğayı çok seviyorum. Dağcılık yapar mısın?\n- Bazen. Geçen hafta Uludağ''a çıktım.\n- Harika! Bir gün birlikte gidelim.\n- Olur, çok sevinirim!'
WHERE
    language = 'tr'
    AND order_number = 9;

-- İngilizce altyazılar
UPDATE videos
SET
    subtitle_text = '- Hello, welcome! I''m Sarah.\n- Hi Sarah, I''m John. Nice to meet you.\n- Nice to meet you too. Where are you from?\n- I''m from London. And you?\n- I''m from New York. What do you do here?\n- I''m learning English dialogues. It''s very useful.\n- That''s great! Welcome again.'
WHERE
    language = 'en'
    AND order_number = 1;

UPDATE videos
SET
    subtitle_text = '- Good morning! What time is it?\n- Good morning! It''s half past seven.\n- Is breakfast ready?\n- Yes, it''s on the table. What are you doing today?\n- First I''ll go to work, then I''ll exercise.\n- I''m going shopping later.\n- Shall we meet for dinner?\n- Sure, see you at seven.'
WHERE
    language = 'en'
    AND order_number = 2;

UPDATE videos
SET
    subtitle_text = '- Good afternoon, how can I help you?\n- Hi, how much is this dress?\n- It''s 50 dollars, ma''am.\n- That''s a bit expensive. Any discounts?\n- We have 20% off this week, so it''s 40 dollars.\n- Okay, I''ll take it. Do you accept credit cards?\n- Yes, we do. Anything else?\n- No, thank you. Have a nice day.'
WHERE
    language = 'en'
    AND order_number = 3;

UPDATE videos
SET
    subtitle_text = '- Welcome! How many people?\n- Two, please. Do you have a window table?\n- Yes, right this way. Here''s the menu.\n- Thank you. What do you recommend?\n- Today''s special is grilled salmon.\n- One salmon and one soup, please.\n- What would you like to drink?\n- Two lemonades, please.\n- Coming right up. Enjoy your meal!'
WHERE
    language = 'en'
    AND order_number = 4;

UPDATE videos
SET
    subtitle_text = '- Excuse me, where is the museum?\n- Go straight and turn right at the second street.\n- Is it far from here?\n- No, it''s about a five-minute walk.\n- Can I also take a bus?\n- Yes, bus number 42 goes there.\n- Where is the bus stop?\n- It''s right over there, across the street. Good luck!'
WHERE
    language = 'en'
    AND order_number = 5;

UPDATE videos
SET
    subtitle_text = '- Good morning, doctor.\n- Good morning, please have a seat. What''s the problem?\n- I have a terrible headache and a fever.\n- How long have you been feeling this way?\n- For two days. My throat hurts too.\n- Let me check... You have the flu. I''ll prescribe some medicine.\n- How often should I take it?\n- Twice a day, morning and evening. Drink plenty of water and rest.\n- Thank you, doctor.'
WHERE
    language = 'en'
    AND order_number = 6;

UPDATE videos
SET
    subtitle_text = '- Hello, one ticket to Manchester, please.\n- One way or return?\n- Return, please.\n- Do you prefer bus or train?\n- Train, please. It''s more comfortable.\n- There''s a 2 PM departure. Is that okay?\n- Yes, perfect. How much is it?\n- 45 pounds. Would you like a window seat?\n- Yes, please. Thank you.'
WHERE
    language = 'en'
    AND order_number = 7;

UPDATE videos
SET
    subtitle_text = '- Beautiful weather today, isn''t it?\n- Yes, sunny and warm. What''s the temperature?\n- It says 28 degrees.\n- I heard it''s going to rain tomorrow.\n- Really? I need to bring an umbrella.\n- What about the weekend?\n- They say cloudy but no rain.\n- Good, we can go for a picnic then.'
WHERE
    language = 'en'
    AND order_number = 8;

UPDATE videos
SET
    subtitle_text = '- What do you do in your free time?\n- I love reading and swimming. You?\n- I enjoy photography.\n- That''s wonderful! What kind of photos?\n- I take nature photographs.\n- I love nature too. Do you go hiking?\n- Sometimes. Last week I climbed Ben Nevis.\n- Amazing! Let''s go together sometime.\n- Sure, I''d love that!'
WHERE
    language = 'en'
    AND order_number = 9;

-- Almanca altyazılar
UPDATE videos
SET
    subtitle_text = '- Hallo, willkommen! Ich bin Anna.\n- Hallo Anna, ich bin Thomas. Freut mich, Sie kennenzulernen.\n- Mich auch. Woher kommen Sie?\n- Ich komme aus Berlin. Und Sie?\n- Ich komme aus München. Was machen Sie hier?\n- Ich lerne Deutsch. Es ist eine schöne Sprache.\n- Danke! Willkommen nochmal.'
WHERE
    language = 'de'
    AND order_number = 1;

UPDATE videos
SET
    subtitle_text = '- Guten Morgen! Wie spät ist es?\n- Guten Morgen! Es ist halb acht.\n- Ist das Frühstück fertig?\n- Ja, es steht auf dem Tisch. Was machst du heute?\n- Zuerst gehe ich zur Arbeit, dann mache ich Sport.\n- Ich gehe später einkaufen.\n- Treffen wir uns zum Abendessen?\n- Ja, um sieben Uhr.'
WHERE
    language = 'de'
    AND order_number = 2;

UPDATE videos
SET
    subtitle_text = '- Guten Tag, wie kann ich Ihnen helfen?\n- Hallo, was kostet dieses Kleid?\n- 50 Euro.\n- Das ist etwas teuer. Gibt es einen Rabatt?\n- Diese Woche haben wir 20% Rabatt, also 40 Euro.\n- Gut, ich nehme es. Kann ich mit Karte zahlen?\n- Ja, natürlich. Noch etwas?\n- Nein, danke. Einen schönen Tag noch.'
WHERE
    language = 'de'
    AND order_number = 3;

UPDATE videos
SET
    subtitle_text = '- Willkommen! Wie viele Personen?\n- Zwei Personen. Haben Sie einen Fensterplatz?\n- Ja, bitte hier entlang. Hier ist die Speisekarte.\n- Danke. Was empfehlen Sie?\n- Unser Tagesgericht ist gegrillter Lachs.\n- Einmal Lachs und eine Suppe, bitte.\n- Was möchten Sie trinken?\n- Zwei Apfelsaft, bitte.\n- Kommt sofort. Guten Appetit!'
WHERE
    language = 'de'
    AND order_number = 4;

UPDATE videos
SET
    subtitle_text = '- Entschuldigung, wo ist das Museum?\n- Gehen Sie geradeaus und biegen Sie an der zweiten Straße rechts ab.\n- Ist es weit von hier?\n- Nein, etwa fünf Minuten zu Fuß.\n- Kann ich auch den Bus nehmen?\n- Ja, Bus Nummer 42 fährt dorthin.\n- Wo ist die Bushaltestelle?\n- Dort drüben, auf der anderen Straßenseite.'
WHERE
    language = 'de'
    AND order_number = 5;

UPDATE videos
SET
    subtitle_text = '- Guten Morgen, Herr Doktor.\n- Guten Morgen, bitte setzen Sie sich. Was fehlt Ihnen?\n- Ich habe starke Kopfschmerzen und Fieber.\n- Seit wann fühlen Sie sich so?\n- Seit zwei Tagen. Mein Hals tut auch weh.\n- Lassen Sie mich nachsehen... Sie haben eine Grippe. Ich verschreibe Ihnen Medikamente.\n- Wie oft soll ich sie nehmen?\n- Zweimal täglich, morgens und abends. Trinken Sie viel Wasser.\n- Danke, Herr Doktor.'
WHERE
    language = 'de'
    AND order_number = 6;

UPDATE videos
SET
    subtitle_text = '- Hallo, eine Fahrkarte nach Hamburg, bitte.\n- Einfach oder hin und zurück?\n- Hin und zurück, bitte.\n- Bevorzugen Sie Bus oder Zug?\n- Zug, bitte. Das ist bequemer.\n- Es gibt eine Abfahrt um 14 Uhr. Passt das?\n- Ja, perfekt. Was kostet das?\n- 65 Euro. Möchten Sie einen Fensterplatz?\n- Ja, bitte. Danke schön.'
WHERE
    language = 'de'
    AND order_number = 7;

UPDATE videos
SET
    subtitle_text = '- Schönes Wetter heute, oder?\n- Ja, sonnig und warm. Wie viel Grad sind es?\n- Es zeigt 28 Grad an.\n- Morgen soll es regnen.\n- Wirklich? Ich brauche einen Regenschirm.\n- Wie wird das Wochenende?\n- Bewölkt, aber kein Regen.\n- Gut, dann können wir ein Picknick machen.'
WHERE
    language = 'de'
    AND order_number = 8;

UPDATE videos
SET
    subtitle_text = '- Was machst du in deiner Freizeit?\n- Ich lese gern und schwimme gern. Und du?\n- Ich fotografiere gern.\n- Wie schön! Was für Fotos?\n- Ich mache Naturfotografie.\n- Ich liebe die Natur auch. Gehst du wandern?\n- Manchmal. Letzte Woche war ich in den Alpen.\n- Toll! Lass uns zusammen gehen.\n- Ja, sehr gerne!'
WHERE
    language = 'de'
    AND order_number = 9;

-- Fransızca altyazılar
UPDATE videos
SET
    subtitle_text = '- Bonjour, bienvenue! Je suis Marie.\n- Bonjour Marie, je suis Pierre. Enchanté.\n- Enchantée aussi. D''où venez-vous?\n- Je viens de Paris. Et vous?\n- Je viens de Lyon. Que faites-vous ici?\n- J''apprends le français. C''est une belle langue.\n- Merci! Bienvenue encore.'
WHERE
    language = 'fr'
    AND order_number = 1;

UPDATE videos
SET
    subtitle_text = '- Bonjour! Quelle heure est-il?\n- Bonjour! Il est sept heures et demie.\n- Le petit-déjeuner est prêt?\n- Oui, il est sur la table. Que fais-tu aujourd''hui?\n- D''abord je vais au travail, puis je fais du sport.\n- Moi, je vais faire les courses.\n- On se retrouve pour le dîner?\n- D''accord, à sept heures.'
WHERE
    language = 'fr'
    AND order_number = 2;

UPDATE videos
SET
    subtitle_text = '- Bonjour, comment puis-je vous aider?\n- Bonjour, combien coûte cette robe?\n- 50 euros, madame.\n- C''est un peu cher. Il y a une réduction?\n- Cette semaine, 20% de réduction, donc 40 euros.\n- D''accord, je la prends. Vous acceptez la carte?\n- Oui, bien sûr. Autre chose?\n- Non, merci. Bonne journée.'
WHERE
    language = 'fr'
    AND order_number = 3;

UPDATE videos
SET
    subtitle_text = '- Bienvenue! Combien de personnes?\n- Deux personnes. Avez-vous une table près de la fenêtre?\n- Oui, par ici s''il vous plaît. Voici le menu.\n- Merci. Que recommandez-vous?\n- Notre plat du jour est le saumon grillé.\n- Un saumon et une soupe, s''il vous plaît.\n- Que désirez-vous boire?\n- Deux limonades, s''il vous plaît.\n- Tout de suite. Bon appétit!'
WHERE
    language = 'fr'
    AND order_number = 4;

UPDATE videos
SET
    subtitle_text = '- Excusez-moi, où est le musée?\n- Allez tout droit et tournez à droite à la deuxième rue.\n- C''est loin d''ici?\n- Non, environ cinq minutes à pied.\n- Je peux aussi prendre le bus?\n- Oui, le bus numéro 42 y va.\n- Où est l''arrêt de bus?\n- Juste là-bas, de l''autre côté de la rue.'
WHERE
    language = 'fr'
    AND order_number = 5;

UPDATE videos
SET
    subtitle_text = '- Bonjour docteur.\n- Bonjour, asseyez-vous. Quel est le problème?\n- J''ai un terrible mal de tête et de la fièvre.\n- Depuis combien de temps?\n- Depuis deux jours. J''ai aussi mal à la gorge.\n- Laissez-moi vérifier... Vous avez la grippe. Je vais vous prescrire des médicaments.\n- Combien de fois par jour?\n- Deux fois par jour, matin et soir. Buvez beaucoup d''eau.\n- Merci docteur.'
WHERE
    language = 'fr'
    AND order_number = 6;

UPDATE videos
SET
    subtitle_text = '- Bonjour, un billet pour Marseille, s''il vous plaît.\n- Aller simple ou aller-retour?\n- Aller-retour, s''il vous plaît.\n- Vous préférez le bus ou le train?\n- Le train, c''est plus confortable.\n- Il y a un départ à 14 heures. Ça vous convient?\n- Oui, parfait. Combien ça coûte?\n- 55 euros. Vous voulez une place côté fenêtre?\n- Oui, s''il vous plaît. Merci.'
WHERE
    language = 'fr'
    AND order_number = 7;

UPDATE videos
SET
    subtitle_text = '- Beau temps aujourd''hui, n''est-ce pas?\n- Oui, ensoleillé et chaud. Quelle température?\n- Il fait 28 degrés.\n- Il va pleuvoir demain, paraît-il.\n- Vraiment? Il me faut un parapluie.\n- Et le week-end?\n- Nuageux mais pas de pluie.\n- Bien, on peut faire un pique-nique alors.'
WHERE
    language = 'fr'
    AND order_number = 8;

UPDATE videos
SET
    subtitle_text = '- Que fais-tu pendant ton temps libre?\n- J''aime lire et nager. Et toi?\n- J''aime la photographie.\n- C''est merveilleux! Quel genre de photos?\n- Je fais de la photo de nature.\n- J''adore la nature aussi. Tu fais de la randonnée?\n- Parfois. La semaine dernière, j''ai gravi le Mont Blanc.\n- Incroyable! Allons-y ensemble un jour.\n- Oui, avec plaisir!'
WHERE
    language = 'fr'
    AND order_number = 9;

-- İspanyolca altyazılar
UPDATE videos
SET
    subtitle_text = '- ¡Hola, bienvenido! Soy María.\n- Hola María, soy Carlos. Mucho gusto.\n- El gusto es mío. ¿De dónde eres?\n- Soy de Madrid. ¿Y tú?\n- Soy de Barcelona. ¿Qué haces aquí?\n- Estoy aprendiendo español. Es un idioma hermoso.\n- ¡Gracias! Bienvenido de nuevo.'
WHERE
    language = 'es'
    AND order_number = 1;

UPDATE videos
SET
    subtitle_text = '- ¡Buenos días! ¿Qué hora es?\n- ¡Buenos días! Son las siete y media.\n- ¿Está listo el desayuno?\n- Sí, está en la mesa. ¿Qué vas a hacer hoy?\n- Primero voy al trabajo, luego hago ejercicio.\n- Yo voy de compras más tarde.\n- ¿Nos vemos para cenar?\n- Claro, a las siete.'
WHERE
    language = 'es'
    AND order_number = 2;

UPDATE videos
SET
    subtitle_text = '- Buenas tardes, ¿en qué puedo ayudarle?\n- Hola, ¿cuánto cuesta este vestido?\n- 50 euros, señora.\n- Es un poco caro. ¿Hay descuento?\n- Esta semana tenemos 20% de descuento, son 40 euros.\n- Vale, me lo llevo. ¿Aceptan tarjeta?\n- Sí, por supuesto. ¿Algo más?\n- No, gracias. Buen día.'
WHERE
    language = 'es'
    AND order_number = 3;

UPDATE videos
SET
    subtitle_text = '- ¡Bienvenidos! ¿Cuántas personas?\n- Dos personas. ¿Tienen mesa junto a la ventana?\n- Sí, por aquí. Aquí tienen el menú.\n- Gracias. ¿Qué nos recomienda?\n- El plato del día es salmón a la parrilla.\n- Un salmón y una sopa, por favor.\n- ¿Qué desean beber?\n- Dos limonadas, por favor.\n- Enseguida. ¡Buen provecho!'
WHERE
    language = 'es'
    AND order_number = 4;

UPDATE videos
SET
    subtitle_text = '- Disculpe, ¿dónde está el museo?\n- Siga recto y gire a la derecha en la segunda calle.\n- ¿Está lejos de aquí?\n- No, unos cinco minutos a pie.\n- ¿Puedo ir en autobús también?\n- Sí, el autobús número 42 va allí.\n- ¿Dónde está la parada?\n- Ahí enfrente, al otro lado de la calle.'
WHERE
    language = 'es'
    AND order_number = 5;

UPDATE videos
SET
    subtitle_text = '- Buenos días, doctor.\n- Buenos días, siéntese. ¿Qué le pasa?\n- Tengo un dolor de cabeza terrible y fiebre.\n- ¿Desde cuándo se siente así?\n- Desde hace dos días. También me duele la garganta.\n- Déjeme ver... Tiene gripe. Le receto medicamentos.\n- ¿Cuántas veces al día?\n- Dos veces al día, mañana y noche. Beba mucha agua.\n- Gracias, doctor.'
WHERE
    language = 'es'
    AND order_number = 6;

UPDATE videos
SET
    subtitle_text = '- Hola, un billete a Sevilla, por favor.\n- ¿Solo ida o ida y vuelta?\n- Ida y vuelta, por favor.\n- ¿Prefiere autobús o tren?\n- Tren, es más cómodo.\n- Hay una salida a las 14:00. ¿Le viene bien?\n- Sí, perfecto. ¿Cuánto cuesta?\n- 45 euros. ¿Quiere asiento de ventanilla?\n- Sí, por favor. Gracias.'
WHERE
    language = 'es'
    AND order_number = 7;

UPDATE videos
SET
    subtitle_text = '- Buen tiempo hoy, ¿verdad?\n- Sí, soleado y cálido. ¿Cuántos grados hay?\n- Marca 28 grados.\n- Dicen que mañana va a llover.\n- ¿En serio? Necesito un paraguas.\n- ¿Cómo será el fin de semana?\n- Nublado pero sin lluvia.\n- Bien, podemos ir de picnic entonces.'
WHERE
    language = 'es'
    AND order_number = 8;

UPDATE videos
SET
    subtitle_text = '- ¿Qué haces en tu tiempo libre?\n- Me gusta leer y nadar. ¿Y tú?\n- Me encanta la fotografía.\n- ¡Qué bonito! ¿Qué tipo de fotos?\n- Hago fotografía de naturaleza.\n- A mí también me encanta la naturaleza. ¿Haces senderismo?\n- A veces. La semana pasada subí al Teide.\n- ¡Increíble! Vamos juntos algún día.\n- ¡Claro, me encantaría!'
WHERE
    language = 'es'
    AND order_number = 9;

-- İtalyanca altyazılar
UPDATE videos
SET
    subtitle_text = '- Ciao, benvenuto! Sono Anna.\n- Ciao Anna, sono Marco. Piacere di conoscerti.\n- Piacere mio. Da dove vieni?\n- Vengo da Roma. E tu?\n- Vengo da Milano. Cosa fai qui?\n- Sto imparando l''italiano. È una lingua bellissima.\n- Grazie! Benvenuto ancora.'
WHERE
    language = 'it'
    AND order_number = 1;

UPDATE videos
SET
    subtitle_text = '- Buongiorno! Che ore sono?\n- Buongiorno! Sono le sette e mezza.\n- La colazione è pronta?\n- Sì, è sul tavolo. Cosa fai oggi?\n- Prima vado al lavoro, poi faccio sport.\n- Io vado a fare la spesa.\n- Ci vediamo per cena?\n- Certo, alle sette.'
WHERE
    language = 'it'
    AND order_number = 2;

UPDATE videos
SET
    subtitle_text = '- Buon pomeriggio, come posso aiutarla?\n- Ciao, quanto costa questo vestito?\n- 50 euro, signora.\n- È un po'' caro. C''è uno sconto?\n- Questa settimana abbiamo il 20% di sconto, quindi 40 euro.\n- Va bene, lo prendo. Accettate carte di credito?\n- Sì, certo. Altro?\n- No, grazie. Buona giornata.'
WHERE
    language = 'it'
    AND order_number = 3;

UPDATE videos
SET
    subtitle_text = '- Benvenuti! Quante persone?\n- Due persone. Avete un tavolo vicino alla finestra?\n- Sì, da questa parte. Ecco il menù.\n- Grazie. Cosa ci consiglia?\n- Il piatto del giorno è salmone alla griglia.\n- Un salmone e una zuppa, per favore.\n- Cosa desiderate da bere?\n- Due limonate, per favore.\n- Subito. Buon appetito!'
WHERE
    language = 'it'
    AND order_number = 4;

UPDATE videos
SET
    subtitle_text = '- Mi scusi, dov''è il museo?\n- Vada dritto e giri a destra alla seconda strada.\n- È lontano da qui?\n- No, circa cinque minuti a piedi.\n- Posso anche prendere l''autobus?\n- Sì, l''autobus numero 42 va lì.\n- Dov''è la fermata?\n- Proprio lì, dall''altra parte della strada.'
WHERE
    language = 'it'
    AND order_number = 5;

UPDATE videos
SET
    subtitle_text = '- Buongiorno dottore.\n- Buongiorno, si sieda. Qual è il problema?\n- Ho un terribile mal di testa e la febbre.\n- Da quanto tempo si sente così?\n- Da due giorni. Mi fa male anche la gola.\n- Mi faccia vedere... Ha l''influenza. Le prescrivo dei farmaci.\n- Quante volte al giorno?\n- Due volte al giorno, mattina e sera. Beva molta acqua.\n- Grazie dottore.'
WHERE
    language = 'it'
    AND order_number = 6;

UPDATE videos
SET
    subtitle_text = '- Ciao, un biglietto per Firenze, per favore.\n- Solo andata o andata e ritorno?\n- Andata e ritorno, per favore.\n- Preferisce autobus o treno?\n- Treno, è più comodo.\n- C''è una partenza alle 14:00. Va bene?\n- Sì, perfetto. Quanto costa?\n- 35 euro. Vuole un posto vicino al finestrino?\n- Sì, per favore. Grazie.'
WHERE
    language = 'it'
    AND order_number = 7;

UPDATE videos
SET
    subtitle_text = '- Bel tempo oggi, vero?\n- Sì, soleggiato e caldo. Quanti gradi ci sono?\n- Segna 28 gradi.\n- Domani dovrebbe piovere.\n- Davvero? Mi serve un ombrello.\n- Come sarà il fine settimana?\n- Nuvoloso ma senza pioggia.\n- Bene, possiamo fare un picnic allora.'
WHERE
    language = 'it'
    AND order_number = 8;

UPDATE videos
SET
    subtitle_text = '- Cosa fai nel tempo libero?\n- Mi piace leggere e nuotare. E tu?\n- Adoro la fotografia.\n- Che bello! Che tipo di foto?\n- Faccio fotografia naturalistica.\n- Anch''io amo la natura. Fai escursioni?\n- A volte. La settimana scorsa sono salito sulle Dolomiti.\n- Fantastico! Andiamo insieme un giorno.\n- Certo, con piacere!'
WHERE
    language = 'it'
    AND order_number = 9;

-- Rusça altyazılar
UPDATE videos
SET
    subtitle_text = '- Здравствуйте, добро пожаловать! Я Анна.\n- Здравствуйте Анна, я Иван. Приятно познакомиться.\n- Мне тоже. Откуда вы?\n- Я из Москвы. А вы?\n- Я из Санкт-Петербурга. Что вы здесь делаете?\n- Я учу русский язык. Это красивый язык.\n- Спасибо! Добро пожаловать ещё раз.'
WHERE
    language = 'ru'
    AND order_number = 1;

UPDATE videos
SET
    subtitle_text = '- Доброе утро! Который час?\n- Доброе утро! Половина восьмого.\n- Завтрак готов?\n- Да, на столе. Что ты делаешь сегодня?\n- Сначала иду на работу, потом на спорт.\n- А я пойду за покупками.\n- Встретимся на ужин?\n- Хорошо, в семь часов.'
WHERE
    language = 'ru'
    AND order_number = 2;

UPDATE videos
SET
    subtitle_text = '- Добрый день, чем могу помочь?\n- Здравствуйте, сколько стоит это платье?\n- 3000 рублей.\n- Немного дорого. Есть скидка?\n- На этой неделе скидка 20%, получается 2400 рублей.\n- Хорошо, беру. Принимаете карты?\n- Да, конечно. Что-нибудь ещё?\n- Нет, спасибо. Хорошего дня.'
WHERE
    language = 'ru'
    AND order_number = 3;

UPDATE videos
SET
    subtitle_text = '- Добро пожаловать! Сколько человек?\n- Двое. Есть столик у окна?\n- Да, проходите сюда. Вот меню.\n- Спасибо. Что посоветуете?\n- Блюдо дня — лосось на гриле.\n- Один лосось и один суп, пожалуйста.\n- Что будете пить?\n- Два лимонада, пожалуйста.\n- Сейчас принесу. Приятного аппетита!'
WHERE
    language = 'ru'
    AND order_number = 4;

UPDATE videos
SET
    subtitle_text = '- Извините, где находится музей?\n- Идите прямо и поверните направо на второй улице.\n- Это далеко отсюда?\n- Нет, примерно пять минут пешком.\n- Можно доехать на автобусе?\n- Да, автобус номер 42 идёт туда.\n- Где остановка?\n- Вон там, на другой стороне улицы.'
WHERE
    language = 'ru'
    AND order_number = 5;

UPDATE videos
SET
    subtitle_text = '- Доброе утро, доктор.\n- Доброе утро, садитесь. Что вас беспокоит?\n- У меня сильная головная боль и температура.\n- Как давно вы себя так чувствуете?\n- Два дня. Ещё болит горло.\n- Давайте посмотрю... У вас грипп. Выпишу лекарства.\n- Сколько раз в день принимать?\n- Два раза в день, утром и вечером. Пейте много воды.\n- Спасибо, доктор.'
WHERE
    language = 'ru'
    AND order_number = 6;

UPDATE videos
SET
    subtitle_text = '- Здравствуйте, один билет до Казани, пожалуйста.\n- В одну сторону или туда-обратно?\n- Туда-обратно, пожалуйста.\n- Предпочитаете автобус или поезд?\n- Поезд, он удобнее.\n- Есть рейс в 14:00. Подходит?\n- Да, отлично. Сколько стоит?\n- 2500 рублей. Хотите место у окна?\n- Да, пожалуйста. Спасибо.'
WHERE
    language = 'ru'
    AND order_number = 7;

UPDATE videos
SET
    subtitle_text = '- Прекрасная погода сегодня, правда?\n- Да, солнечно и тепло. Сколько градусов?\n- Показывает 28 градусов.\n- Завтра обещают дождь.\n- Правда? Нужно взять зонт.\n- А на выходных как будет?\n- Облачно, но без дождя.\n- Хорошо, тогда можно на пикник.'
WHERE
    language = 'ru'
    AND order_number = 8;

UPDATE videos
SET
    subtitle_text = '- Чем ты занимаешься в свободное время?\n- Люблю читать и плавать. А ты?\n- Я увлекаюсь фотографией.\n- Как здорово! Какие фотографии?\n- Снимаю природу.\n- Я тоже люблю природу. Ходишь в походы?\n- Иногда. На прошлой неделе поднялся на Эльбрус.\n- Потрясающе! Давай вместе сходим.\n- Конечно, с удовольствием!'
WHERE
    language = 'ru'
    AND order_number = 9;

-- Arapça altyazılar
UPDATE videos
SET
    subtitle_text = '- مرحباً، أهلاً وسهلاً! أنا فاطمة.\n- مرحباً فاطمة، أنا أحمد. تشرفنا.\n- تشرفنا أيضاً. من أين أنت؟\n- أنا من القاهرة. وأنتِ؟\n- أنا من الرياض. ماذا تفعل هنا؟\n- أتعلم العربية. إنها لغة جميلة.\n- شكراً! أهلاً بك مرة أخرى.'
WHERE
    language = 'ar'
    AND order_number = 1;

UPDATE videos
SET
    subtitle_text = '- صباح الخير! كم الساعة؟\n- صباح النور! الساعة السابعة والنصف.\n- هل الفطور جاهز؟\n- نعم، على الطاولة. ماذا ستفعل اليوم؟\n- أولاً سأذهب إلى العمل، ثم سأمارس الرياضة.\n- وأنا سأذهب للتسوق.\n- هل نلتقي على العشاء؟\n- حسناً، في الساعة السابعة.'
WHERE
    language = 'ar'
    AND order_number = 2;

UPDATE videos
SET
    subtitle_text = '- مساء الخير، كيف يمكنني مساعدتك؟\n- مرحباً، كم سعر هذا الفستان؟\n- خمسون ديناراً.\n- هذا غالٍ قليلاً. هل يوجد تخفيض؟\n- هذا الأسبوع لدينا تخفيض 20%، يصبح أربعين ديناراً.\n- حسناً، سآخذه. هل تقبلون البطاقة؟\n- نعم، بالطبع. هل تريد شيئاً آخر؟\n- لا، شكراً. يوماً سعيداً.'
WHERE
    language = 'ar'
    AND order_number = 3;

UPDATE videos
SET
    subtitle_text = '- أهلاً وسهلاً! كم شخص؟\n- شخصان. هل لديكم طاولة بجانب النافذة؟\n- نعم، تفضلوا من هنا. هذه القائمة.\n- شكراً. ماذا تنصحون؟\n- طبق اليوم سمك السلمون المشوي.\n- سلمون واحد وشوربة، من فضلك.\n- ماذا تريدون أن تشربوا؟\n- عصير ليمون اثنين، من فضلك.\n- حالاً. بالعافية!'
WHERE
    language = 'ar'
    AND order_number = 4;

UPDATE videos
SET
    subtitle_text = '- عفواً، أين المتحف؟\n- امشِ مستقيماً ثم انعطف يميناً عند الشارع الثاني.\n- هل هو بعيد من هنا؟\n- لا، حوالي خمس دقائق مشياً.\n- هل يمكنني أخذ الحافلة أيضاً؟\n- نعم، الحافلة رقم 42 تذهب إلى هناك.\n- أين المحطة؟\n- هناك، على الجانب الآخر من الشارع.'
WHERE
    language = 'ar'
    AND order_number = 5;

UPDATE videos
SET
    subtitle_text = '- صباح الخير يا دكتور.\n- صباح النور، تفضل اجلس. ما المشكلة؟\n- عندي صداع شديد وحرارة.\n- منذ متى تشعر بهذا؟\n- منذ يومين. وحلقي يؤلمني أيضاً.\n- دعني أفحصك... عندك إنفلونزا. سأكتب لك دواء.\n- كم مرة في اليوم؟\n- مرتين في اليوم، صباحاً ومساءً. اشرب ماء كثيراً.\n- شكراً يا دكتور.'
WHERE
    language = 'ar'
    AND order_number = 6;

UPDATE videos
SET
    subtitle_text = '- مرحباً، تذكرة واحدة إلى جدة، من فضلك.\n- ذهاب فقط أم ذهاب وعودة؟\n- ذهاب وعودة، من فضلك.\n- تفضل الحافلة أم القطار؟\n- القطار، أكثر راحة.\n- يوجد رحلة الساعة الثانية. مناسب؟\n- نعم، ممتاز. كم السعر؟\n- مئة ريال. تريد مقعد بجانب النافذة؟\n- نعم، من فضلك. شكراً.'
WHERE
    language = 'ar'
    AND order_number = 7;

UPDATE videos
SET
    subtitle_text = '- الطقس جميل اليوم، أليس كذلك؟\n- نعم، مشمس ودافئ. كم درجة الحرارة؟\n- ثمانية وعشرون درجة.\n- غداً سيمطر.\n- حقاً؟ أحتاج مظلة.\n- كيف سيكون الطقس في نهاية الأسبوع؟\n- غائم لكن بدون مطر.\n- جيد، يمكننا الذهاب في نزهة إذاً.'
WHERE
    language = 'ar'
    AND order_number = 8;

UPDATE videos
SET
    subtitle_text = '- ماذا تفعل في وقت فراغك؟\n- أحب القراءة والسباحة. وأنت؟\n- أحب التصوير.\n- رائع! أي نوع من الصور؟\n- أصور الطبيعة.\n- أنا أيضاً أحب الطبيعة. هل تتسلق الجبال؟\n- أحياناً. الأسبوع الماضي صعدت جبل طويق.\n- مذهل! لنذهب معاً يوماً ما.\n- بالتأكيد، بكل سرور!'
WHERE
    language = 'ar'
    AND order_number = 9;