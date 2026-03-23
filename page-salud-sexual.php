<?php
/**
 * Template Name: Salud Sexual
 * Página especialidad: Salud Sexual
 */
get_header();
?>

<main id="main-content" class="specialty-page">

    <!-- ── Hero de especialidad ── -->
    <section class="specialty-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/pexels-mikhail-nilov-7469476.jpg');">
        <div class="specialty-hero-overlay"></div>
        <div class="container specialty-hero-content">
            <div class="specialty-eyebrow">
                <span class="gold-dash"></span>
                <span class="eyebrow-text">Andrología Avanzada</span>
            </div>
            <h1>Salud<br><em>Sexual</em></h1>
            <p class="specialty-hero-lead">El sexo es un marcador de Salud — y en el hombre tiene un termómetro: la erección.</p>
        </div>
    </section>

    <!-- ── Introducción ── -->
    <section class="specialty-intro">
        <div class="container">
            <div class="specialty-intro-grid">
                <div class="specialty-intro-text">
                    <p class="specialty-lead-paragraph">
                        Sabes bien que si te levantas con una erección matutina el día va a ser mejor. Por eso, cuando eso no ocurre, cuando la erección no se produce, no esperes a que se solucione solo. Ante cualquier problema sexual es muy importante consultar. No lo dejes para mañana.
                    </p>
                    <p>
                        Piensa que detrás de un problema sexual puede esconderse una alteración de tu salud general. Un problema de erección puede ser un aviso de un daño arterial que afecte a la pared de todas las arterias del cuerpo. Un varón con malas erecciones puede tener un 25% de posibilidades de tener un episodio circulatorio grave (Ictus, Angina de pecho, Infarto de Miocardio) en los 2 años siguientes y un 30% de tener una diabetes silenciosa.
                    </p>
                </div>
                <div class="specialty-intro-callout">
                    <div class="callout-card">
                        <span class="callout-icon">♥</span>
                        <p class="callout-text">La erección es un termómetro de tu salud cardiovascular y metabólica</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Subsección A: Problemas de erección ── -->
    <section class="specialty-section specialty-section-alt">
        <div class="container">

            <div class="specialty-section-header">
                <span class="section-letter">A</span>
                <div>
                    <span class="eyebrow-text">Área 01</span>
                    <h2>Problemas de<br><em>Erección</em></h2>
                </div>
            </div>

            <div class="specialty-content-grid">
                <div class="specialty-text-block">
                    <p>
                        Tener problemas de erección puede causar estrés y afectar la confianza en uno mismo, además de causar dificultades en la relación de pareja. Los problemas para lograr o mantener una erección también pueden ser un signo de una enfermedad que necesita tratamiento y un factor de riesgo para enfermedades cardíacas.
                    </p>
                    <p>
                        Si te preocupa la disfunción eréctil, habla conmigo, incluso si te incomoda hacerlo. Te escucharé y te apoyaré. A veces, el tratamiento de una afección subyacente puede solucionar la disfunción eréctil. También podrías necesitar medicamentos u otros tratamientos directos.
                    </p>
                </div>

                <div class="specialty-videos-grid">
                    <?php
                    $videos_a = [
                        ['titulo' => 'Disfunción eréctil',  'duracion' => '2 min'],
                        ['titulo' => 'Pene curvo',          'duracion' => '2 min'],
                        ['titulo' => 'Fimosis',             'duracion' => '2 min'],
                        ['titulo' => 'Fractura de pene',    'duracion' => '2 min'],
                    ];
                    foreach ($videos_a as $v) : ?>
                    <div class="video-card">
                        <div class="video-thumb">
                            <div class="video-play-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                            <span class="video-duration"><?php echo $v['duracion']; ?></span>
                        </div>
                        <p class="video-title"><?php echo $v['titulo']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- ── Subsección B: Terapia hormonal ── -->
    <section class="specialty-section">
        <div class="container">

            <div class="specialty-section-header">
                <span class="section-letter">B</span>
                <div>
                    <span class="eyebrow-text">Área 02</span>
                    <h2>Terapia Hormonal<br><em>de Reemplazo</em></h2>
                </div>
            </div>

            <div class="specialty-content-grid specialty-content-grid--reversed">
                <div class="specialty-videos-grid specialty-videos-grid--single">
                    <div class="video-card video-card--large">
                        <div class="video-thumb">
                            <div class="video-play-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                            <span class="video-duration">2 min</span>
                        </div>
                        <p class="video-title">Terapia de Testosterona</p>
                    </div>
                </div>

                <div class="specialty-text-block">
                    <p>
                        La testosterona es la hormona sexual por excelencia. Regula el deseo sexual, la calidad de las erecciones, la recuperación entre erecciones y la cantidad de eyaculado.
                    </p>
                    <p>
                        Además de ser una hormona sexual, la testosterona es una <strong>hormona constitucional</strong>: regula la masa muscular, el rendimiento físico e intelectual, la capacidad de concentración, la memoria, el buen humor, la calidad del sueño, tiene un papel activo en que la grasa no se acumule, y mantiene la piel, los huesos y las articulaciones en buen estado.
                    </p>
                    <div class="specialty-highlight">
                        <p>La testosterona es imprescindible para mantener la calidad de vida y envejecer de forma saludable. <strong>¡No esperes a tener déficit!</strong> Podemos hacer prevención para que nunca te falte testosterona.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ── Subsección C: Problemas de eyaculación ── -->
    <section class="specialty-section specialty-section-alt">
        <div class="container">

            <div class="specialty-section-header">
                <span class="section-letter">C</span>
                <div>
                    <span class="eyebrow-text">Área 03</span>
                    <h2>Problemas de<br><em>Eyaculación</em></h2>
                </div>
            </div>

            <div class="specialty-content-grid">
                <div class="specialty-text-block">
                    <p>
                        Las alteraciones de la eyaculación son un problema más frecuente de lo que parece, que puede ocasionar problemas psicológicos que repercuten en la calidad de vida del afectado y de sus parejas.
                    </p>
                    <p>
                        Dada la complejidad del control de la función eyaculatoria, las causas pueden ser múltiples y por lo tanto es necesario un abordaje integral del bienestar biopsicosocial del paciente para lograr un manejo adecuado de esta afección. Para ello, es imprescindible un correcto diagnóstico clínico y un abordaje multidisciplinario.
                    </p>
                </div>

                <div class="specialty-videos-grid">
                    <?php
                    $videos_c = [
                        ['titulo' => 'Eyaculación precoz',         'duracion' => '2 min'],
                        ['titulo' => 'Eyaculación retardada',      'duracion' => '2 min'],
                        ['titulo' => 'Sangre en la eyaculación',   'duracion' => '2 min'],
                        ['titulo' => 'Alteraciones del orgasmo',   'duracion' => '2 min'],
                    ];
                    foreach ($videos_c as $v) : ?>
                    <div class="video-card">
                        <div class="video-thumb">
                            <div class="video-play-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                            <span class="video-duration"><?php echo $v['duracion']; ?></span>
                        </div>
                        <p class="video-title"><?php echo $v['titulo']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- ── CTA Final ── -->
    <section class="specialty-cta">
        <div class="container">
            <div class="specialty-cta-inner">
                <span class="eyebrow-text">Consulta sin compromiso</span>
                <h2>¿Hablamos?</h2>
                <p>Si te preocupa algo, es el momento de actuar. Estoy aquí para escucharte.</p>
                <div class="specialty-cta-btns">
                    <a href="<?php echo home_url('/contacto/'); ?>" class="btn-luxe btn-gold-fill">Solicitar Consulta</a>
                    <a href="https://wa.me/34607198560" class="btn-luxe btn-transparent" target="_blank">WhatsApp directo</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
