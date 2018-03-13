                       VISOKA ŠKOLA STRUKOVNIH STUDIJA ZA INFORMACIONE I KOMUNIKACIONE TEHNOLOGIJE
<br/><br/><br/><br/><br/><br/><br/><br/>                      

<p align="center"><img src="http://www.ict.edu.rs/sites/default/files/public/logo_visoka_ict_skola_1.png"></p>








                                      WEB PROGRAMIRANJE PHP2 DOKUMENTACIJA PROJEKTA
                                        https://excotictravel.000webhostapp.com/
 <br/><br/><br/>                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        


Student:
Aleksandar Atlagić 93/14

                                                     Beograd 2018.
                                                     

<br/><br/><br/><br/>   
1.Opis funkcionalnosti<br/>
2.Template<br/>
3. Skica struktura stranica	<br/>
4. Dijagram baze podataka	<br/>
5. Klasni dijagram
&nbsp;&nbsp;&nbsp;&nbsp;Kontroleri	<br/>
&nbsp;&nbsp;&nbsp;&nbsp;Modeli	<br/>
&nbsp;&nbsp;&nbsp;&nbsp;View	<br/>
 <br/><br/><br/><br/>
<b>1.Opis funkcionalnosti</b>
<br/><br/>
-Forma za logovanje i registraciju se nalazi u desnom uglu trake za navigaciju. Funkcionalnosti logovanja i registracije su ostvarene preko Laravel autentikacije. Iz padajuće liste Login se moze izabrati forma za logovanje korisnika ili administratora premda je korišćen 'Multiple Authentication System'. Nakon uspešne registracije neautorizovan korisnik biva preusmeren na stranu za logovanje korisnika, a nakon uspešnog logovanja biva preusmeren na korisničku komandnu tablu gde se izveštava da je uspešno ulogovan. Administrator nakon uspešnog logovanja biva preusmeren na administratorsku komandnu tablu gde se izveštava da je uspešno ulogovan. Ukoliko neautorizovan korisnik pokuša da pristupi admin panelu preko url-a, on biva preusmeren na stranicu za logovanje, dok autorizovan biva preusmeren na korisničku komandnu tablu. (/app/Http/Controllers/Auth/..., /app/Http/middleware/..., /resources/views/auth..., /database/migrations/..., /config/auth.php, /app/Admin.php, /app/User.php

-Navigacioni meni se vidi na svakoj stranici i kreira se dinamički iz baze. (/resources/views/inc/navbar.blade.php)

-Na strani Home se nalaze izdvojene ponude. Klikom na neku od ponuda otvara za posebna strana se detaljnim informacijama o traženoj destinaciji za koju se mogu dodavati komentari. (samo autorizovani korisnici, neautorizovani imaju samo mogućnost da čitaju komentare)
(/app/Http/Controllers/OfferController.php, /app/Models/Offer.php, /resources/views/pages/home.blade.php, /resources/views/pages/offerItem.blade.php)

-Na strani Gallery se nalazi galerija sa slikama destinacija. Klikom na 'thumbnail' sliku se učitava velika slika. (i velike i male slike se učitavaju iz baze) Funkcionalnost galerije je uradjena preko jQuery-a. (../public/js/gallery.js) Ostalo: (/app/Http/Controllers/GalleryController.php, /app/Models/Gallery.php, /resources/views/pages/travellgallery.blade.php)

-Na strani Deals se nalaze izlistane ponude (sa Laravel paginaciom) svih destinacija sa kratkim opisom. Klikom na cenu određene destinacije se otvara posebna strana sa detaljnim informacijama o traženoj destinaciji kao i forma za rezervisanje (forma se prikazuje samo autorizovanim korisnicima). Nakon uspešne rezervacije podaci se upisuju u bazu i korisnik se izveštava o uspešnom rezervisanju. Pored toga. na strani deals se nalaze i forme za pretragu i filtriranje prema ceni (rastuće/opadajuće). Funkcionalnosti pretrage i filtriranja su uradjene preko Ajax-a. (../public/js/sort.js) Ostalo: (/app/Http/Controllers/DealsController.php, /app/Models/Deals.php, /resources/views/pages/deals.blade.php, /resources/views/pages/item.blade.php, /resources/views/inc/dealsItems.blade.php, /resources/views/layouts/sortTemplate.blade.php, /resources/views/pagination/default.blade.php), 

-Na strani About se nalaze informacije o turističkoj agenciji kao i informacije o autoru sajta. (/resources/views/pages/about.blade.php)

-Na strani contact se nalaze kontakt informacije turističke agencije kao i Google mapa. (/resources/views/pages/contact.blade.php)

-U sredini futera se nalazi 'subscribe' forma koja šalje e-mail sa najnovijim ponudama autorizovanim korisnicima. Autorizovanom korisniku je automatski popunjeno polje za e-mail. Funkcionalnost slanja mejla ostvarena preko 'Laravel Mailable' metoda i https://mailtrap.io/. (/app/Http/Controllers/ContactController.php, /app/Mail/NewUserWelcome.php, /resources/views/emails/user/newuserwelcome.blade.php)

-U admin panelu su izlistani svi podaci iz baze uključujući i statistiku o tome ko je (sa koje IP adrese), kada, sa kog pregledača pristupio odredjenoj strani. Uz to mogu se dodati podaci u bazu, izmeniti i izbrisati postojeći podaci iz tabela. Kod galerije, prilikom upload-a slika, ukoliko postoji slika sa istim imenom ona se brise i dodaje se nova (slike se dodaju i brisu i iz baze i sa servera). Sve slike se nalaze u Laravelovom storage filesystem-u (../public/storage/pictures, ../public/storage/smallPictures) Ostalo: /app/Http/Controllers/AdminController.php, /app/Admin.php, /resources/views/pages/admin/...)

-Custom 404 page not found error page (/resources/views/errors/503.blade.php, /app/Http/Controllers/PageController.php)

-Sve forme su validirane, svi izuzeci su obrađeni i zapisuju se u log file, ceo sadržaj sajta je dinamičan i povlači se iz baze podataka.
<br/><br/><br/><br/> 
-Use case dijagram 
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/pictures/UseCaseDijagram.jpg"/></p>
<br/><br/><br/><br/> 
-Koriščeni jezici: HTML5, CSS3, JavaScript, PHP <br/>
-Korišćeni HTML framework: https://getbootstrap.com 
-Koriščene biblioteke: https://code.jquery.com/jquery-3.2.1.slim.min.js, https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js,
https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js
<br/><br/><br/><br/> 
<b>2.Template</b>
<br/><br/> 
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/pictures/wireframe.jpg"/></p>
<br/><br/> 
<b>3. Skica struktura stranica</b>	<br/>
<br/><br/> 
-Deals admin
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/screenshots/dealsadmin.png"/></p>
-Gallery admin
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/screenshots/galleryadmin.png"/></p>
-Pages admin
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/screenshots/pagesadmin.png"/></p>
-Reservations admin
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/screenshots/reservationsadmin.png"/></p>
-Users admin
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/screenshots/usersadmin.png"/></p>
-Admins admin
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/screenshots/admin.png"/></p>
-Comments admin
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/screenshots/commentsadmin.png"/></p>
<b>4. Dijagram baze podataka</b>	<br/>
<br/><br/> 
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/pictures/database.jpg"/></p>
<br/><br/><br/> 
<b>5.Klasni dijagram</b> (kliknite na sliku kako biste uvećali)
<p align="center"><img src="https://excotictravel.000webhostapp.com/storage/pictures/ClassDiagram.jpg"/></p>
