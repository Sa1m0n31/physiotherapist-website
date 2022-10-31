<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zdrowie
 */

get_header();
?>

<main class="hero">
    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/tlo.png"; ?>" alt="ewa-gapinska" />

    <div class="hero__content">
        <h1 class="hero__h1">
            Gabinet Rehabilitacyjny <span class="red">Zdrowie</span>
        </h1>
        <h2 class="hero__h2">
            Ewa Gapińska
        </h2>
        <h3 class="hero__h3 d-desktop">
            Umów się na wizytę
        </h3>
        <h4 class="hero__h4 d-desktop">
            tel. 600 114 278
        </h4>
        <div class="hero__buttons center d-desktop">
            <a href="#kontakt" class="hero__btn hero__btn--red">
                Kontakt z gabinetem
            </a>
            <a href="<?php echo get_page_link( get_page_by_title( 'Oferta' )->ID ); ?>" class="hero__btn hero__btn--black">
                Nasza oferta
            </a>
        </div>
    </div>
</main>

<div class="d-mobile hero--mobile">
    <h3 class="hero__h3">
        Umów się na wizytę
    </h3>
    <h4 class="hero__h4">
        tel. 600 114 278
    </h4>
    <div class="hero__buttons center">
        <a href="#kontakt" class="hero__btn hero__btn--red">
            Kontakt z gabinetem
        </a>
        <a href="<?php echo get_page_link( get_page_by_title( 'Oferta' )->ID ); ?>" class="hero__btn hero__btn--black">
            Nasza oferta
        </a>
    </div>
</div>

<div class="w flex section section--1" id="o-mnie">
    <div class="section__images">
        <img class="img img--1" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/foto1.png"; ?>" alt="ewa-gapińska" />
        <img class="img img--2" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/foto2.png"; ?>" alt="ewa-gapińska" />
    </div>
    <div class="section__content">
        <h2 class="section__header">
            Usługi Rehabilitacyjne "Zdrowie" Ewa Gapińska
        </h2>
        <article class="section__text">
            <p>
                Na potrzeby i wymogi Pacjentów stworzyłam w pełni profesjonalny i wyposażony w nowoczesne
                urządzenia rehabilitacyjne gabinet, w którym pomagam czuć się wyjątkowo i co najważniejsze w
                pełni zdrowo.
            </p>
            <p>
                Pasja do rehabilitacji pozwoliła mi spełniać moje marzenia, a zdobyte kwalifikacje i doświadczenie
                realnie pozwalają pomagać ludziom w wielu schorzeniach. „Dla mnie nie ma rzeczy niemożliwych
                są tylko trudne do wykonania” tym mottem kieruję się podejmując się skomplikowanych zabiegów
                rehabilitacyjnych.
            </p>
            <p>
                W swojej pracy korzystam z najnowszych i najbardziej skutecznych metod i technik stosowanych we
                współczesnej rehabilitacji przez co Pacjenci zawsze otrzymają bardzo wysoką jakość usług. Jestem
                absolwentką wielu kursów rehabilitacyjnych, ale największe umiejętności zdobyłam praktykując we
                współpracy z licznymi przychodniami rehabilitacyjnymi. Moim głównym zainteresowaniem są zaburzenia
                mięśniowo-powięziowe w ciele człowieka.
            </p>
            <h3 class="section__text__header">
                Ukończone kursy
            </h3>
            <ul class="section__text__list">
                <li>Fascial Manipulation lvl 1, lvl 2, lvl 3</li>
                <li>Fizjoterapia w nietrzymania moczu i stolca oraz w obniżeniu narządów miednicy mniejszej</li>
                <li>Warsztaty rozwijające Fascial Manipulation po 1-2 lvl</li>
                <li>Igłoterapia sucha punktów spustowych. Moduł podstawowy i zaawansowany - Karol Szapel</li>
                <li>Łańcuchy mięśniowe i stawowe G.D.S. 1-7 moduł</li>
                <li>Masaż tkanek głębokich i rozluźnienie mięśniowo-powięziowe z anatomią palpacyjną</li>
                <li>Diagnozowanie i leczenie tkanek miękkich</li>
                <li>Kinesiology taping</li>
                <li>Warsztaty: "Bark nie musi być skomplikowany" - dr Ryszard Biernat</li>
            </ul>
        </article>
    </div>
</div>

<div class="w section section--2">
    <h3 class="section__header">
        Oferta usług rehabilitacyjnych
    </h3>
    <div class="flex offer">
        <div class="offer__item">
            <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/physical-therapy.svg"; ?>" alt="rehabilitacja" />
            <h4 class="offer__item__header">
                Rehabilitacja
            </h4>
            <p class="offer__item__text">
                Szeroki zakres usług rehabilitacyjnych, obejmujący m.in. diagnozę oraz dobranie prawidłowych działań prowadzących do poprawy zdrowia.
            </p>
            <a href="<?php echo get_page_link( get_page_by_title( 'Rehabilitacja' )->ID ); ?>" class="offer__item__btn">
                Dowiedz się więcej
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow.svg"; ?>" alt="więcej" />
            </a>
        </div>
        <div class="offer__item">
            <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/masaze.svg"; ?>" alt="rehabilitacja" />
            <h4 class="offer__item__header">
                Masaże
            </h4>
            <p class="offer__item__text">
                Oferuję kilka typów masażów, dostosowanych pod pacjenta i jego dolegliwości lub cele, np. regenerację i odpowiednie przygotowanie do ćwiczeń.
            </p>
            <a href="<?php echo get_page_link( get_page_by_title( 'Masaże' )->ID ); ?>" class="offer__item__btn">
                Dowiedz się więcej
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow.svg"; ?>" alt="więcej" />
            </a>
        </div>
        <div class="offer__item">
            <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/cwiczenia.svg"; ?>" alt="rehabilitacja" />
            <h4 class="offer__item__header">
                Ćwiczenia
            </h4>
            <p class="offer__item__text">
                Podstawowym rodzaj zabiegów fizjoterapeutycznych. Ich wykonywanie ma prowadzić do tego, by pacjent odzyskał pełnię sprawności.
            </p>
            <a href="<?php echo get_page_link( get_page_by_title( 'Ćwiczenia' )->ID ); ?>" class="offer__item__btn">
                Dowiedz się więcej
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow.svg"; ?>" alt="więcej" />
            </a>
        </div>
        <div class="offer__item">
            <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/regeneracja.svg"; ?>" alt="rehabilitacja" />
            <h4 class="offer__item__header">
                Regeneracja
            </h4>
            <p class="offer__item__text">
                Regeneracja to jeden z podstawowych procesów, zachodzących w ciele. Potrzebujemy nieustannie nowych sił i energii do życia.
            </p>
            <a href="<?php echo get_page_link( get_page_by_title( 'Regeneracja' )->ID ); ?>" class="offer__item__btn">
                Dowiedz się więcej
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow.svg"; ?>" alt="więcej" />
            </a>
        </div>
    </div>
</div>

<div class="w section section--img d-desktop">
    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/zaproszenie.png"; ?>" alt="zaprszam" />
    <h3 class="section__mainHeader d-desktop">
        Zapraszam Ciebie do mojego Gabinetu Zdrowie. Sam przekonasz się o skuteczności moich zabiegów.
    </h3>
</div>

<div class="w section section--opinions" id="opinie">
    <h3 class="section__header">
        Opinie pacjentów
    </h3>
    <div class="opinions flex">
        <div class="opinions__item">
            <p class="opinions__item__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <span class="opinions__item__author">
                    Jan Kowalski
                </span>
        </div>
        <div class="opinions__item">
            <p class="opinions__item__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <span class="opinions__item__author">
                    Jan Kowalski
                </span>
        </div>
        <div class="opinions__item">
            <p class="opinions__item__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <span class="opinions__item__author">
                    Jan Kowalski
                </span>
        </div>
        <div class="opinions__item">
            <p class="opinions__item__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <span class="opinions__item__author">
                    Jan Kowalski
                </span>
        </div>
    </div>
</div>

<?php
get_footer();
?>
