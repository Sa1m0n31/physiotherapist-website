<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zdrowie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
    <header class="siteHeader">
        <div class="stickyButton d-desktop">
            <span>Skontaktuj się!</span>
        </div>

        <div class="stickyContact d-desktop center">
            <div class="stickyContact__content">
                <h4 class="stickyContact__header">
                    Usługi Rehabilitacyjne "Zdrowie" Ewa Gapińska
                </h4>
                <div class="stickyContact__item">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/location.svg"; ?>" alt="lokalizacja" />
                    <span class="stickyContact__item__content">
                    ul. Janusza Korczaka 2A/1<br/>
                    13-300 Nowe Miasto Lubawskie
                </span>
                </div>
                <h5 class="stickyContact__subheader">
                    Zadzwoń i umów się na wizytę
                </h5>
                <div class="stickyContact__item">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/phone.svg"; ?>" alt="lokalizacja" />
                    <span class="stickyContact__item__content">
                    tel. 500 114 278
                </span>
                </div>
            </div>
        </div>

        <div class="w flex">
            <a href="./index.html" class="siteHeader__logo">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo.png"; ?>" alt="logo" />
            </a>
            <div class="siteHeader__menu flex d-desktop">
                <a href="./index.html" class="siteHeader__menu__item">
                    Strona główna
                </a>
                <a href="#o-mnie" class="siteHeader__menu__item">
                    O mnie
                </a>
                <a href="./index.html" class="siteHeader__menu__item">
                    Oferta usług rehabilitacyjnych
                </a>
                <a href="./index.html" class="siteHeader__menu__item">
                    Kontakt
                </a>
            </div>
            <button class="siteHeader__btn d-mobile" onclick="openMenu()">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/menu.svg"; ?>" alt="menu" />
            </button>
        </div>

        <div class="mobileMenu d-mobile">
            <button class="mobileMenu__closeBtn" onclick="closeMenu()">
                &times;
            </button>

            <a href="./index.html" class="footer__logo">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo-footer.png"; ?>" alt="logo" />
            </a>

            <menu class="mobileMenu__menu">
                <a href="./index.html" class="siteHeader__menu__item">
                    Strona główna
                </a>
                <a href="#o-mnie" class="siteHeader__menu__item">
                    O mnie
                </a>
                <a href="./index.html" class="siteHeader__menu__item">
                    Oferta
                </a>
                <a href="./index.html" class="siteHeader__menu__item">
                    Kontakt
                </a>
            </menu>
        </div>
    </header>
