#Opdracht 1:

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


#Opdracht 2:
Wat is de maximale hoeveelheid bits en bytes dat RSA kan encrypten?

De bekende één en nul komen hier vandaan. Omdat de waarde van de bit alleen  1 of 0 kan zijn gaat het dus ook om aan of uit.

Dus, je zal misschien in assembly moeten wezen om de echte waarde uit te lezen?
End to end encryptie is dus misschien een nachtmerrie voor 'intrusion' omdat je de private key niet lokaal kunt uitlezen

De maximale hoeveelheid bits, op het moment: 4096
voor de bytes, wordt in 2048, bijvoorbeeld een woord String in stukjes gehakt
voor ieder blok van, 245bytes, wordt 'opeens' toegevoegd tot het 256 bytes wordt.
Ale blokken samen worden dus een langer en samengevoegd tot één geheel.

Één sleutel komt dichtbij 2n/2blocksm, n*2n/2 bits. With AES, n = 128 (AES-128, AES-192 and AES-256 all use 128-bit blocks).
    Ik ga verder niet doen alsof ik dat begrijp en is wel leuk opdracht om naar te kijen met HBO wisukunde kennis
Het komt er op neer dat er een limiet is van 250 000 000 terrabyes.
Zo dan, daar is je computer wel even mee bezig om te decrypten

