<?php /* Template Part: Biografía / Doctor — Estilo Editorial Collage */ ?>

<section class="section-doctor-luxe">
    
    <div class="doctor-split-bg">
        <div class="bg-marmol" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/marmol.jpg');"></div>
        <div class="bg-white"></div>
    </div>

    <div class="container">
    <div class="doctor-collage-wrapper">

        <div class="doctor-photo-frame">
            <img src="<?php echo get_template_directory_uri(); ?>/img/medico.jpg" alt="Dr. Javier Ruiz Romero">
        </div>

        <div class="doctor-content-box">
            
            <h2 class="doctor-headline">
                <span class="headline-muted">Tu aliado en</span>
                <span class="headline-dark">Salud Masculina.</span>
            </h2>

            <p class="doctor-name-label">Dr. Javier Ruiz Romero</p>

            <div class="doctor-copy">
                <blockquote class="doctor-quote">
                    <span class="doctor-quote-text">"He pasado toda la vida investigando la enfermedad y tenía que haberla dedicado a estudiar la salud."</span>
                    <span class="doctor-quote-own">La salud es tu mayor bien — <em>invierte en él.</em></span>
                    <cite class="doctor-quote-cite">— Inspirado en Prof. Valentí Fuster</cite>
                </blockquote>

                <p>Médico especialista en Andrología formado en la Fundación Puigvert. Experto en salud sexual, reproductiva, regenerativa y metabólica masculina. Mi abordaje es activo, holístico y personalizado: escucho, entiendo y acompaño a cada persona que confía en mí. Porque el primer paso para solucionar lo que te pasa es entenderlo.</p>

                <div class="doctor-actions">
                    <a href="<?php echo home_url('/conoceme/'); ?>" class="btn-luxe btn-gold-fill">Conoce mi Trayectoria</a>
                    <a href="<?php echo home_url('/contacto/'); ?>" class="btn-luxe btn-transparent">Solicitar Consulta</a>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>