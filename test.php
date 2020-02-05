<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Cestování</title>
    <meta name='robots' content='all'>
    <!-- ======================= CCS - START ========================= -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/prispevky.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print">
    <link rel="stylesheet" type="text/css" href="css/non-js-menu.css">
    <!-- ======================== CCS - END ========================== -->
    <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/menu.js"></script>
</head>
<body>
<header>
    <h1 class="page-title">&nbsp;Cestování po Japonsku</h1>
</header>
<!-- Start Menu -->
<div class="menu-mobile">
    <div class="item"><span class="menu-item noselect"><i class="fas fa-bars"></i> Menu</span></div>
</div>
<nav id="nav">
    <!-- JS menu -->
    <div class="_menu" id="menu1">
        <!-- TODO: předělat responzivitu menu na pc -->
        <div class="wrap">
            <div class="pre-item" id="menu00">
                <div class="item"><a href="index.html">Domů</a></div>
            </div>
            <!-- ================================================================= -->
            <!-- TODO: Menu udělat jako cisloMenu-nazev např.: 00-uvod, 03-svatky -->
            <div class="pre-item" id="menu01">
                <div class="item"><span class="menu-item noselect">Japonsko</span></div>
                <div class="menu-pc-abs">
                    <div class="sub-item"><a href="jp-uvod.html">Úvod</a></div>
                    <div class="sub-item"><a href="jp-historie.html">Kousek historie</a></div>
                    <div class="sub-item disable"><a href="#">Šintoismus</a></div>
                    <div class="sub-item disable"><a href="#">Geografie</a></div>
                </div>
            </div>
            <!-- ================================================================= -->
            <div class="pre-item" id="menu02">
                <div class="item"><span class="menu-item noselect">Japonština</span></div>
                <div class="menu-pc-abs">
                    <div class="sub-item"><a href="jpn-o_jazyku.html">O Jazyku</a></div>
                    <div class="sub-item"><a href="jpn-zakladni_fraze.html">Základní fráze</a></div>
                    <div class="sub-item"><a href="jpn-pomucky.html">Výuka - pomůcky</a></div>
                </div>
            </div>
            <!-- ================================================================= -->
            <div class="pre-item" id="menu03">
                <div class="item"><a href="galerie.html">Galerie</a></div>
            </div>
            <!-- ================================================================= -->
            <div class="pre-item active-menu" id="menu04">
                <!-- TODO: provizorní menu na sub-menu, předělat -->
                <div class="item"><span class="menu-item noselect">Cestování</span></div>
                <div class="menu-pc-abs">
                    <div class="sub-item"><a href="cestovani-prvni_cesta_do_japonska.html">První cesta do Japonska</a></div>
                    <div class="sub-item disable"><a href="#">Tokyo</a></div>
                    <div class="sub-item"><a href="cestovani-kyoto.html">Kyoto</a></div>
                    <div class="sub-item"><a href="cestovani-svatky.html">Svátky</a></div>
                    <div class="sub-item"><a href="cestovani-akihabara.html">Akihabara</a></div>
                    <div class="sub-item disable"><a href="#">Peníze</a></div>
                    <div class="sub-item disable"><a href="#">Ostatní informace</a></div>
                </div>
            </div>
            <!-- ================================================================= -->
            <div class="pre-item" id="menu05">
                <div class="item"><span class="menu-item noselect">Pop-Kultura</span></div>
                <div class="menu-pc-abs">
                    <div class="sub-item"><a href="pop_kultura-manga.html">Anime/Manga</a></div>
                    <div class="sub-item"><a href="pop_kultura-festivaly.html">Festivaly</a></div>
                    <div class="sub-item disable"><a href="#">Karaoke</a></div>
                    <div class="sub-item disable"><a href="#">Cosplay</a></div>
                    <div class="sub-item disable"><a href="#">Idolové</a></div>
                    <div class="sub-item disable"><a href="#">Purikura</a></div>
                </div>
            </div>
            <!-- ================================================================= -->
            <div class="pre-item" id="menu06">
                <div class="item"><a href="dokumentace.html">Dokumentace</a></div>
            </div>
            <!-- ================================================================= -->
        </div>
    </div>
</nav>
<nav id="nav2">
    <!-- Hover menu -->
    <div class="_menu menu2" id="menu2">
        <ul class="ul-menu02 main-navigation">
            <li class="li-menu02"><a href="index.html">Domů</a></li>
            <!-- ======================================== -->
            <li class="li-menu02"><a href="#">Japonsko</a>
                <ul class="ul-menu02">
                    <li class="li-menu02">
                        <a href="jp-uvod.html">Úvod</a>
                    </li>
                    <li class="li-menu02">
                        <a href="jp-historie.html">Kousek historie</a>
                    </li>
                </ul>
            </li>
            <!-- ======================================== -->
            <li class="li-menu02"><a href="#">Japonština</a>
                <ul class="ul-menu02">
                    <li class="li-menu02">
                        <a href="jpn-o_jazyku.html">O Jazyku</a>
                    </li>
                    <li class="li-menu02">
                        <a href="jpn-zakladni_fraze.html">Základní fráze</a>
                    </li>
                    <li class="li-menu02">
                        <a href="jpn-pomucky.html">Výuka - pomůcky</a>
                    </li>
                </ul>
            </li>
            <!-- ======================================== -->
            <li class="li-menu02"><a href="galerie.html">Galerie</a>
            </li>
            <!-- ======================================== -->
            <li class="li-menu02 active-menu"><a href="#">Cestování</a>
                <ul class="ul-menu02">
                    <li class="li-menu02">
                        <a href="cestovani-prvni_cesta_do_japonska.html">První cesta do Japonska</a>
                    </li>
                    <li class="li-menu02 disable">
                        <a href="#">Tokyo</a>
                    </li>
                    <li class="li-menu02">
                        <a href="cestovani-kyoto.html">Kyoto</a>
                    </li>
                    <li class="li-menu02" style="display: block;">
                        <a href="cestovani-svatky.html">Svátky</a>
                    </li>
                    <li class="li-menu02">
                        <a href="cestovani-akihabara.html">Akihabara</a>
                    </li>
                </ul>
            </li>
            <!-- ======================================== -->
            <li class="li-menu02"><a href="#">Pop-Kultura</a>
                <ul class="ul-menu02">
                    <li class="li-menu02">
                        <a href="pop_kultura-manga.html">Anime/Manga</a>
                    </li>
                    <li class="li-menu02">
                        <a href="pop_kultura-festivaly.html">Festivaly</a>
                    </li>
                </ul>
            </li><!-- ======================================== -->
            <li class="li-menu02"><a href="dokumentace.html">Dokumentace</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Konec Menu -->
<!-- ============ CONTAINER =================== -->
<div id="container">
    <?php
    // Vypíše rozlišení monitoru
    echo '<script type="text/javascript">';
    echo 'document.write(screen.width)';
    echo '</script>';
    ?>
    <!-- ======================================================================================================================== -->
    <div class="pr--wrap">
        <h2 class="pr--title-h2">První cesta do Japonska aneb. rady a tipy začátečníkům</h2>
        <!-- ================================= -->
        <article>
            <h3>#01 Kdy vyrazit do Japonska?</h3>
            <p class="pr--text">
                Přestože jsou všechna roční období v Japonsku krásná, je důležité vybrat správné období pro vaši cestu, jelikož sebemenší chyba může vaší cestu po Japonsku naprosto zruinovat. Je důležité brát ohled na to, že obecné charakteristiky jednotlivých měsíců a období neplatí pro všechna místa. Je tedy důležité vědět, jaký typ cestování zrovna hledáte. Jestli překrásnou zimu na severu Japonska v Hokkaidu nebo se potápět v tropickém moři na jižním ostrově Okinawa. Jeden z nejlepších termínu pro cestu do Japonska je říjen. Sezóna tajfunů už by měla být za námi a teploty by se měli pohybovat mezi 20 - 27°C. Zkrátka ideální počasí pro cestování na lehko. Velké zima se prohání Japonskem v únoru obrovské teplo zase naopak v srpnu.
            </p>
        </article>
        <!-- ================================= -->
        <article>
            <h3>#02 JAPAN RAIL PASS</h3>
            <p class="warning">
                <i class="fas fa-exclamation-triangle"></i> POZOR!! - JRP můžete zakoupit pouze mimo japonsko! <i class="fas fa-exclamation-triangle"></i>
            </p>
            <p class="pr--text">
                Japan Rail Pass (zkráceně JRP / JR Pass) se určitě hodí všem, kteří budou po Japonsko cestovat hlavně pomocí vlaku. Rozhodně se vyplatí do JRP investovat, jelikož doprava je v Japonsku opravdu drahá. Nicméně Japonsko je velice vstřícné turistům, a proto můžete na hodně věcí získat slevy a výhody. Tato časová jízdenka Vám umožní neomezeně využívat všechny japonské želenice spadající pod společnost JR a to po dobu 7, 14 nebo 21 dní. Spadají do toho samozřejmě i šinkanseny a trajekt na ostrov Mijadžima.
            </p>
            <p class="pr--text">
                JRP můžete zakoupit pouze mimo Japonsko a používat ho smí pouze turista, jenž má v pase razítko „temporary visitor“. JR Pass v česku si můžete pořídit na stránkách
                <a href="https://www.dojaponska.cz/" class="pr--odkaz">www.dojaponska.cz</a> nebo <a href="https://www.jrpass.com/" class="pr--odkaz">www.jrpass.com</a>.
                JRP můžete zakoupit pouze mimo Japonsko a používat ho smí pouze turista, jenž má v pase razítko „temporary visitor“. JR Pass v česku si můžete pořídit na stránkách www.dojaponska.cz nebo www.jrpass.com. Vybrat si můžete z dvou variant zelený (green) nebo obyčejný (ordinary). Jedná se o verze 1. a 2. třídy. Pro českého turistu se dá říct, že 1. třída (green) je naprosto zbytečná, a i v obyčejné 2. třídě se budete cítit luxusně. JR Pass vám domů přijde formou kupónu, který už potom směníte v Japonsku za JR Pass (během výměny budete muset předložit Váš pas). Od vámi vybraného data vám pak začne platit váš JR Pass.
            </p>
            <table class="tbl-jrp">
                <tbody>
                <tr>
                    <th rowspan="2">Platnost/Typ</th>
                    <th colspan="2">Green</th>
                    <th colspan="2">Ordinary</th>
                </tr>
                <tr>
                    <td>Dospělá osoba</td>
                    <td>Dítě do 11Let</td>
                    <td>Dospělá osoba</td>
                    <td>Dítě do 11Let</td>
                </tr>
                <tr class="grey">
                    <td>7 denní JRP</td>
                    <td>29 110 JPY</td>
                    <td>14 550 JPY</td>
                    <td>38 880 JPY</td>
                    <td>19 440 JPY</td>
                </tr>
                <tr>
                    <td>14 denní JRP</td>
                    <td>46 390 JPY</td>
                    <td>23 190 JPY</td>
                    <td>62 950 JPY</td>
                    <td>31 470 JPY</td>
                </tr>
                <tr class="grey">
                    <td>21 denní JRP</td>
                    <td>59 350 JPY</td>
                    <td>29 670 JPY</td>
                    <td>81 870 JPY</td>
                    <td>40 930 JPY</td>
                </tr>
                </tbody>
            </table>
        </article>
        <!-- ================================= -->
        <article>
            <h3>#03 Ubytování</h3>
            <p class="pr--text">
                Ubytování je jedna z věcí co byste neměli nechávat na poslední chvíli. Jestli si tedy chcete zamluvit levné a komfortní ubytování, rozhodně bych se nebál zamluvit pokoj měsíc dopředu. Tradičně bych doporučil rezervovat přes <a href="http://www.booking.com" class="pr--odkaz">www.booking.com</a>, který vám navíc dává možnost pobyt do pár dnů před příjezdem zrušit, což se určitě hodí, kdyby vám náhodou nevyšlo počasí.
            </p>
            <p class="pr--text">
                Hezkou možností jsou guesthousy u místních rodin. Bohužel tento typ ubytování není po Japonsku tolik rozšířený, takže bych využil každé šance, která se naskytne.
            </p>
            <!-- ================================= -->
            <h3>#04 Doprava</h3>
            <p class="pr--text">
                Doprava v Japonsku je opravdu úžasná. Slovo "zpoždění", jakoby japonština ani neznala. V Japonsku rozhodně najdete spoj, ať jedete kamkoliv. V noci to už tolik neplatí. Jestli ve dne najdete spoj opravdu kamkoliv, v noci (od půlnoci do 5ti ráno) se moc neprojedete.
            </p>
            <p class="pr--text">
                Své trasy můžete plánovat pomocí <a href="http://www.hxperdia.com" class="pr--odkaz">www.hyperdia.com</a>, je to prakticky stejné, jako náš idos. Najde vám to jak trasu, tak vzdálenost, cenu i čísla nástupišť.
            </p>
            <figure class="pr--fg-img">
                <div class="pr--wrap-center">
                    <img class="border-1p mapa" src="_img/cestovani/tokyo-metro-mapa.jpg" alt="Mapa metra">
                </div>
                <figcaption>Mapa Tokijského metra</figcaption>
            </figure>
        </article>
    </div>
</div>
<!-- ============= CONTAINER - END ============== -->
<footer>
    <div class="credit">&copy; 2018 <a href="http://www.mandinecdominik.cz">Mandinec Dominik</a> - Studentský zápočtový projekt #FIM UHK</div>
</footer>
</body>
</html>