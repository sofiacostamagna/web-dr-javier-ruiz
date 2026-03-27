<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Barra de progreso de lectura -->
<div class="scroll-progress" id="scroll-progress"></div>

<header class="site-header" id="site-header">
    <div class="container header-inner">

        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
                <span class="logo-pre">Andrólogo</span>
                <span class="logo-name">Javier Ruiz Romero</span>
                <span class="logo-tagline">Madrid · Barcelona · Reus</span>
            </a>
        </div>

        <!-- Nav Desktop -->
        <nav class="main-nav" aria-label="Navegación principal">
            <ul class="nav-list">

                <!-- SALUD SEXUAL → subpáginas individuales -->
                <li class="has-dropdown">
                    <a href="<?php echo home_url('/salud-sexual/'); ?>">Salud Sexual</a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/salud-sexual/#seccion-a'); ?>">Problemas de erección</a></li>
                        <li><a href="<?php echo home_url('/salud-sexual/#seccion-b'); ?>">Terapia hormonal</a></li>
                        <li><a href="<?php echo home_url('/salud-sexual/#seccion-c'); ?>">Problemas de eyaculación</a></li>
                    </ul>
                </li>

                <!-- FERTILIDAD → subpáginas individuales -->
                <li class="has-dropdown">
                    <a href="<?php echo home_url('/fertilidad/'); ?>">Fertilidad</a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/fertilidad/#estudio'); ?>">Estudio de fertilidad</a></li>
                        <li><a href="<?php echo home_url('/fertilidad/#varicocele'); ?>">Varicocele</a></li>
                        <li><a href="<?php echo home_url('/fertilidad/#vasovasostomia'); ?>">Vasovasostomía</a></li>
                        <li><a href="<?php echo home_url('/fertilidad/#recuperacion'); ?>">Recuperación testicular</a></li>
                        <li><a href="<?php echo home_url('/fertilidad/#vasectomia'); ?>">Vasectomía sin bisturí</a></li>
                    </ul>
                </li>

                <!-- ANDROESTÉTICA → subpáginas individuales -->
                <li class="has-dropdown">
                    <a href="<?php echo home_url('/androestetica/'); ?>">Androestética</a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/androestetica/#estetica-pene'); ?>">Estética del pene</a></li>
                        <li><a href="<?php echo home_url('/androestetica/#estetica-escroto'); ?>">Estética del escroto</a></li>
                        <li><a href="<?php echo home_url('/androestetica/#wellaging'); ?>">Well Aging</a></li>
                    </ul>
                </li>

                <!-- SUEROTERAPIA → anclas dentro de la misma página -->
                <li class="has-dropdown">
                    <a href="<?php echo home_url('/sueroterapia/'); ?>">Sueroterapia</a>
                    <ul class="dropdown dropdown-wide">
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Well Aging</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Vigor Booster</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Beauty</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Weight Loss</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Balance</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Performance</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Intelect</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Fertility</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Hair Boost</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Rescue</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Immunity</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo home_url('/conoceme/'); ?>">Conóceme</a></li>
                <li><a href="<?php echo home_url('/blog/'); ?>">Blog</a></li>

            </ul>
        </nav>

        <!-- CTA + Hamburger -->
        <div class="header-actions">
            <a href="<?php echo home_url('/contacto/'); ?>" class="nav-cta">Contacto</a>
            <button type="button" class="hamburger" id="hamburger" aria-label="Abrir menú" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </div>
</header>

<!-- Overlay móvil -->
<div class="mobile-overlay" id="mobile-overlay"></div>

<!-- Menú móvil -->
<div class="mobile-menu" id="mobile-menu" aria-hidden="true">

    <button type="button" class="mobile-close" id="mobile-close" aria-label="Cerrar menú">
        <span></span>
        <span></span>
    </button>

    <nav class="mobile-nav">
        <ul>
            <li><a href="<?php echo home_url('/'); ?>">Inicio</a></li>

            <li class="mobile-has-sub">
                <button type="button" class="mobile-sub-toggle">Salud Sexual <span class="mobile-arrow">+</span></button>
                <ul class="mobile-sub">
                    <li><a href="<?php echo home_url('/salud-sexual/#seccion-a'); ?>">Problemas de erección</a></li>
                    <li><a href="<?php echo home_url('/salud-sexual/#seccion-b'); ?>">Terapia hormonal</a></li>
                    <li><a href="<?php echo home_url('/salud-sexual/#seccion-c'); ?>">Problemas de eyaculación</a></li>
                </ul>
            </li>

            <li class="mobile-has-sub">
                <button type="button" class="mobile-sub-toggle">Fertilidad <span class="mobile-arrow">+</span></button>
                <ul class="mobile-sub">
                    <li><a href="<?php echo home_url('/fertilidad/#estudio'); ?>">Estudio de fertilidad</a></li>
                    <li><a href="<?php echo home_url('/fertilidad/#varicocele'); ?>">Varicocele</a></li>
                    <li><a href="<?php echo home_url('/fertilidad/#vasovasostomia'); ?>">Vasovasostomía</a></li>
                    <li><a href="<?php echo home_url('/fertilidad/#recuperacion'); ?>">Recuperación testicular</a></li>
                    <li><a href="<?php echo home_url('/fertilidad/#vasectomia'); ?>">Vasectomía sin bisturí</a></li>
                </ul>
            </li>

            <li class="mobile-has-sub">
                <button type="button" class="mobile-sub-toggle">Androestética <span class="mobile-arrow">+</span></button>
                <ul class="mobile-sub">
                    <li><a href="<?php echo home_url('/androestetica/#estetica-pene'); ?>">Estética del pene</a></li>
                    <li><a href="<?php echo home_url('/androestetica/#estetica-escroto'); ?>">Estética del escroto</a></li>
                    <li><a href="<?php echo home_url('/androestetica/#wellaging'); ?>">Well Aging</a></li>
                </ul>
            </li>

            <li class="mobile-has-sub">
                <button type="button" class="mobile-sub-toggle">Sueroterapia <span class="mobile-arrow">+</span></button>
                <ul class="mobile-sub">
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Well Aging</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Vigor Booster</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Beauty</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Weight Loss</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Balance</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Performance</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Intelect</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Fertility</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Hair Boost</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Rescue</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/#cocktails'); ?>">Immunity</a></li>
                </ul>
            </li>

            <li><a href="<?php echo home_url('/conoceme/'); ?>">Conóceme</a></li>
            <li><a href="<?php echo home_url('/blog/'); ?>">Blog</a></li>
            <li><a href="<?php echo home_url('/contacto/'); ?>" class="mobile-cta">Contacto</a></li>
        </ul>
    </nav>

</div>

<script>
// Scroll a ancla con offset del header
document.addEventListener('DOMContentLoaded', function() {
    var hash = window.location.hash;
    if (hash) {
        setTimeout(function() {
            var el = document.querySelector(hash);
            if (el) {
                var headerH = document.getElementById('site-header') ? document.getElementById('site-header').offsetHeight : 80;
                var top = el.getBoundingClientRect().top + window.scrollY - headerH - 20;
                window.scrollTo({ top: top, behavior: 'smooth' });
            }
        }, 500);
    }
});
</script>