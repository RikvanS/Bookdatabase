29/01 16:43
Eerste opzet boekendatabase miniproject in phpstorm ter voorbereiding van test/meeloopdag GemeenteOplossingen.

Eerste indruk van PHPStorm: Keyboard shortcuts gewend van VSCode werken hier ook, voelt gelijk vertrouwd. Zodra ik aan PHP  code begin verwacht ik echter een duidelijk voordeel in PHPStorm.
Documentatie en ervaring van oud collega van bootcamp gaf aan dat PHPStorm veel extra functionaliteit biedt ten opzichte van VSCode, waaronder betere aanvulling en automatische controle van geschreven code.
Eigen ervaring zal hopelijk meer voordelen naar voren brengen.


Project begonnen met een basis analyse:

"Analyse leerproces PDO/PHPstorm voor GemeenteOplossingen meeloop-/testdag:

Oppakken van oud voorgenomen project: Boeken database maken met zoekfunctie. Voor latere versie is de wens om ook een barcodescanner aan het project te koppelen voor makkelijke invoer
van collectie, echter is dit niet relevant (genoeg) voor de functieeis bij GO en wordt uitgesteld tot latere periode.

Initiele eis:

Database maken. Tenminste nodig: auto increment id primary key, titel, auteur, isbn. ISBN kan in eerste instantie als niet vereist worden aangemerkt, vooral bedoeld als preventief werk 
voor volgende versie met scanner.

Pagina met invoerformulier. Formulier moet sowieso titel en auteur als vereist hebben, isbn optioneel, id is auto increment en kan genegeerd worden in form.

Een pagina met zoekfunctie. Extra mooi zou zijn om dit met AJAX te laten werken zodat niet de hele pagina ververst hoeft te worden, echter valt dit ook buiten de initiele eis van het
leerproces en wordt zodoende uitgesteld naar latere versie.
Zoekfunctie moet echter wel kunnen zoeken op alle 3 de opties.

Extra/bonus: Invoerformulier pagina afschermen zodat deze alleen benaderbaar is voor mijzelf. Voor een live product is dit uiteraard sowieso kritiek, gepersonaliseerde omgeving met
eigen gegevens, niet bij andermans gegevens kunnen etc. Echter valt dit buiten de scope van een 2 a 3 daags oefenproject met nieuwe taal en werkomgeving (phpstorm) en is zodoende
niet kritiek maar mooie bonus als er tijd over is."


Aan de hand van deze basis analyse begonnen met 2 php files, een index.php en entryform.php.
De index zal het zoekveld bevatten, de entryform het invoerveld.
Simpel html formulier reeds toegevoegd, auteur en titel velden required, isbn niet.
Database aangemaakt in phpmyadmin, id is primary key auto increment, auteur en titel als varchars met een waarde van 255 en isbn een bigint van 13 cijfers, nullable aangezien het nog niet required is tot volgende versie.

Form action op entryform.php ingesteld, onderzoek doen of er toegevoegde waarde zit in de php_self syntax.

CSS zal achterblijven in dit project, aangezien het niet relevant is voor de opdracht/het leertraject. 


-------------------------

