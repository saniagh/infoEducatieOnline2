<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lectii - TimeMachine</title>

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic'
          rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="src/style/reset.css">
    <link rel="stylesheet" href="src/style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php if (login_check($mysqli) == false) : ?>
    <?php
    header('Location: login.php');
    die();
    ?>
<?php else : ?>
    <div id="mySidenav" class="sidenav" style="z-index: 4">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="summary.php">Inapoi la Sumar</a>
        <a href="lessons.php">Studiaza!</a>
        <a href="quiz.php">Testeaza-te!</a>
        <a href="travel.php">Calatoreste!</a>
        <a href="contact.php">Contact</a>
        <a href="includes/logout.php">Logout</a>
    </div>
    <span
        style="font-size:3em;cursor:pointer; position:absolute; top:2%; left:3%;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;color: white"
        onclick="openNav()">&#9776;
    </span>
<?php endif; ?>
<div class="content">
    <section class="cd-horizontal-timeline">
        <div class="timeline">
            <div class="events-wrapper">
                <div class="events">
                    <ol>
                        <li><a href="#0" data-date="30/01/1933" class="selected">30 Ian 1933</a></li>
                        <li><a href="#0" data-date="27/02/1933">27 Feb </a></li>
                        <li><a href="#0" data-date="21/03/1933">21 Mar </a></li>
                        <li><a href="#0" data-date="01/04/1933">01 Apr</a></li>
                        <li><a href="#0" data-date="14/06/1933">14 Oct</a></li>
                        <li><a href="#0" data-date="14/10/1933">14 Iun 1934</a></li>
                        <li><a href="#0" data-date="02/11/1933">02 Aug</a></li>
                        <li><a href="#0" data-date="07/03/1934">07 Mar 1936</a></li>
                        <li><a href="#0" data-date="07/06/1934">07 Iul 1937</a></li>
                        <li><a href="#0" data-date="19/07/1934">19 Iul</a></li>
                        <li><a href="#0" data-date="01/10/1934">01 Sep 1939</a></li>
                        <li><a href="#0" data-date="14/12/1934">12 Feb 1940</a></li>
                        <li><a href="#0" data-date="10/05/1935">10 Iul 1941</a></li>
                        <li><a href="#0" data-date="05/07/1935">05 Mar 1943</a></li>
                        <li><a href="#0" data-date="02/01/1936">02 Oct 1944</a></li>
                        <li><a href="#0" data-date="16/04/1936">16 Apr 1945</a></li>
                        <li><a href="#0" data-date="30/05/1936">30 Apr </a></li>
                        <li><a href="#0" data-date="07/06/1936">07 Mai </a></li>
                    </ol>

                    <span class="filling-line" aria-hidden="true"></span>
                </div> <!-- .events -->
            </div> <!-- .events-wrapper -->

            <ul class="cd-timeline-navigation">
                <li><a href="#0" class="prev inactive">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul> <!-- .cd-timeline-navigation -->
        </div> <!-- .timeline -->

        <div class="events-content">
            <ol>
                <li class="selected" data-date="30/01/1933">
                    <h2>Hitler cancelar-se naște al Treilea Reich</h2>
                    <em>30 Ianuarie 1933</em>
                    <div style="display: flex;justify-content: center">
                    <img src="1.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px">
                        La Berlin, se anunță numirea lui Adolf Hitler în funcția de cancelar al Reichului și depunerea
                        jurământului de către cabinetul lui. Din cabinet fac parte trei miniștri din NSDAP, condus de
                        Hitler, și de opt miniștrii conservatori.
                    </p>
                </li>

                <li data-date="27/02/1933">
                    <h2>Prigoană a comuniștilor</h2>
                    <em>27 Februarie 1933</em>
                    <div style="display: flex;justify-content: center">
                        <img src="2.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px"> În jurul orei 21, în clădirea parlamentului din Berlin izbucnește un incendiu care, în ciuda
                        tuturor eforturilor pompierilor, distruge integral sala plenului. La locul faptei este prins și
                        arestat olandezul Marinus van der Lube, care se declară comunist și care revendică fapta.</p>
                </li>

                <li data-date="21/03/1933">
                    <h2>Primele lagăre de concentrare</h2>
                    <em>21 Martie 1933</em>
                    <div style="display: flex;justify-content: center">
                        <img src="3.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px">
                        Într-o fostă fabrică din Oranienburg, lângă Berlin,SA-Standarte 208 ridică primul lagăr de
                        concentrere (KZ) în zona Berlninului. A doua zi, primii 200 de dținuți politici sunt duși în
                        lagărul de concentrare Dachau, lângă Munchen.<br>Motivul ridicării lagărelor este numărul
                        crescând al acelor adversari ai regimului național-socialist care sunt luați în așa-zisă
                        custodie de poliție, fără control judiciar, respectiv arestați samavolnic de SA și SS. Numai in
                        Prusia, până șa sfârșitul lui aprilie, numarul celor reținuți ajunge la peste 25 000. Până la
                        șfârșitul anului, aproximativ 80 000 de adversari ai regimului sunt arestați de poliție,
                        Sturmabteilung (SA) sau Schutzstaffel (SS), forțați să muncească și torturați.
                    </p>
                </li>

                <li data-date="01/04/1933">
                    <h2>Boicotarea evreilor</h2>
                    <em>1 aprilie 1933</em>
                    <div style="display: flex;justify-content: center">
                        <img src="4.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px"> La ora 10:00, pe teritoriul Reichului, începe boicotarea medicilor și a avocaților evrei, cât și
                        a prăvăliilor și mărfurilor evreiești. Măsurile de boicotare se aplică pe data de 1 aprilie până
                        seara. Pe 3 și 4 aprilie, măsurile antisemite sunt suspendate, iar reluarea lor in ziua de 5
                        aprilie e anulatăm după ce boicotul-cum este numit-"a avut efectul scontat în străinătate".<br>
                        Prăvăliile evreiești sunt marcate cu afișe sau tăblițe lipite pe ușile de acces, cu o pată
                        galbenă pe fond negru. Înaintea fiecărei acțiuni de boicotare, trebuie să se stabilească dacă
                        proprietarule este evreu.
                    </p>
                </li>

                <li data-date="14/06/1933">
                    <h2>Germania se izolează</h2>
                    <em>14 Octombrie 1933</em>
                    <div style="display: flex;justify-content: center">
                        <img src="5.jpg" alt="" width="800px" height="800px">
                    </div>
                    <p style="padding-top: 20px"> Ministrul propagandei Joseph Goebbels anunță presa germană de retragerea di Liga Națiunilor și de
                        la Confederația pentru dezarmare de la Geneva. În același timp, președintele german Paul von
                        Hindenburg dizolvă Parlamentul și anunță noi alegeri pentru data de 12 noiembrie.<br> Vestea
                        retragerii Germaniei de la Geneva declașează consternare la Paris și la Londra. Observatorii
                        internaționali se așteapă acum la o accelerare a cursei de înarmarii în Germania.
                    </p>
                </li>

                <li data-date="14/10/1933">
                    <h2>Hitler în vizită la Mussolini</h2>
                    <em>14 Iunie 1934</em>
                    <div style="display: flex;justify-content: center">
                        <img src="6.jpg" alt="" width="800px" height="800px">
                    </div>
                    <p style="padding-top: 20px">
                        Cancelarul german Adolf Hitler vine la Veneția pentru o vizită de două zile, întâmpinat fiind de
                        "il Duce" și premierul italian Benito Mussolini.<br>
                        Întâlnirea de la Veneția, care are loc la inițiativa Germaniei, este prezentată ca țmplinirea
                        dorinției ambilor parteneri de a se cunoaște și de a face schimb de opinii.
                    </p>
                </li>

                <li data-date="02/11/1933">
                    <h2>Hitler-putere exclusivă</h2>
                    <em>02 August 1934</em>
                    <div style="display: flex;justify-content: center">
                        <img src="7.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px"> După moartea președintelui Paul von Hindenburg, survenită la vârsta de 86 de ani pe când acesta
                        se afla la Neudeck, cancelarul german Adol Hitler reușeste puterea supremă în mâinile propriei
                        persoane. În chiar ziua morții lui Hindenburg, Hitler preia administrația prezidențială. O lege
                        emisă în ziua precedată de guvern reunea administrația prezidențială cu cea guvernamentala sub
                        conducerea unei singure persoane.
                    </p>
                </li>

                <li data-date="07/03/1934">
                    <h2>Intrare în marș în Renania</h2>
                    <em>07 Martie 1936</em>
                    <div style="display: flex;justify-content: center">
                        <img src="8.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px"> Detașamente ale Wehrmachtului, însumând aproximativ 30 000 de soldați, întră în marș ân regiunea
                        demilitarizată Renania. Cancelarul german Adolf Hitler încalcă intenționat prin acest ordin
                        Tratatul de la Locarno(1925), prin care Germania se obligase să respecte granițele germane de
                        vest impuse prin Trataul de la Versailles, cât și regiunea demilitarizată Renania.<br>
                        Ca pretext pentru acțiunea de ocupare, salutată cu entuziasmul de populație, guvernul german
                        folosește alianța defensivă francezo-sovietică, din 2 mai 1935.
                    </p>
                </li>

                <li data-date="07/06/1934">
                    <h2>Japonia pornește războiul împotriva Chinei</h2>
                    <em>07 Iulie 1937</em>
                    <p style="padding-top: 20px"> O încăierare care are loc în localitatea Lukouchiao, nod feroviar strategic de lângă Beijing, ia
                        amploare și se transformă într-un război sângeros între Japonia și China. Într-o ședință
                        excepțională, guvernul japonez decide să trimită noi trupe către nordul Chinei și să furnizeze
                        mijloace materiale. Cerințele Japoniei, printre altele autonomie totală în nordul Chinei, sunt
                        respinse de guvernul chinez.</p>
                </li>

                <li data-date="19/07/1934">
                    <h2>Naziștii condamnă arta</h2>
                    <em>19 Iulie 1937</em>
                    <div style="display: flex;justify-content: center">
                        <img src="10.jpg" alt="" width="800px" height="800px">
                    </div>
                    <p style="padding-top: 20px"> Țntr-o expoziție deschisă marelui public la Munchen, Germania nazistă expune lucrări ale acelor
                        srtiști care, in ochii ideologilor național-socialist, sunt "degenerați". Spectacolul de la
                        Institulul Arheologic din Hofgartenarkaden este cel mai amplu de acest gen până la momentul
                        respectiv.

                    </p>
                </li>

                <li data-date="01/10/1934">
                    <h2>Al Doilea Război Mondial</h2>
                    <em>01 Septembrie 1939</em>
                    <div style="display: flex;justify-content: center">
                        <img src="11.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px"> La ora 4:45 vasul de război Schleswig-Holstein deschide focul asupra fortificațiilor poloneze
                        din peninsula Westerplatte din golful Gdansk. În felul acesta se declanșează, conform planului,
                        atacul Wchrmachtului asupra Poloniei, ordonat la 31 august de cancelarul Adof Hitler. La ora
                        4.34, podul de pe Vistula, lângă Dischau(Tezew), este ținta atacurilor bombardierelor în picaj
                        de tip Junkers Ju 87 aparținând celei de-a treia divizii a escadrilei Stuka 1. Ele bombardează
                        declanșatoarele explosibilului montat pe podul peste care trbuiau să treacă trupele de întărire
                        ale Armatei III germane. Polonezii reușesc totuși să repare declanșatoarele și să arunce ăn aer
                        podul la ora 6.30.<br>
                        Înaintrea continuă conform planului. Armata IV germană ajunge la Vistula, Armata XIV cucerește
                        pe 6 septembrie Cracovia. Pe 9 septembrie, armata poloneză Poznan pornește un atac căruia, pe 14
                        septembrie, i se alătură și armata Pormorze. Conflictul se transfomă în bătălie de pe râul
                        Bzura, cea mai mare și decisivă a campaniei poloneze, câștigtă de germani.
                    </p>
                </li>

                <li data-date="14/12/1934">
                    <h2>Primele deportări ale evreilor</h2>
                    <em>12 Februarie 1940</em>
                    <div style="display: flex;justify-content: center">
                        <img src="12.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px">
                        Ostracizarea evreilor în Germania atinge un nou punct culmininat. Comandantul SS și șeful
                        poliției Heinrich Himmler ordonă pentru prima oară deportarea a 6 000 de evrei din locurile lor
                        natale. Cei afectați provin din Stralsund, Stettin, Schneidemuhl, Viena și Ostrava. Ei sunt
                        transportați în vagoane de marfă spre orașul polonez Lublin, unde îi așteptă condiții de trai
                        inumane.
                    </p>
                </li>

                <li data-date="10/05/1935">
                    <h2>Rezistență sovietică</h2>
                    <em>14 Iulie 1941</em>
                    <div style="display: flex;justify-content: center">
                        <img src="13.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px">
                        În cadeul Comitetului Central al Partidului Comunist sovitic de la Moscova se înfiițează Statul
                        Major al mișcării de parizant. Misiunea acestuia este să organizeze și să coordoneze mișcares de
                        rezistență în teritoriile ocupate de trupel germane.<br>
                        Încă din 29 iunie, Comitetul Central și Consiliul comisarilor poporului deciseră: "În
                        teritoriile ocupate de inamic, departamente de parizani și de gruprui de diversiunea vor acționa
                        pe baza unui plan comun împotriva unităților armatei inamice, pentru dezlănțuirea războiului
                        partizanilor, legături telefonice și telegrafice, pentru incendierea depozitelor de alimente
                        etc." Într-un discurs transmis de toate posturile de radio în 3 iulie, șeful statului, Iosif
                        Visarionovici Stalin, cheamă poporul să-i sprijine pe partizani. Ținând cont de invazia
                        germanilor, se spune că este o chestiune de viață șo de moarte dacă poporul Uniunii Sovietice
                        vrea să fie liber sau să devină sclav.
                    </p>
                </li>
                <li data-date="05/07/1935">
                    <h2>Bombe în bazinul Ruhr</h2>
                    <em>5 Martie 1943</em>
                    <div style="display: flex;justify-content: center">
                        <img src="14.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px">
                        În noaptea de 6 martie, forțele aeriene britanice pornesc o ofensivă de proporții asupra
                        bazinului Ruhr. 369 de bombardiere ale Royal Air Force lansează 150 000 de bombe incendiare și
                        80 de kine asupra orașului Essen. 482 de oameni sunt omorâți sau dați dispăruți, 1 440 sunt
                        răniți; 3 018 case distruse, 2166 grav, 19 271 ușor avariate.<br>
                        Comandantul forțelor aeriene britanice, Sir Arthur Travers Harris, șef al escadrilei de
                        bombardiere respomsabil cu distrugerea prin bombardare a orașelor germane, declară referitor la
                        ofensiva îndelung pregătită:”S-a dorit să se intervină pentru destabilizarea moralului
                        germanilor, după care mi s-a cerut să încep cu destabilizarea generală a industriei germane,
                        anumite puncte având prioritate, precum atacurile asupra unor unități industriale de producție
                        de submarine, și de avione, a petrolului și a sistemului de transport. Astfel, eu am avut o
                        plajă foarte largă de a lua decizii, și aș fi putut practic să atac orice oraș industrial german
                        cu 100 000 de locuitori sau mai mult. Cea mai importantă țintă a actului a rămas însă bazinul
                        Ruhr, căci aici s-a aflat cea mai importantă zonă industrială a Germaniei, motiv pentru care a
                        fost dinainte ales pentru a fi atacat, prin asta urmărindu-se și dezechilibrarea moralului
                        populației. Însă de acum un an s-a decis ca Essen să fie primul oraș distrus, acesta fiind cel
                        mai mare și cel mai important centru industrial din Ruhr” </p>
                </li>
                <li data-date="02/01/1936">
                    <h2>URSS trădează Varșovia</h2>
                    <em>02 Octombrie 1944</em>
                    <div style="display: flex;justify-content: center">
                        <img src="15.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px">
                        Revolta de la Varșovia a armatei naționale poloneze împotriva ocupației germane se năruie. Pe 1
                        august, membrii organizației subterane se răsculaseră împotriva germanilor. Ei sperau să câștige
                        lupta contra trupelor de ocupație cu ajutorul trupelor sovietice de la porțile Varșoviei. După
                        câteva zile, polonezii aveau toată capitala sub control, însă Armata Roșie s-a lăsat așteptată.
                        În mod surprinzător, trupele sovietice chiar s-au retras puțin înainte de cucerirea orașului.
                        Nestingheriți, germanii au început recucerirea Varșoviei de la insurgenți. Polonezii precar
                        înarmați nu au putut păstra orașul decât două luni, după care au trebuit să se predea</p>
                </li>
                <li data-date="16/04/1936">
                    <h2>Armata Roșie cucerește Berlinul</h2>
                    <em>16 Aprilie 1945</em>
                    <div style="display: flex;justify-content: center">
                        <img src="16.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px">
                        După tiruri de artilerie care durează mai multe ore, frontul I Ucraina deschide atacul Armatei
                        Roșii asupra capitalei Reichului, Berlin. Pentru această bătălie, forțele armate sovietice au la
                        dispoziție 2, 5 milioane de soldați germani în general precar înarmați. La 5 zile după
                        declanșarea ofensivei, teritoriul orașului se află deja în raza de acțiune a atileriei
                        sovietice. În același timp, primele unități ale Armatei Roșii ajung la porțile Berlinului.</p>
                </li>

                <li data-date="30/05/1936">
                    <h2>Hitler se sinucide</h2>
                    <em>16 Aprilie 1945</em>
                    <div style="display: flex;justify-content: center">
                        <img src="17.jpg" alt="" width="800px" height="420px">
                    </div>
                    <p style="padding-top: 20px">
                        Sinucigându-se, cancelarul german Adol Hitler nu mai poate fi tras la răspundere pentru miliarde
                        de morti din timpul războiului și pentru Holocaust.</p>
                </li>

                <li data-date="07/06/1936">
                    <h2>Germania semnează capitularea totală</h2>
                    <em>07 Mai 1945</em>
                    <p style="padding-top: 20px">
                        În orașul Reims din vestul Franței, sediul cartierului german al comandamentului suprem al
                        forțelor armate aliate din Europa, generalul american Dwight D. Elisenhower, generalul-colonel
                        Alfred Jodl (trupe de uscat), amiralul Hans-Georg von Friedeburg (marină) și generalul Wilhelm
                        Oxenius (Luftwaffe) semnează capitularea totală necondiționată. Capitularea va intra în vigoare
                        pe 8 mai, la ora 23.01, ora Europei Centrale.
                        Cànd puterile aliate învingătoare anunță la radio victoria, în mai multe orașe se produce o
                        explozue de bucurie. Oamenii ies în stradă și sărbătoresc împreună sfârșitul războiului.
                        În Germania începe „Stunde Null” –„ora zero” . Populația nu mai are nimic. Războiul a devastat
                        mahoritatea orașelor. Mulți oameni trebuie să trăiască în pivnițe, economia, comerțul si
                        comunicațiile trebuie reconstruite de la zero în anii care vin.

                    </p></li>
            </ol>
        </div>
    </section>
</div>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>