# Opdracht 1:

Geef een 4-tal functies in PHP die je kunt gebruiken
voor asymmetrsiche encryptie.
• Beschrijf het in je readme.md en push dit naar Github.

Encryptie is bedoeld om je data zo veilig mogelijk op te slaan.
De encryptie is gebaseerd op decoding van een bepaalde hash, die jaren zullen duren met de
consumer PC die op de markt zijn. Om de hoek kijkt Quantum stilletjes toe..

Dan zijn er verschillende encryptievormen die telkens worden voorzien van een lastiger decryptie, update. Om even snel namen te noemen..

OpenSSL 
#1: RSA 2048
#2: RSA 3072
#3: RSA 4096 -> bedrijfstandaard
#4: ECC-256-r1



# Opdracht 2:
Wat is de maximale hoeveelheid bits en bytes dat RSA kan encrypten?

De bekende één en nul komen hier vandaan. Omdat de waarde van de bit alleen  1 of 0 kan zijn gaat het dus ook om aan of uit.

Dus, je zal misschien in assembly moeten wezen om de echte waarde uit te lezen?
End to end encryptie is dus misschien een nachtmerrie voor 'intrusion' omdat je de private key niet lokaal kunt uitlezen

De maximale hoeveelheid bits, op het moment: 4096.
Voor de bytes, wordt in RSA-2048 bijvoorbeeld een woord String in stukjes gehakt,
voor ieder blok van, 245bytes, wordt 'iets' toegevoegd tot het 256 bytes wordt.
Ale blokken samen worden dus een langer en samengevoegd tot één geheel.

Één sleutel komt dichtbij 2n/2blocksm, n*2n/2 bits. With AES, n = 128 (AES-128, AES-192 and AES-256 all use 128-bit blocks).
    Ik ga verder niet doen alsof ik dat begrijp en is wel leuk opdracht om naar te kijen met HBO wisukunde kennis
Het komt er op neer dat er een limiet is van 250 000 000 terrabyes.
Zo dan, daar is je computer wel even mee bezig om te decrypten



# Opdracht 3:
Gebruik je in IntelliJ een username / password combinatie voor je Github of gebruik je SSH keys.

Ik login XAMPP/mysql/bin met: mysql.exe -u USERNAMEiNVOEREN -p WachtwoordInvoeren en dan vervolgens USE DATABASeNAAM

Als ik het goed begrijp, kun je dus ook in IntelliJ een username/Wachtwoord invoeren? Hier zal ik wel zeker nog naar gaan kijken.

Tot dit moment maak ik gebruik van SSH via de terminal. De bestanden van Github doe ik dus toevoegen via: git add <padNaarFolder> en git commit -m "Bericht1" -m "Bericht 2"   gevolgd door git push.   Misschien hier en daar een  git branch  wanneer dat mag van de docenten.
Git commandline: https://github.com/LeroyAndrade/L2-KSEC/tree/master/netwerk/Async-encryptie/afb/Git.png
    
Doordat u tijdens de 1 op 1 wat vertelde over username en password, ga ik daar nog zeker naar kijken. In iedergeval, werk ik in terminal, voor GIT met SSH


Waarvoor gebruikt Github de keys als je met SSH inlogt. Antwoord in de Readme.md en push het antwoord naar je Github:

De public key die je hebt, zorgt er voor dat een specifiek account/ID, op meerdere apparaten kan worden ingesteld (mits de end server meerdere aantallen toestaat).

Die public_key, zal contactopnemen met de end server, waar het sleutel, in jou public key zit, die alleen de end_server kan uitlezen. Die verstuurd vervolgens een error bericht of OK wanneer de authenticatie is gevalideerd
