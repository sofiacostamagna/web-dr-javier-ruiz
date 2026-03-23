<?php
/**
 * Template Name: Salud Sexual
 * Página especialidad: Salud Sexual
 */
get_header();
?>

<main id="main-content" class="sp-page">

    <!-- ── HERO ── -->
    <section class="sp-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/consultorio-2.jpg');">
        <div class="sp-hero-overlay"></div>
        <div class="sp-hero-content">
            <h1 class="sp-hero-title">SALUD SEXUAL</h1>
            <p class="sp-hero-location">EN MADRID, BARCELONA &amp; REUS</p>
            <div class="sp-hero-btns">
                <a href="#contacto" class="sp-btn sp-btn-outline">Contactar</a>
                <a href="https://wa.me/34607198560" class="sp-btn sp-btn-solid" target="_blank">Reservar Consulta</a>
            </div>
        </div>
    </section>

    <!-- ── SUB-NAV ── -->
    <nav class="sp-subnav">
        <div class="container sp-subnav-inner">
            <a href="#seccion-a" class="sp-subnav-link">Problemas de Erección →</a>
            <a href="#seccion-b" class="sp-subnav-link">Terapia Hormonal →</a>
            <a href="#seccion-c" class="sp-subnav-link">Eyaculación →</a>
            <a href="#contacto" class="sp-subnav-link">Consulta →</a>
        </div>
    </nav>

    <!-- ── INTRO ── -->
    <section class="sp-intro">
        <div class="container sp-narrow">
            <h2 class="sp-big-title">Salud Sexual</h2>
            <p class="sp-big-sub">EL SEXO ES UN MARCADOR DE SALUD</p>
            <div class="sp-body-text">
                <p>Sabes bien que si te levantas con una erección matutina el día va a ser mejor. Por eso, cuando eso no ocurre, cuando la erección no se produce, no esperes a que se solucione solo. Ante cualquier problema sexual es muy importante consultar. No lo dejes para mañana.</p>
                <p>Piensa que detrás de un problema sexual puede esconderse una alteración de tu salud general. Un problema de erección puede ser un aviso de un daño arterial que afecte a la pared de todas las arterias del cuerpo. Un varón con malas erecciones puede tener un <strong>25% de posibilidades de tener un episodio circulatorio grave</strong> (Ictus, Angina de pecho, Infarto de Miocardio) en los 2 años siguientes y un 30% de tener una diabetes silenciosa.</p>
            </div>
        </div>
        <div class="sp-stat-strip">
            <div class="container">
                <p class="sp-stat-text">La erección es un termómetro de tu salud cardiovascular y metabólica</p>
            </div>
        </div>
    </section>

    <!-- ── SECCIÓN A: Problemas de erección ── -->
    <section class="sp-treatment" id="seccion-a">
        <div class="sp-section-header sp-section-header--blue">
            <div class="container">
                <span class="sp-section-tag">01 — Disfunción Eréctil &amp; Alteraciones</span>
                <h2>Problemas de <em>Erección</em></h2>
            </div>
        </div>
        <div class="container sp-section-body">
            <div class="sp-section-intro">
                <p>Tener problemas de erección puede causar estrés y afectar la confianza en uno mismo, además de causar dificultades en la relación de pareja. Los problemas para lograr o mantener una erección también pueden ser un signo de una enfermedad subyacente y un factor de riesgo para enfermedades cardíacas.</p>
                <p>Si te preocupa la disfunción eréctil, habla conmigo, incluso si te incomoda. Te escucharé y te apoyaré. A veces, el tratamiento de una afección subyacente puede solucionar la disfunción eréctil por completo.</p>
            </div>
            <div class="sp-videos-grid">
                <?php $videos_a = ['Disfunción eréctil', 'Pene curvo', 'Fimosis', 'Fractura de pene'];
                foreach ($videos_a as $titulo) : ?>
                <div class="sp-video-card">
                    <div class="sp-video-thumb">
                        <button class="sp-play-btn" aria-label="Reproducir">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </button>
                        <span class="sp-video-dur">2 min</span>
                    </div>
                    <p class="sp-video-label"><?php echo $titulo; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ── SECCIÓN B: Terapia Hormonal ── -->
    <section class="sp-treatment" id="seccion-b">
        <div class="sp-section-header sp-section-header--warm">
            <div class="container">
                <span class="sp-section-tag">02 — Testosterona &amp; Longevidad</span>
                <h2>Terapia Hormonal <em>de Reemplazo</em></h2>
            </div>
        </div>
        <div class="container sp-section-body">
            <div class="sp-section-intro">
                <p>La testosterona es la hormona sexual por excelencia. Regula el deseo sexual, la calidad de las erecciones, la recuperación entre erecciones y la cantidad de eyaculado.</p>
                <p>Además de hormona sexual, la testosterona es una <strong>hormona constitucional</strong>: regula la masa muscular, el rendimiento físico e intelectual, la memoria, el buen humor y la calidad del sueño. <strong>¡No esperes a tener déficit!</strong> Podemos hacer prevención para que nunca te falte testosterona.</p>
            </div>
            <div class="sp-videos-grid sp-videos-grid--single">
                <div class="sp-video-card sp-video-card--large">
                    <div class="sp-video-thumb">
                        <button class="sp-play-btn sp-play-btn--large" aria-label="Reproducir">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </button>
                        <span class="sp-video-dur">2 min</span>
                    </div>
                    <p class="sp-video-label">Terapia de Testosterona</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── SECCIÓN C: Eyaculación ── -->
    <section class="sp-treatment" id="seccion-c">
        <div class="sp-section-header sp-section-header--dark">
            <div class="container">
                <span class="sp-section-tag">03 — Alteraciones Eyaculatorias</span>
                <h2>Problemas de <em>Eyaculación</em></h2>
            </div>
        </div>
        <div class="container sp-section-body">
            <div class="sp-section-intro">
                <p>Las alteraciones de la eyaculación son un problema más frecuente de lo que parece, que puede ocasionar problemas psicológicos que repercuten en la calidad de vida del afectado y de sus parejas.</p>
                <p>Dada la complejidad del control de la función eyaculatoria, las causas pueden ser múltiples y por lo tanto es necesario un abordaje integral del bienestar biopsicosocial del paciente para lograr un manejo adecuado de esta afección.</p>
            </div>
            <div class="sp-videos-grid">
                <?php $videos_c = ['Eyaculación precoz', 'Eyaculación retardada', 'Sangre en la eyaculación', 'Alteraciones del orgasmo'];
                foreach ($videos_c as $titulo) : ?>
                <div class="sp-video-card">
                    <div class="sp-video-thumb">
                        <button class="sp-play-btn" aria-label="Reproducir">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </button>
                        <span class="sp-video-dur">2 min</span>
                    </div>
                    <p class="sp-video-label"><?php echo $titulo; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="sp-cta" id="contacto" style="position: relative; overflow: hidden;">
        <div class="sp-cta-marble-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/marmol.jpg');"></div>
        <div class="container sp-narrow sp-cta-inner" style="position: relative; z-index: 2;">
            <span class="eyebrow-text">Consulta sin compromiso</span>
            <h2 class="sp-big-title">¿Hablamos?</h2>
            <p>Si algo te preocupa, es el momento de actuar. Estoy aquí para escucharte con total discreción.</p>
            <div class="sp-cta-btns">
                <a href="<?php echo home_url('/contacto/'); ?>" class="btn-luxe btn-gold-fill">Solicitar Consulta</a>
                <a href="https://wa.me/34607198560" class="btn-luxe btn-transparent" target="_blank">WhatsApp directo</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
