<!DOCTYPE html>
<html>

    <head>
        <title>
<?php
            if ( isset($_GET['p']) )  $p = $_GET['p'];
            else                      $p = '';
            if ( $p == '')        print 'Minőségi akciós kütyük'    ; else
            if ( $p == 'kapcs')   print 'Milyen kütyüt vegy?'       ; else
            if ( $p == 'eler')    print 'Hol vegyek kütyüt?'        ; else
            if ( $p == 'webshop') print 'Kütyük online vásárlása'   ; else
            if ( $p == 'forum')   print 'Kütyü vélemények'          ; else
                                  print '404 - Kütyü';
            print ' - kütyübolt.hu'

?>    
        </title>     
    </head>

    <style>


        body {
            margin            : 0               ;
            font-size         : 1.5em           ;
            font-family       : Verdana         ;
        }

        div#menu {
            background-color  : #aaa            ;
            padding           : 6px             ;
            text-align        : center          ;
        }

        div#menu a {
            display           : inline-block    ;
            width             : 160px           ;
            color             : #666            ;
            text-decoration   : none            ; 
            border            : solid 1px #aaa  ;
        }

        div#menu a:hover {
            color             : #000            ;
            background-color  : #DDD            ; 
            border            : solid 1px #666  ;
        }
    
        div {
            padding:            12px 48px       ;
        }

        div#lablec {
            background-color  : #888            ;
            padding: 50px;
            margin-top        : 40%             ;
            font-size         : 15px            ;
        }
    
    </style>

    <body>
        <div id='menu'>
            <a href="./"          > Kezdőlap    </a>
            <a href="./?p=kapcs"  > Kapcsolat   </a>
            <a href="./?p=eler"   > Elérhetőség </a>
            <a href="./?p=webshop"> Webshop     </a>
            <a href="./?p=forum"  > Fórum       </a>
        </div>

        <div id='tartalom'>
<?php
            if ( $p == '')        print '<h1>Akciók, aktualitások</h1>'             ; else
            if ( $p == 'kapcs')   print '<h1>Vedd fel velünk a kapcsolatot!</h1>'   ; else
            if ( $p == 'eler')    print '<h1>Elérhetőségeink</h1>'                  ; else
            if ( $p == 'webshop') print '<h1>Vásárolj kínálatunkból</h1>'           ; else
            if ( $p == 'forum')   print '<h1>Kíváncsiak vagyunk a véleményedre</h1>'; else
                                  include('404.php');
?>        
        
        </div>

        <div id='lablec'>
<?php

            


            $napok     =   array( "", "Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat", "Vasárnap");
            $honapok   =   array( "", "Január", "Február", "Március", "Április", "Május", "Június", "Július", "Augusztus", "Szeptember", "Október", "November", "December");
        
            

            $nevnap = array("Fruzsina","Ábel","Genovéva és Benjámin","Titusz és Leona",  
                             "Simon","Boldizsár","Attila és Ramóna","Gyöngyvér","Marcell",  
                             "Melánia","Ágota","Ernő","Veronika","Bódog","Lóránt és Loránd",  
                             "Gusztáv","Antal és Antónia","Piroska","Sára, Márió","Fábián és Sebestyén",  
                             "Ágnes","Vince és Artúr","Zelma és Rajmund","Timót","Pál","Vanda és Paula",  
                             "Angelika","Károly és Karola","Adél","Martina és Gerda","Marcella","Ignác","Karolina és Aida","Balázs","Ráhel és Csenge","Ágota és Ingrid",  
                             "Dorottya és Dóra","Tódor és Rómeó","Aranka","Abigél, Alex","Elvira",  
                             "Bertold és Marietta","Lívia és Lídia","Ella és Linda","Bálint és Valentin",  
                             "Kolos és Georgina","Julianna és Lilla","Donát","Bernadett","Zsuzsanna",  
                             "Aladár és Álmos","Eleonóra","Gerzson","Alfréd",  
                             "Szökőnap","Mátyás","Géza","Edina","Ákos és Bátor","Elemér","Albin","Lujza","Kornélia","Kázmér","Adorján és Adrián","Leonóra és Inez",  
                             "Tamás","Zoltán","Franciska és Fanni","Ildikó","Szilárd",  
                             "Gergely","Krisztián és Ajtony","Matild","Kristóf",  
                             "Henrietta","Gertrúd és Patrik","Sándor és Ede","József és Bánk","Klaudia",  
                             "Benedek","Beáta és Izolda","Emőke","Gábor és Karina","Irén és Irisz",  
                             "Emánuel","Hajnalka","Gedeon és Johanna","Auguszta","Zalán","Árpád","Hugó","Áron","Buda, Richárd","Izidor","Vince","Vilmos és Bíborka",  
                             "Herman","Dénes","Erhard","Zsolt","Leó és Szaniszló","Gyula","Ida",  
                             "Tibor","Anasztázia és Tas","Csongor","Rudolf","Andrea és Ilma","Emma",  
                             "Tivadar","Konrád","Csilla és Noémi","Béla","György","Márk","Ervin",  
                             "Zita","Valéria","Péter","Katalin és Kitti","Fülöp és Jakab","Zsigmond","Tímea és Irma","Mónika és Flórián",  
                             "Györgyi","Ivett és Frida","Gizella","Mihály","Gergely","Ármin és Pálma",  
                             "Ferenc","Pongrác","Szervác és Imola","Bonifác","Zsófia és Szonja",  
                             "Mózes és Botond","Paszkál","Erik és Alexandra","Ivó és Milán",  
                             "Bernát és Felícia","Konstantin","Júlia és Rita","Dezső","Eszter és Eliza",  
                             "Orbán","Fülöp és Evelin","Hella","Emil és Csanád","Magdolna",  
                             "Janka és Zsanett","Angéla és Petronella","Tünde","Kármen, Anita","Klotild","Bulcsú","Fatime","Norbert és Cintia",  
                             "Róbert","Medárd","Félix","Margit és Gréta","Barnabás","Villő",  
                             "Antal és Anett","Vazul","Jolán és Vid","Jusztin","Laura és Alida",  
                             "Arnold és Levente","Gyárfás","Rafael","Alajos és Leila","Paulina",  
                             "Zoltán","Iván","Vilmos","János és Pál","László","Levente és Irén",  
                             "Péter és Pál","Pál","Tihamér, Annamária","Ottó","Kornél és Soma","Ulrik","Emese és Sarolta",  
                             "Csaba","Appolónia","Ellák","Lukrécia","Amália","Nóra és Lili",  
                             "Izabella és Dalma","Jenő","Őrs és Stella","Henrik és Roland","Valter",  
                             "Endre és Elek","Frigyes","Emília","Illés","Dániel és Daniella",  
                             "Magdolna","Lenke","Kinga és Kincső","Kristóf és Jakab","Anna és Anikó",  
                             "Olga és Liliána","Szabolcs","Márta és Flóra","Judit és Xénia","Oszkár","Boglárka","Lehel","Hermina","Domonkos és Dominika","Krisztina",  
                             "Berta és Bettina","Ibolya","László","Emőd","Lőrinc",  
                             "Zsuzsanna és Tiborc","Klára","Ipoly","Marcell","Mária","Ábrahám",  
                             "Jácint","Ilona","Huba","István","Sámuel és Hajna",  
                             "Menyhért és Mirjam","Bence","Bertalan","Lajos és Patrícia","Izsó",  
                             "Gáspár","Ágoston","Beatrix és Erna","Rózsa","Erika és Bella", "Egyed és Egon","Rebeka és Dorina","Hilda","Rozália","Viktor és Lőrinc",  
                             "Zakariás","Regina","Mária és Adrienn","Ádám","Nikolett és Hunor",  
                             "Teodóra","Mária","Kornél","Szeréna és Roxána","Enikő és Melitta","Edit",  
                             "Zsófia","Diána","Vilhelmina","Friderika","Máté és Mirella","Móric",  
                             "Tekla","Gellért és Mercédesz","Eufrozina és Kende","Jusztina","Adalbert",  
                             "Vencel","Mihály","Jeromos","Malvin","Petra","Helga","Ferenc","Aurél","Brúnó és Renáta","Amália",  
                             "Koppány","Dénes","Gedeon","Brigitta","Miksa","Kálmán és Ede","Helén",  
                             "Teréz","Gál","Hedvig","Lukács","Nándor","Vendel","Orsolya","Előd",  
                             "Gyöngyi","Salamon","Blanka és Bianka","Dömötör",
                             "Szabina","Simon és Szimonetta","Nárcisz","Alfonz","Farkas", "Marianna","Achilles","Győző","Károly","Imre","Lénárd","Rezső",  
                             "Zsombor","Tivadar","Réka","Martin","Jónás és Renátó","Szilvia",  
                             "Aliz","Albert és Lipót","Ödön","Hortenzia és Gergő","Jenő","Erzsébet",  
                             "Jolán","Olivér","Cecília","Kelemen és Klementina","Emma","Katalin",  
                             "Virág","Virgil","Stefánia","Taksony","András és Andor", "Elza","Melinda és Vivien","Ferenc és Olívia","Borbála és Barbara","Vilma",  
                             "Miklós","Ambrus","Mária","Natália","Judit","Árpád","Gabriella",  
                             "Luca és Otília","Szilárda","Valér","Etelka és Aletta","Lázár és Olimpia",  
                             "Auguszta","Viola","Teofil","Tamás","Zéno","Viktória","Ádám és Éva",  
                             "Eugénia","István","János","Kamilla",  
                             "Tamás és Tamara","Dávid","Szilveszter" );

            print date("Y.") . $honapok[date("n")] . date(".d ") . $napok[date("N")];
            $hne = date("z") ;
            if( date("Y")%4>0 && $hne>31+24 )   $hne-- ;
            print $nevnap[$hne] . $hne;

            print "<span style='float: right;'>Az oldalt eddig 123 látogató látta<span/>";

            $szulho = 5;
            $szulnap = 22;
            $het = 52;
            //$nap = round(($het % (5 * (4 * 7))), 1);
            //print $honapok[1];

            //$mainap = date("z", + 1);
            //print 17 * 365 + $mainap;

            

?>
        </div>
    </body>

</html>



