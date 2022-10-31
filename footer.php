<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zdrowie
 */

?>

<div class="w section section--contact" id="kontakt">
    <h3 class="section__header">
        Skontaktuj się i umów na wizytę
    </h3>
    <div id="map">
        <iframe width="100%" height="300px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/pl/map/mapa-bez-nazwy_827385?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
    </div>
    <div class="contact flex">
        <div class="contact__item">
            <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/location.svg"; ?>" alt="lokalizacja" />
            <span class="contact__item__text">
                    ul. Janusza Korczaka 2A/1<br/>
                    13-300 Nowe Miasto Lubawskie
                </span>
        </div>
        <a class="contact__item" href="tel:+48500114278">
            <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/phone.svg"; ?>" alt="lokalizacja" />
            <span class="contact__item__text">
                    tel. 500 114 278
                </span>
        </a>
        <a class="contact__item" href="mailto:kontakt@fizjo.pl">
            <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/mail.svg"; ?>" alt="lokalizacja" />
            <span class="contact__item__text">
                    kontakt@fizjo.pl
                </span>
        </a>
    </div>
</div>

<footer class="w flex footer">
    <div class="footer__main">
        <a href="<?php echo home_url(); ?>" class="footer__logo">
            <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo-footer.png"; ?>" alt="logo" />
        </a>
        <div class="footer__desc">
            <h4 class="footer__desc__header">
                Usługi Rehabilitacyjne "Zdrowie"
            </h4>
            <p class="footer__desc__text">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            </p>
            <div class="footer__desc__socialMedia">
                <a href="https://facebook.com"
                   rel="noreferrer"
                   target="_blank"
                   class="footer__desc__socialMedia__item">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/facebook.svg"; ?>" alt="facebook" />
                </a>
                <a href="https://instagram.com"
                   rel="noreferrer"
                   target="_blank"
                   class="footer__desc__socialMedia__item">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/instagram.svg"; ?>" alt="facebook" />
                </a>
            </div>
        </div>
    </div>

    <div class="footer__cols">
        <div class="footer__col">
            <h5 class="footer__col__header">
                Oferta
            </h5>
            <a class="footer__col__item" href="<?php echo get_page_link( get_page_by_title( 'Rehabilitacja' )->ID ); ?>">
                Rehabilitacja
            </a>
            <a class="footer__col__item" href="<?php echo get_page_link( get_page_by_title( 'Masaże' )->ID ); ?>">
                Masaże
            </a>
            <a class="footer__col__item" href="<?php echo get_page_link( get_page_by_title( 'Ćwiczenia' )->ID ); ?>">
                Ćwiczenia
            </a>
            <a class="footer__col__item" href="<?php echo get_page_link( get_page_by_title( 'Regeneracja' )->ID ); ?>">
                Regeneracja
            </a>
        </div>
        <div class="footer__col">
            <h5 class="footer__col__header">
                Mapa strony
            </h5>
            <a class="footer__col__item" href="<?php echo home_url(); ?>">
                Strona główna
            </a>
            <a class="footer__col__item" href="<?php echo get_page_link( get_page_by_title( 'Oferta' )->ID ); ?>">
                Oferta
            </a>
            <a class="footer__col__item" href="<?php echo home_url(); ?>#opinie">
                Opinie
            </a>
            <a class="footer__col__item" href="<?php echo home_url(); ?>#kontakt">
                Kontakt
            </a>
        </div>
        <div class="footer__col">
            <h5 class="footer__col__header">
                Dane kontaktowe
            </h5>
            <p class="footer__col__item">
                <span class="bold">
                    Usługi rehabilitacyjne "Zdrowie"<br/>
                    Rwa Gapińska
                </span><br/>
                <span class="bold">
                    tel.
                </span>
                500 114 278<br/>
                <span class="bold">
                    mail:
                </span>
                kontakt@fizjo.pl<br/>
                ul. Janusza Korczaka 2A/1<br/>
                13-300 Nowe Miasto Lubawskie<br/>
                <span class="bold">
                    NIP:
                </span>
                8771398921<br/>
                <span class="bold">
                    REGON:
                </span>
                280152840
            </p>
        </div>
    </div>
</footer>
<aside class="w aside">
    <h6 class="aside__header">
        © 2022 Usługi Rehabilitacyjne "Zdrowie" Ewa Gapińska.
    </h6>
</aside>
</div>

</body>
</html>
