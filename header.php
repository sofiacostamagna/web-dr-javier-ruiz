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

                <li class="has-dropdown">
                    <a href="<?php echo home_url('/salud-sexual/'); ?>">Salud Sexual</a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/salud-sexual/problemas-de-ereccion/'); ?>">Problemas de erección</a></li>
                        <li><a href="<?php echo home_url('/salud-sexual/terapia-hormonal/'); ?>">Terapia hormonal</a></li>
                        <li><a href="<?php echo home_url('/salud-sexual/problemas-de-eyaculacion/'); ?>">Problemas de eyaculación</a></li>
                    </ul>
                </li>

                <li class="has-dropdown">
                    <a href="<?php echo home_url('/fertilidad-masculina/'); ?>">Fertilidad</a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/fertilidad-masculina/estudio-fertilidad/'); ?>">Estudio de fertilidad</a></li>
                        <li><a href="<?php echo home_url('/fertilidad-masculina/varicocele/'); ?>">Varicocele</a></li>
                        <li><a href="<?php echo home_url('/fertilidad-masculina/vasovasostomia/'); ?>">Vasovasostomía</a></li>
                        <li><a href="<?php echo home_url('/fertilidad-masculina/recuperacion-testicular/'); ?>">Recuperación testicular</a></li>
                        <li><a href="<?php echo home_url('/fertilidad-masculina/vasectomia/'); ?>">Vasectomía sin bisturí</a></li>
                    </ul>
                </li>

                <li class="has-dropdown">
                    <a href="<?php echo home_url('/androestetica/'); ?>">Androestética</a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/androestetica/estetica-pene/'); ?>">Estética del pene</a></li>
                        <li><a href="<?php echo home_url('/androestetica/estetica-escroto/'); ?>">Estética del escroto</a></li>
                        <li><a href="<?php echo home_url('/androestetica/well-aging/'); ?>">Well Aging</a></li>
                    </ul>
                </li>

                <li class="has-dropdown">
                    <a href="<?php echo home_url('/sueroterapia/'); ?>">Sueroterapia</a>
                    <ul class="dropdown dropdown-wide">
                        <li><a href="<?php echo home_url('/sueroterapia/well-aging/'); ?>">Well Aging</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/vigor-booster/'); ?>">Vigor Booster</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/beauty/'); ?>">Beauty</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/weight-loss/'); ?>">Weight Loss</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/balance/'); ?>">Balance</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/performance/'); ?>">Performance</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/intelect/'); ?>">Intelect</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/fertility/'); ?>">Fertility</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/hair-boost/'); ?>">Hair Boost</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/rescue/'); ?>">Rescue</a></li>
                        <li><a href="<?php echo home_url('/sueroterapia/immunity/'); ?>">Immunity</a></li>
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
                    <li><a href="<?php echo home_url('/salud-sexual/problemas-de-ereccion/'); ?>">Problemas de erección</a></li>
                    <li><a href="<?php echo home_url('/salud-sexual/terapia-hormonal/'); ?>">Terapia hormonal</a></li>
                    <li><a href="<?php echo home_url('/salud-sexual/problemas-de-eyaculacion/'); ?>">Problemas de eyaculación</a></li>
                </ul>
            </li>

            <li class="mobile-has-sub">
                <button type="button" class="mobile-sub-toggle">Fertilidad <span class="mobile-arrow">+</span></button>
                <ul class="mobile-sub">
                    <li><a href="<?php echo home_url('/fertilidad-masculina/estudio-fertilidad/'); ?>">Estudio de fertilidad</a></li>
                    <li><a href="<?php echo home_url('/fertilidad-masculina/varicocele/'); ?>">Varicocele</a></li>
                    <li><a href="<?php echo home_url('/fertilidad-masculina/vasovasostomia/'); ?>">Vasovasostomía</a></li>
                    <li><a href="<?php echo home_url('/fertilidad-masculina/recuperacion-testicular/'); ?>">Recuperación testicular</a></li>
                    <li><a href="<?php echo home_url('/fertilidad-masculina/vasectomia/'); ?>">Vasectomía sin bisturí</a></li>
                </ul>
            </li>

            <li class="mobile-has-sub">
                <button type="button" class="mobile-sub-toggle">Androestética <span class="mobile-arrow">+</span></button>
                <ul class="mobile-sub">
                    <li><a href="<?php echo home_url('/androestetica/estetica-pene/'); ?>">Estética del pene</a></li>
                    <li><a href="<?php echo home_url('/androestetica/estetica-escroto/'); ?>">Estética del escroto</a></li>
                    <li><a href="<?php echo home_url('/androestetica/well-aging/'); ?>">Well Aging</a></li>
                </ul>
            </li>

            <li class="mobile-has-sub">
                <button type="button" class="mobile-sub-toggle">Sueroterapia <span class="mobile-arrow">+</span></button>
                <ul class="mobile-sub">
                    <li><a href="<?php echo home_url('/sueroterapia/well-aging/'); ?>">Well Aging</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/vigor-booster/'); ?>">Vigor Booster</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/beauty/'); ?>">Beauty</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/weight-loss/'); ?>">Weight Loss</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/balance/'); ?>">Balance</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/performance/'); ?>">Performance</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/intelect/'); ?>">Intelect</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/fertility/'); ?>">Fertility</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/hair-boost/'); ?>">Hair Boost</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/rescue/'); ?>">Rescue</a></li>
                    <li><a href="<?php echo home_url('/sueroterapia/immunity/'); ?>">Immunity</a></li>
                </ul>
            </li>

            <li><a href="<?php echo home_url('/conoceme/'); ?>">Conóceme</a></li>
            <li><a href="<?php echo home_url('/blog/'); ?>">Blog</a></li>
            <li><a href="<?php echo home_url('/contacto/'); ?>" class="mobile-cta">Contacto</a></li>
        </ul>
    </nav>

</div>
