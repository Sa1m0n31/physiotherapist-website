<?php
get_header();
?>

<main class="pageMain w">
    <h3 class="section__header">
        Oferta usług rehabilitacyjnych
    </h3>
    <p class="pageMain__subheader">
        Poniżej znajdują się szczegółowe opisy działań, które wykonuję dla swoich pacjentów. Chcę pomagać Tobie czuć się i być zdrowym, dlatego przygotowałam szeroki zakres usług rehabilitacyjnych i terapeutycznych.
    </p>
    <p class="pageMain__subheader">
        Kliknij w poszczególną pozycję, aby przejść do opisu oferty.
    </p>

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
</main>

<?php
get_footer();
?>
