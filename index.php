
<?php
    $cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
    $cms->landing( 1, 2 );

    $cms->thankspage = DIR . './success/success.php';
    define( 'THANKSPAGE', $_SERVER['DOCUMENT_ROOT'] . './success/success.php' );
?>

<!DOCTYPE html>
<html lang="cz" dir="ltr" class="webp webp-alpha webp-animation webp-lossless">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="theme-color" content="#ffffff" />
    <title>HYPERTON FORTE koupit levně. Ceny, recenze. HYPERTON FORTE Objednat nyní! </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/new_css.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/scroll.js"></script>
    <script src="jquery-3.6.1.min.js"></script>
    <script>
    sendLimit = 3;
    if (getCookieInfo().has('sendFormCount')) {
        sendFormCount = parseInt(getCookieInfo().get('sendFormCount'));
    } else {
        sendFormCount = 0;
    }

    function initAntispam() {
        document.querySelectorAll("form").forEach(function(value) {
            value.addEventListener("submit", function(submitEvent) {
                sendFormCount += 1;
                if (sendFormCount > sendLimit) {
                    submitEvent.preventDefault();
                    setButtonsDisabled();
                } else {
                    setButtonsDisabled();
                    setCookie('sendFormCount', sendFormCount, 7 * 24 * 60 * 60 * 1000);
                    return true;
                }
            });
        });
    }

    function setCookie(key, value, expires) {
        console.log(new Date(Date.now() + expires).toGMTString());
        document.cookie = key + '=' + value + ';expires=' + (new Date(Date.now() + expires)).toGMTString();
    }

    function getCookieInfo() {
        cookies = decodeURI(document.cookie);
        cookieArray = cookies.split('; ');

        cookieList = new Map();

        cookieArray.forEach(function(itemString) {
            cookieKV = itemString.split('=');
            cookieList.set(cookieKV[0], cookieKV[1]);
        });

        return cookieList;
    }

    function setButtonsDisabled() {
        document.querySelectorAll("button").forEach(function(value) {
            value.disabled = true;
        });

        document.querySelectorAll("input[type=submit]").forEach(function(value) {
            value.disabled = true;
        });
    }

    document.addEventListener("DOMContentLoaded", ready => initAntispam());
    </script>
    <?php $cms->header(); ?>
</head>
<body class="timer-different ev-date">
    <header class="header bg animate-block ">
        <img class="logo-main header__logo-main " src="images/logo-white.png" alt="" width="369" height="39" />
        <div class="header__content"><img class="logo header__logo" src="images/logo-black.png" alt="" width="240"
                height="25" />
            <ul class="nav header__nav">
                <li class="nav__item"><a class="nav__link " href="#about">O produktu</a></li>
                <li class="nav__item"><a class="nav__link " href="#composition">Složení inovací</a></li>
                <li class="nav__item"><a class="nav__link " href="#reviews">Zpětná vazba od zákazníků</a></li>
                <li class="nav__item"><a class="nav__link " href="#order">Jak objednat</a></li>
            </ul><button class="btn header__btn ever-popup-btn"><span class="btn__text">Objednávka</span></button>
        </div><button class="burger header__burger"><span class="burger__line"></span></button>
    </header>
    <section class="promo block animate-block ">
        <div class="container"><img class="promo__logo promo-logo " src="images/logo-black.png" alt="image" width="532"
                height="55" />
            <h2 class="promo__title ">Krevní tlak se normalizuje!</h2>
            <ul class="promo__list promo-list">
                <li class="promo-list__item ">Stabilní krevní tlak</li>
                <li class="promo-list__item ">Normální hladina cholesterolu</li>
                <li class="promo-list__item ">Jasné myšlení a dobrá paměť </li>
                <li class="promo-list__item ">Energie a vitalita</li>
            </ul>
            <div class="promo__pack promo-pack ">
                <picture class="promo-pack__prod promo-pack-prod">
                    <source type="image/webp" srcset="images/prod.webp" /><img class="promo-pack-prod__img"
                        src="images/prod.webp" alt="" />

                </picture>
            </div>
            <form class="promo__form x_order_form form " action="https://wonderfuloffernewtop.click/?offer=micardium&countryCode=cz" method="post">
                <?=$cms->params();?>

                <div class="form__content">
                    <div class="form__top">
                        <h3 class="form__title">sleva <span class="text-accent fw500"><?=$cms->discount;?></span> pouze dnes: </h3>
                        <div class="price form__price">
                            <div class="price__part price__old"><span
                                    class="x_price_previous"><?=$cms->oldpr;?></span> <span
                                    class="x_currency">CZK</span></div>
                            <div class="price__part price__new text-accent"><span
                                    class="x_price_current"><?=$cms->price;?></span><span
                                    class="x_currency">CZK</span></div>
                        </div>
                    </div>
                    <div class="form__inputs"><label class="form__input-wrap form__input-wrap--name">
                            <input class="form__input" placeholder="Název" type="text" name="name" minlength="2"
                                required="" /></label>

                        <label class="form__input-wrap form__input-wrap--phone">
                            <input class="form__input" placeholder="Telefon" type="tel" minlength="7" name="phone"
                                required="" /></label>
                    </div>
                    <input type="hidden" name="country" value="<?=$cms->country;?>" />
                    <button class="btn form__btn" type="submit"><span class="btn__text">Objednávka</span></button>
                </div>
                <p class="form__note">Testováno v Německu</p>

            </form>
            <div class="promo__num ">120/80</div>
        </div>
    </section>
    <div class="overlay"></div>
    <section class="symptoms block bg animate-block ">
        <div class="container">
            <h2 class="title symptoms__title "><span class="text-under">příznaky</span> vysokého krevního tlaku </h2>
            <ul class="symptoms__list">
                <li class="symptoms__item ">Tinnitus</li>
                <li class="symptoms__item ">Izzzad&eacute;konys&aacute;g</li>
                <li class="symptoms__item ">Snížený pracovní výkon</li>
                <li class="symptoms__item ">Bolesti hlavy</li>
                <li class="symptoms__item ">Chladné počasí</li>
                <li class="symptoms__item ">Problémy se spánkem</li>
                <li class="symptoms__item ">Zčervenání obličeje</li>
                <li class="symptoms__item ">Otok kolem očí</li>
                <li class="symptoms__item ">Necitlivost a otok prstů na rukou a nohou</li>
                <li class="symptoms__item ">Závratě</li>
                <li class="symptoms__item ">Podrážděnost</li>
                <li class="symptoms__item ">Rychlý srdeční tep</li>
                <li class="symptoms__item ">Úzkost</li>
                <li class="symptoms__item ">Poruchy paměti</li>
                <li class="symptoms__item ">Chronická únava</li>
            </ul>
            <h3 class="symptoms__subtitle ">Pokud pociťujete některý z výše uvedených příznaků, můžete mít vysoký krevní
                tlak!</h3>
            <p class="symptoms__stat">7 MILIONŮ LIDÍ ROČNĚ PO CELÉM SVĚTĚ
                <span class="text-accent">SMRT JE ZPŮSOBENA VYSOKÝM KREVNÍM TLAKEM!</span>
            </p>
        </div>
    </section>
    <section class="danger block animate-block ">
        <div class="container">
            <h2 class="title danger__title ">Proč je vysoký krevní tlak <span class="text-under">nebezpečný</span> </h2>
            <ul class="danger__stat stat">
                <li class="stat__item "><span class="stat__num text-accent">200</span><span
                        class="stat__unit">milion</span>
                    <p class="stat__text">případ invalidity v souvislosti s hypertenzí</p>
                </li>
                <li class="stat__item "> <span class="stat__num text-accent">9,4</span> <span
                        class="stat__unit">milion</span>
                    <p class="stat__text">lidí, kteří každoročně zemřou v důsledku vysokého krevního tlaku.</p>
                </li>
                <li class="stat__item "><span class="stat__num text-accent">700</span><span
                        class="stat__unit">milion</span>
                    <p class="stat__text">nemáte tušení, že máte vysoký krevní tlak</p>
                </li>
                <li class="stat__item ">
                    <p class="stat__top">U hypertenze <br>v poslední</p> <span
                        class="stat__num text-accent">30</span><span class="stat__unit">rok</span>
                    <p class="stat__text"> počet trpících lidí se zdvojnásobil! </p>
                </li>
            </ul>
            <div class="effects ">
                <h3 class="effects__title fw500 ">CO SE STANE, KDYŽ NEBUDEME BOJOVAT S VYSOKÝM KREVNÍM TLAKEM?</h3>
                <ul class="effects__list">
                    <li class="effects__item ">Koronární onemocnění srdce</li>
                    <li class="effects__item ">Srdeční infarkt</li>
                    <li class="effects__item ">Mrtvice</li>
                    <li class="effects__item ">Chronické srdeční selhání</li>
                    <li class="effects__item ">Aneuryzma a vysoké riziko prasknutí cévní stěny</li>
                    <li class="effects__item ">Selhání ledvin</li>
                    <li class="effects__item ">Porucha zraku způsobující slepotu</li>
                    <li class="effects__item ">Demence - Alzheimerova choroba</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="helps" id="about">
        <div class="helps__top bg animate-block">
            <div class="container">
                <h2 class="title helps__title ">HYPERTON FORTE pomáhá <span class="text-under"> zapomenout
                        na vysoký krevní tlak</span> </h2>
                <p class="helps__text ">Vědci si dali za úkol vyvinout přípravek na přírodní bázi, který by byl účinný
                    bez vedlejších účinků (jako mnoho syntetických léčiv). Při svém výzkumu se zaměřili na extrakt z
                    olivových listů. Ten se získává z listů olivovníku. Extrakt obsahuje účinné látky, zejména
                    oleuropein, které mají antioxidační a imunomodulační vlastnosti.</p>
                <p class="helps__text helps__text--last ">Extrakt má silný protizánětlivý účinek a pomáhá předcházet
                    oxidaci cholesterolu v lipoproteinech o nízké hustotě. Polyfenolické sloučeniny navíc pomáhají
                    předcházet tvorbě arteriálních plaků a snižují riziko infarktu a mrtvice. Extrakt z olivových listů
                    snižuje riziko vzniku krevních sraženin vedoucích k mrtvici.</p>

                <div class="helps__pack helps-pack  helps__pack--double">
                    <picture class="helps-pack__prod helps-pack-prod"><img src="images/prod-double.webp" alt="" />
                    </picture>
                </div>
            </div>
        </div>
        <div class="helps__bottom animate-block">
            <div class="container">
                <div class="helps__pack helps-pack ">
                    <picture class="helps-pack__prod helps-pack-prod"><img src="images/prod-double.webp" alt="" />
                    </picture>
                </div>

                <form class="helps__form x_order_form form " action="#" method="post">
                    <?=$cms->params();?>

                    <div class="form__content">
                        <div class="form__top">
                            <h3 class="form__title">sleva <span class="text-accent fw500"><?=$cms->discount;?></span> pouze dnes: </h3>
                            <div class="price form__price form__price--border">
                                <div class="price__part price__old"><span
                                        class="x_price_previous"><?=$cms->oldpr;?></span> <span
                                        class="x_currency">CZK</span></div><span
                                    class="price__div"></span>
                                <div class="price__part price__new text-accent"><span
                                        class="x_price_current"><?=$cms->price;?></span><span
                                        class="x_currency">CZK</span></div>
                            </div>
                        </div>
                        <div class="form__bottom">
                            <div class="form__inputs"><label class="form__input-wrap form__input-wrap--name">
                                    <input class="form__input" placeholder="Název" type="text" name="name" minlength="2"
                                        required="" /></label>

                                <label class="form__input-wrap form__input-wrap--phone">
                                    <input class="form__input" placeholder="Telefon" type="tel" minlength="7"
                                        name="phone" required="" /></label>
                            </div>
                            <input type="hidden" name="country" value="<?=$cms->country;?>" />
                            <button class="btn form__btn" type="submit"><span
                                    class="btn__text">Objednávka</span></button>
                        </div>
                    </div>
                    <p class="form__note">Testováno v Německu</p>

                </form>
            </div>
        </div>
    </section>
    <section class="solve block animate-block">
        <div class="container">
            <h2 class="title solve__title ">HYPERTON FORTE - <span class="text-under">komplexní
                    řešení</span> vysokého krevního tlaku!</h2>
            <ul class="solve__list">
                <li class="solve__item ">Pomáhá eliminovat bolesti hlavy </li>
                <li class="solve__item ">Pomáhá stabilizovat krevní tlak</li>
                <li class="solve__item ">Pomáhá zlepšit pružnost cév</li>
                <li class="solve__item ">Pomáhá normalizovat spánek</li>
                <li class="solve__item ">Pomáhá zvyšovat výkonnost</li>
                <li class="solve__item ">Pomáhá zmírnit srdeční potíže</li>
                <li class="solve__item ">Pomáhá normalizovat srdeční rytmus</li>
                <li class="solve__item ">pomáhá odstraňovat "škodlivý" cholesterol z cév</li>
                <li class="solve__item ">Pomáhá zklidnit nervový systém</li>
                <li class="solve__item ">Pomáhá funkci paměti</li>
                <li class="solve__item ">Pomáhá zlepšit metabolické procesy </li>
            </ul>
        </div>
        <div class="wave solve__wave"></div>
    </section>
    <section class="doc bg block animate-block">
        <div class="doc__content">
            <div class="doc__item doc__item--1">
                <div class="doc__wrap">
                    <p class="doc__text ">S hypertenzí se potýkám již více než 40 let.
                        HYPERTON FORTE Vypozoroval jsem, že asi 70 % pacientů s touto diagnózou do pěti let
                        umírá - protože když krevní tlak stoupne, jednoduše se "srazí" prášky, aniž by se řešila
                        příčina. Když mi byl ukázán , pečlivě jsem prostudoval jeho složení a uvědomil si, že konečně
                        vznikl přípravek, který pomůže nejen snížit krevní tlak, ale také se vysokého krevního tlaku
                        nadobro zbavit! HYPERTON FORTE Nyní doporučuji všem, kteří trpí vysokým krevním
                        tlakem, aby užívali lék. Výsledky jsou úžasné: 8 z 10 mých pacientů se dokázalo zbavit příznaků
                        vysokého krevního tlaku!</p>

                    <h3 class="doc__name ">MICHAEL BORDAS,</h3>
                    <p class="doc__pos ">odborník v oboru kardiologie, prezident Centra zdravého srdce, člen Mezinárodní
                        společnosti pro boj proti hypertenzi.</p>
                    <picture class="doc__pic doc__pic--1 ">
                        <img class="doc__img" src="images/doc1.webp" alt="expert" width="548" height="606" />



                    </picture>
                </div>
            </div>
            <div class="doc__item doc__item--2">
                <div class="doc__wrap">
                    <p class="doc__text">Nevýhodou většiny syntetických antihypertenzivních tablet je, že mají agresivní
                        účinek na tělo. Téměř okamžitě tedy snižují krevní tlak, ale ten se pak poměrně rychle opět
                        zvyšuje. To vede k rychlému zhoršení stavu cévních stěn, což může způsobit vážné problémy,
                        včetně prasknutí cévní stěny, což je smrtelný stav. HYPERTON FORTE Na druhou stranu
                        je velmi jemný a postupný a má kumulativní účinek.</p>
                    <h3 class="doc__name">ADAM DÝCHÁ,</h3>
                    <p class="doc__pos">Člen Laboratoře pro výzkum srdce, vědec. Napsal 35 výzkumných prací o vlivu
                        vysokého krevního tlaku na organismus a o riziku předčasného úmrtí.</p>
                    <picture class="doc__pic doc__pic--2">
                        <img class="doc__img" src="images/doc2.webp" alt="expert" width="426" height="609" />



                    </picture>
                </div>
            </div>
        </div>
    </section>
    <div class="action block--top animate-block">
        <div class="runline action__runline ">
            <div class="runline__content">
                <div class="runline__item">
                    Prodej -50% </div>
                <div class="runline__item">
                    Prodej -50% </div>
                <div class="runline__item">
                    Prodej -50% </div>
                <div class="runline__item">
                    Prodej -50% </div>
                <div class="runline__item">
                    Prodej -50% </div>
            </div>
        </div>
        <div class="container">
            <div class="action__pack ">
                <picture class="action__prod"><img class="action__img" src="images/prod-pills.webp" alt="" />
                </picture>
                <p class="form__note">Testováno v Německu</p>
            </div>
            <div class="action__content">
                <form class="promo__form action__form x_order_form form " action="@"
                    method="post">
                    <?=$cms->params();?>

                    <div class="form__content">
                        <div class="form__top">
                            <h3 class="form__title">sleva <span class="text-accent"><?=$cms->discount;?></span> pouze dnes:</h3>
                            <div class="price form__price form__price--border">
                                <div class="price__part price__old"><span
                                        class="x_price_previous"><?=$cms->oldpr;?></span> <span
                                        class="x_currency">CZK</span></div><span
                                    class="price__div"></span>
                                <div class="price__part price__new text-accent"><span
                                        class="x_price_current"><?=$cms->price;?></span><span
                                        class="x_currency">CZK</span></div>
                            </div>
                        </div>
                        <div class="form__bottom">
                            <div class="form__inputs">
                                <label class="form__input-wrap form__input-wrap--name">
                                    <input class="form__input" placeholder="Název" type="text" name="name" minlength="2"
                                        required="" /></label>

                                <label class="form__input-wrap form__input-wrap--phone">
                                    <input class="form__input" placeholder="Telefon" type="tel" minlength="7"
                                        name="phone" required="" /></label>
                            </div>
                            <input type="hidden" name="country" value="<?=$cms->country;?>" />
                            <button class="btn form__btn" type="submit"><span
                                    class="btn__text">Objednávka</span></button>
                        </div>
                    </div>

                </form>
                <h3 class="action__subtitle ">Po absolvování léčby můžete dosáhnout následujících výsledků:</h3>
                <ul class="promo__list promo-list action__list">
                    <li class="promo-list__item ">Stabilní krevní tlak</li>
                    <li class="promo-list__item ">Normální hladina cholesterolu</li>
                    <li class="promo-list__item ">Jasné myšlení a dobrá paměť</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="composition block animate-block" id="composition">
        <div class="container">
            <h2 class="title composition__title ">HYPERTON FORTE                Hlavní <span class="text-under">složky</span> </h2>
            <div class="composition__wrapper bg ">
                <ul class="composition__list composition-list">
                    <li class="composition-list__item composition-list__item--1">
                        <div class="composition-list__bg">
                            <picture class="composition-list__foto "><img class="composition-list__img"
                                    src="images/comp1.webp" alt="image" width="652" height="392" />
                            </picture>
                            <div class="composition-list__content">
                                <h3 class="composition-list__title ">Extrakt z olivových listů</h3>
                                <ul class="slide-list">
                                    <li class="slide-list__item ">má antibakteriální a antivirové účinky</li>
                                    <li class="slide-list__item ">pomáhá normalizovat hladinu cholesterolu v krvi, čímž
                                        zabraňuje rozvoji aterosklerózy </li>
                                    <li class="slide-list__item ">pomáhá zpevňovat stěny cév, snižuje jejich propustnost
                                        a křehkost.a křehkost, což zabraňuje tvorbě krevních sraženin</li>
                                    <li class="slide-list__item ">poskytuje antioxidační ochranu</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="composition-list__item composition-list__item--2">
                        <div class="composition-list__bg">
                            <picture class="composition-list__foto "><img class="composition-list__img"
                                    src="images/comp2.webp" alt="image" width="552" height="363" />
                            </picture>

                            <div class="composition-list__content">
                                <h3 class="composition-list__title">C-VITAMIN</h3>
                                <ul class="slide-list">
                                    <li class="slide-list__item">pomáhá zvyšovat odolnost cév </li>
                                    <li class="slide-list__item">pomáhá normalizovat metabolismus cholesterolu </li>
                                    <li class="slide-list__item">podporuje tvorbu kolagenu, který je důležitý pro
                                        fungování cévního systému. </li>
                                    <li class="slide-list__item">pomáhá chránit tělo před infekcemi </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="composition-list__item composition-list__item--3">
                        <div class="composition-list__bg">
                            <picture class="composition-list__foto "><img class="composition-list__img"
                                    src="images/comp3.webp" alt="image" width="526" height="372" />
                            </picture>
                            <div class="composition-list__content">
                                <h3 class="composition-list__title">KR&Oacute;M</h3>
                                <ul class="slide-list">
                                    <li class="slide-list__item">hraje důležitou roli v prevenci kardiovaskulárních
                                        onemocnění. </li>
                                    <li class="slide-list__item">pomáhá udržovat hladinu cukru v krvi v normálních
                                        mezích</li>
                                    <li class="slide-list__item">pomáhá předcházet tvorbě cholesterolových plaků </li>
                                    <li class="slide-list__item">pomáhá odblokovat cévní systém</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="feat block bg animate-block ">
        <div class="container">
            <h2 class="title feat__title "><span class="text-under">Jeho účinnost je prokázána!</span> </h2>
            <h3 class="feat__subtitle ">HYPERTON FORTE Odborníci ve studii analyzovali účinky a další
                populární léky proti hypertenzi. Studie se zúčastnilo 23 000 osob s vysokým krevním tlakem.</h3>
            <div class="feat__table ">
                <div class="tr">
                    <div class="td th col-effect"> </div>
                    <div class="td th col-prod-1 col-prod">DALŠÍ LÉKÁRENSKÉ PRODUKTY</div>
                    <div class="td th col-prod-2 col-prod">Bisoprolol</div>
                    <div class="td th col-prod-3 col-prod">HYPERTON FORTE</div>
                </div>
                <div class="tr col-effect--land">
                    <div class="td">Snížení krevního tlaku na úroveň odpovídající věku.</div>
                </div>
                <div class="tr">
                    <div class="td col-effect">Snížení krevního tlaku na úroveň odpovídající věku.</div>
                    <div class="td col-prod-1 col-prod"> 76%</div>
                    <div class="td col-prod-2 col-prod">72%</div>
                    <div class="td col-prod-3 col-prod">98%</div>
                </div>
                <div class="tr col-effect--land">
                    <div class="td">Normalizace hladiny cholesterolu</div>
                </div>
                <div class="tr">
                    <div class="td col-effect">Normalizace hladiny cholesterolu</div>
                    <div class="td col-prod-1 col-prod"> 56%</div>
                    <div class="td col-prod-2 col-prod">67%</div>
                    <div class="td col-prod-3 col-prod">99%</div>
                </div>
                <div class="tr col-effect--land">
                    <div class="td">Normalizace srdečního rytmu</div>
                </div>
                <div class="tr">
                    <div class="td col-effect">Normalizace srdečního rytmu</div>
                    <div class="td col-prod-1 col-prod"> 58%</div>
                    <div class="td col-prod-2 col-prod">61%</div>
                    <div class="td col-prod-3 col-prod">98% </div>
                </div>
                <div class="tr col-effect--land">
                    <div class="td">Zlepšení celkového zdravotního stavu</div>
                </div>
                <div class="tr">
                    <div class="td col-effect">Zlepšení celkového zdravotního stavu</div>
                    <div class="td col-prod-1 col-prod"> 45%</div>
                    <div class="td col-prod-2 col-prod">58%</div>
                    <div class="td col-prod-3 col-prod">100%</div>
                </div>
                <div class="tr col-effect--land">
                    <div class="td">Negativní vedlejší účinky</div>
                </div>
                <div class="tr">
                    <div class="td col-effect">Negativní vedlejší účinky</div>
                    <div class="td col-prod-1 col-prod"> 86%</div>
                    <div class="td col-prod-2 col-prod">93%</div>
                    <div class="td col-prod-3 col-prod">0%</div>
                </div>
            </div>
        </div>
    </section>
    <section class="dynamics block animate-block">
        <div class="container">
            <h2 class="title dynamics__title ">HYPERTON FORTE D <span class="text-under">ynamika
                    zlepšení</span> při užívání </h2>
            <div class="dynamics__wrapper ">
                <picture>
                    <source media="(min-width:1620px)" srcset="fonts/graph.svg" />
                    <source media="(min-width:1024px)" srcset="fonts/graph-correct.svg" /><img class="dynamics__img"
                        src="fonts/graph.svg" alt="" />


                </picture>
                <ul class="dynamics__list graph">
                    <li class="graph__item ">
                        <h2 class="graph__title">1 týden</h2>
                        <p class="graph__text">Krevní tlak se postupně normalizuje, bolesti hlavy, nevolnost a závratě
                            mizí - účinnost <span class="text-accent fw500">95 %</span>. </p>
                    </li>
                    <li class="graph__item ">
                        <h2 class="graph__title">2 týdny</h2>
                        <p class="graph__text">Zlepšení kvality spánku, zvýšení energie a síly - účinnost <span
                                class="text-accent fw500">98 %</span>. </p>
                    </li>
                    <li class="graph__item ">
                        <h2 class="graph__title">3 týdny</h2>
                        <p class="graph__text">snižuje hladinu cholesterolu a zlepšuje srdeční frekvenci - s <span
                                class="text-accent fw500">99%</span> účinností.</p>
                    </li>
                    <li class="graph__item ">
                        <h2 class="graph__title">4 týdny</h2>
                        <p class="graph__text">stabilizuje krevní tlak, zlepšuje paměť - <span
                                class="text-accent fw500">100%</span> účinnost.</p>
                    </li>
                </ul>
                <ul class="dynamics__legend legend">
                    <li class="legend__item">0</li>
                    <li class="legend__item">1</li>
                    <li class="legend__item">2</li>
                    <li class="legend__item">3</li>
                    <li class="legend__item">4</li>
                    <li class="legend__item">Týden</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="reviews block bg animate-block " id="reviews">
        <div class="container">
            <h2 class="title reviews__title ">HYPERTON FORTE<span class="text-under">Komentáře od</span>
            </h2>
            <ul class="reviews__list reviews-list ">
                <li class="reviews-list__item ">
                    <picture><img class="reviews-list__img" src="images/w1.webp" alt="" width="87" height="87" />
                    </picture>
                    <h2 class="reviews-list__name">Katalin</h2>
                    <p class="reviews-list__city">Ostrava </p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">Ve svých 68 letech byl silně medikován. Problémem však bylo, že mu
                        příliš nepomáhaly. Ať už jsem je bral, nebo ne, účinek byl stejný. HYPERTON FORTE                        Kolísal mi krevní tlak, byl jsem trochu nervózní a strávil jsem den v posteli, abych se zotavil.
                        Doporučila mi je sousedka , brala je také a kdykoli ji vidím, vždycky jí děkuji! Zapomněla jsem,
                        co je to vysoký krevní tlak a bolesti hlavy. Letos jsem dokonce sama bez pomoci dětí udělala
                        zahradu!</p><button class="reviews-list__more">Všechny komentáře...</button>
                </li>
                <li class="reviews-list__item ">
                    <picture><img class="reviews-list__img" src="images/m1.webp" alt="" width="87" height="87" />
                    </picture>
                    <h2 class="reviews-list__name">Norbert</h2>
                    <p class="reviews-list__city">Plzeň </p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">HYPERTON FORTE Po dalším záchvatu mě manželka přivedla a
                        doslova mě donutila, abych si ho vzal. Posledního půl roku jsem nemohl ani rychle chodit, natož
                        běhat! Okamžitě mi začalo silně bušit srdce a všechno se mi promítlo před očima. Všude jsem s
                        sebou nosil tonometr. Teď mám tlak jako třicátník! </p>
                    <button class="reviews-list__more">Všechny komentáře...</button>
                </li>
                <li class="reviews-list__item ">
                    <picture><img class="reviews-list__img" src="images/w2.webp" alt="" width="87" height="87" />
                    </picture>
                    <h2 class="reviews-list__name">Kitti</h2>
                    <p class="reviews-list__city">Olomouc</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">Dala jsem ho svému lékaři, aby si přečetl složení, on ho schválil a já
                        ho začala užívat. První věc, které jsem si všimla, je, že se mi zlepšil spánek, už se v noci
                        bezdůvodně nebudím. Pak jsem se dokázala ohnout, aniž by se mi točila hlava a padala jsem.
                        Přestala jsem ho brát úplně: k čemu to je, když se cítím dobře! </p> <button
                        class="reviews-list__more">Všechny komentáře...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/m2.webp" alt="" width="87" height="87" />
                    </picture>
                    <h2 class="reviews-list__name">Mikl&oacute;s</h2>
                    <p class="reviews-list__city">Pardubice</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">HYPERTON FORTE Moje první zkušenost byla neúspěšná. Koupil
                        jsem si ji z falešných webových stránek, provedl léčbu a nezaznamenal žádný účinek. Řekl jsem to
                        příteli, který mi řekl, abych si koupil pouze z místa, kde můžete zkontrolovat pravost výrobku.
                        HYPERTON FORTE Nyní si uvědomuji, že jsem poprvé dostal pouze falešný výrobek! Když
                        jsem provedl skutečnou léčbu , účinek byl pozoruhodný. </p><button
                        class="reviews-list__more">Všechny komentáře...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/w3.webp" alt="" width="87" height="87" />
                    </picture>
                    <h2 class="reviews-list__name">N&oacute;ra</h2>
                    <p class="reviews-list__city">Chomutov</p><span
                        class="reviews-list__rate reviews-list__rate--4"></span>
                    <p class="reviews-list__text">Mám cukrovku, která způsobuje vysoký krevní tlak, a nemohu užívat
                        mnoho léků kvůli riziku vedlejších účinků. HYPERTON FORTE Proto jsem si před jeho
                        koupí pečlivě prostudovala informace o něm a ptala se nejen na internetu, ale i u odborníků,
                        které znám. Od léčby uplynulo šest měsíců a cítím se skvěle! Můj krevní tlak už není problém.
                    </p><button class="reviews-list__more">Všechny komentáře...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/w4.webp" alt="" width="87" height="87" />
                    </picture>
                    <h2 class="reviews-list__name">Erika</h2>
                    <p class="reviews-list__city">Český Těšín</p><span
                        class="reviews-list__rate reviews-list__rate--4"></span>
                    <p class="reviews-list__text">Přesvědčilo mě přírodní složení, protože pilulky, které užívají lidé s
                        vysokým krevním tlakem, obsahují spoustu nečistot! K mému překvapení jsem kromě snížení krevního
                        tlaku zaznamenala ještě jeden účinek: zmizely mi bolesti žaludku, pravděpodobně proto, že
                        citronová tráva uvolňuje křeče v celém těle, nejen v cévách. Jsem ze svého nákupu nadšená! </p>
                    <button class="reviews-list__more">Všechny komentáře...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/m3.webp" alt="" width="87" height="87" />
                    </picture>
                    <h2 class="reviews-list__name">Carlo</h2>
                    <p class="reviews-list__city">Louny</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">Nemohl jsem si snížit cholesterol, držel jsem speciální dietu a
                        polykal hrst prášků: bez výsledku! Cítila jsem se mizerně, krevní tlak jsem měla vysoký už léta.
                        HYPERTON FORTE Koupila jsem si je spíš ze zoufalství než z čehokoli jiného. A zabralo
                        to! Po léčbě jsem měl cholesterol 4,8! Cítím se jako živý! </p><button
                        class="reviews-list__more">Všechny komentáře...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/w5.webp" alt="" width="87" height="87" />
                    </picture>
                    <h2 class="reviews-list__name">Magda</h2>
                    <p class="reviews-list__city">Karlovy Vary</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">Mám velmi stresující zaměstnání a jsem neustále ve stresu a obavách.
                        Hledala jsem produkt, který by byl nejen účinný, ale také se snadno používal. Během dne, kdy
                        pracuji, není užívání kapslí příliš praktické. HYPERTON FORTE Musím je užívat pouze
                        ráno a večer, což je výhodné. A účinek je přesně takový, jaký jsem chtěl: nyní dobře spím a
                        cítím se méně frustrovaný svými problémy. </p><button class="reviews-list__more">Všechny
                        komentáře...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/m4.webp" alt="" width="87" height="87" />
                    </picture>
                    <h2 class="reviews-list__name">Peter</h2>
                    <p class="reviews-list__city">Ústí nad Labem</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">Moje teta a babička zemřely na vysoký krevní tlak a nedávno tento
                        "tichý zabiják" zabil mého otce. HYPERTON FORTE V jednu chvíli byl naživu a v
                        pořádku, v další se zhroutil a zemřel na infarkt. Dodržoval jsem režim, který posiloval mé cévy
                        a stabilizoval můj krevní tlak. Domnívám se, že v mém případě není léčba normálního krevního
                        tlaku výstřelek, ale nutnost.</p><button class="reviews-list__more">Všechny
                        komentáře...</button>
                </li>
            </ul>
        </div>
    </section>
    <section class="use block bg animate-block ">
        <div class="container">
            <h2 class="title use__title ">HYPERTON FORTE <span class="text-under">Zaregistrujte se na
                    adrese</span> </h2>
            <ul class="use__list use-list">
                <li class="use-list__item ">
                    <h3 class="use-list__text">Užívejte 1 kapsli ráno a večer s jídlem.</h3>
                </li>
                <li class="use-list__item ">
                    <h3 class="use-list__text">Duração do curso - 2 meses</h3>
                </li>
                <li class="use-list__item ">
                    <h3 class="use-list__text">Ošetření lze v případě potřeby opakovat</h3>
                </li>
            </ul>
        </div>
    </section>
    <section class="order block--bottom animate-block"><span class="order__anchor" id="order"></span>
        <div class="container">
            <h2 class="title order__title ">HYPERTON FORTE <span class="text-under">objednávání z</span>
            </h2>
            <ul class="order__list order-list">
                <li class="order-list__item ">
                    <h3 class="order-list__title">Vyplňte formulář</h3>
                    <p class="order-list__text">Zadejte své jméno a telefonní číslo</p>
                </li>
                <li class="order-list__item ">
                    <h3 class="order-list__title">Reakce na výzvu k poskytnutí poradenství</h3>
                    <p class="order-list__text">Náš poradce zkontroluje údaje o vaší adrese a zodpoví případné dotazy.
                    </p>
                </li>
                <li class="order-list__item ">
                    <h3 class="order-list__title">Platba proti potvrzení</h3>
                    <p class="order-list__text">Nevyžaduje se žádný vklad</p>
                </li>
                <li class="order-list__item ">
                    <h3 class="order-list__title">Používejte podle pokynů</h3>
                    <p class="order-list__text">Hodně zdraví! </p>
                </li>
            </ul>
        </div>
        <div class="wave order__wave"></div>
    </section>
    <div class="promo-last animate-block ">
        <section class="promo block">
            <div class="container"><img class="promo__logo promo-logo " src="images/logo-white.png" alt="image"
                    width="532" height="55" />
                <h2 class="promo__title ">Krevní tlak se normalizuje!</h2>
                <ul class="promo__list promo-list ">
                    <li class="promo-list__item">Stabilní krevní tlak</li>
                    <li class="promo-list__item">Normální hladina cholesterolu</li>
                    <li class="promo-list__item">Jasné myšlení a dobrá paměť</li>
                    <li class="promo-list__item">Energie a vitalita</li>
                </ul>
                <div class="promo__pack promo-pack ">
                    <picture class="promo-pack__prod promo-pack-prod"><img class="promo-pack-prod__img pack-2"
                            src="images/prod.webp" alt="" />
                    </picture>
                </div>
                <form class="promo__form x_order_form form " action="#" method="post">
                    <?=$cms->params();?>

                    <div class="form__content">
                        <div class="form__top">
                            <h3 class="form__title">sleva <span class="text-accent fw500"><?=$cms->discount;?></span> pouze dnes:</h3>
                            <div class="price form__price">
                                <div class="price__part price__old"><span
                                        class="x_price_previous"><?=$cms->oldpr;?></span> <span
                                        class="x_currency">CZK</span></div>
                                <div class="price__part price__new text-accent"><span
                                        class="x_price_current"><?=$cms->price;?></span><span
                                        class="x_currency">CZK</span></div>
                            </div>
                        </div>
                        <div class="form__inputs"><label class="form__input-wrap form__input-wrap--name">
                                <input class="form__input" placeholder="Název" type="text" name="name" minlength="2"
                                    required="" /></label>

                            <label class="form__input-wrap form__input-wrap--phone">
                                <input class="form__input" placeholder="Telefon" minlength="7" type="tel" name="phone"
                                    required="" /></label>
                        </div>
                        <input type="hidden" name="country" value="<?=$cms->country;?>" />

                        <button class="btn form__btn" type="submit"><span class="btn__text">Objednávka</span></button>
                    </div>
                    <p class="form__note">Testováno v Německu</p>

                </form>
            </div>
        </section>
        <div class="runline promo-last__runline ">
            <div class="runline__content">
                <div class="runline__item">
                    Prodej -50% </div>
                <div class="runline__item">
                    Prodej -50% </div>
                <div class="runline__item">
                    Prodej -50% </div>
                <div class="runline__item">
                    Prodej -50% </div>
                <div class="runline__item">
                    Prodej -50% </div>
            </div>
        </div>
        <footer class="footer ">
            &copy; <span class="date-0" data-format="year"></span>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="js/slick.min.js"></script>
    <?php $cms->footer(); ?>
</body>

</html>