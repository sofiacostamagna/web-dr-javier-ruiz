<?php
/**
 * Template Name: Conóceme - Miami Dark Marble
 */
get_header();
?>

<main id="main-content" class="miami-dark-page">

    <section class="art-hero">
        <div class="container art-hero-flex">
            <div class="art-hero-content">
                <span class="art-eyebrow">Andrología de Autor</span>
                <h1 class="art-hero-title">
                    Meet <br>
                    <span class="art-gold-serif">Dr. Javier Ruiz</span>
                </h1>
                <div class="art-hero-bio">
                    <p class="art-lead">Salud Sexual, Reproductiva, Regenerativa y Metabólica Masculina.</p>
                    <p>Referente en el diagnóstico integral del varón, donde la ciencia médica se encuentra con una visión profundamente humana.</p>
                    <a href="#contacto" class="art-btn-minimal">Solicitar Consulta</a>
                </div>
            </div>
            
            <div class="art-hero-visual">
                <div class="art-marble-dark-indicator" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/marmol.jpg');"></div>
                <div class="art-main-portrait">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/medico.jpg" alt="Dr. Javier Ruiz Romero">
                </div>
            </div>
        </div>
    </section>

    <section class="art-contact-bar" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/marmol-2.png');">
        <div class="art-bar-overlay"></div>
        <div class="container">
            <h2 class="art-bar-text">
                Llama al <a href="tel:+34607198560">607 198 560</a> hoy para tu <br>
                <span class="art-bar-sub">Consulta de Andrología Especializada</span>
            </h2>
        </div>
    </section>

    <section class="art-section" id="profesional">
        <div class="container art-narrow-editorial">
            <div class="art-editorial-wrapper">
                <div class="art-indicator-column">
                    <div class="art-vertical-marble" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/marmol-2.png');"></div>
                </div>
                <div class="art-editorial-text">
                    <span class="art-eyebrow">Trayectoria Académica</span>
                    <h2 class="art-section-title">El Profesional</h2>
                    <p>Licenciado por la Facultad de Medicina de la Universidad de Zaragoza y especialista por la prestigiosa <strong>Fundación Puigvert</strong> (Hospital de Sant Pau, Barcelona).</p>
                    <p>Experto en todas las vertientes de la andrología clínica y quirúrgica, con especialización en formulación magistral personalizada y sueroterapia metabólica.</p>
                    <blockquote class="art-quote-gold">
                        "Si despiertas las emociones del paciente y te da su confianza, puede aceptar su dolor con valentía y generosidad."
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="art-section art-section--light">
        <div class="container art-narrow-editorial">
            <div class="art-editorial-wrapper art-reverse">
                <div class="art-editorial-text">
                    <span class="art-eyebrow">Origen & Vocación</span>
                    <h2 class="art-section-title">Pasión por mi <em>Profesión</em></h2>
                    <p>Hijo del urólogo Santiago Ruiz Ferré, mi interés nació al detectar el vacío en el diagnóstico de afecciones genitales masculinas. Mi mirada desde la consulta otorga una visión antropológica del hombre, de su evolución y miedos.</p>
                </div>
                <div class="art-indicator-column">
                    <div class="art-vertical-marble art-vertical-marble--short" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/marmol.jpg');"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="art-section">
        <div class="container art-narrow-editorial">
            <div class="art-center-header">
                <h2 class="art-section-title">La Persona</h2>
                <p class="art-persona-lead">"Escribo a diario porque es la forma más natural que encuentro de expresarme; un ejercicio íntimo de introspección."</p>
            </div>
            
            <div class="art-books-minimal">
                <div class="art-book-item">
                    <span class="art-book-num">01</span>
                    <div class="art-book-content">
                        <h3>No hay nada mejor que lo que no se sabe</h3>
                        <p>Versos despeinados para ser más libre, dejando atrás el corsé de las normas sociales.</p>
                        <a href="https://editorialcirculorojo.com/no-hay-nada-mejor-que-lo-que-no-se-sabe" target="_blank" class="art-link-gold">Explorar Poemario &rarr;</a>
                    </div>
                </div>
                <div class="art-book-item">
                    <span class="art-book-num">02</span>
                    <div class="art-book-content">
                        <h3>Cuando creímos saberlo todo</h3>
                        <p>Versos escritos desde el desgarro del romanticismo opaco. Un viaje para descubrir el dolor y sus gritos.</p>
                        <a href="https://editorial.talondeaquiles.es/product/cuando-creimos-saberlo-todo" target="_blank" class="art-link-gold">Explorar Poemario &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="art-kintsugi">
        <div class="art-kintsugi-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/marmol.jpg');"></div>
        <div class="container art-narrow-editorial art-center">
            <span class="art-eyebrow-gold">Coach en Resiliencia</span>
            <h2 class="art-kintsugi-title">Kintsugi</h2>
            <p class="art-kintsugi-desc">Las cicatrices doradas y visibles transforman la esencia. Al resaltar las líneas de rotura, exhibimos las heridas del pasado y les otorgamos una nueva vida.</p>
            <p class="art-final-phrase">"Roto y reparado, más bello que antes."</p>
        </div>
    </section>

</main>

<?php get_footer(); ?>

<style>
/* --- CONFIGURACIÓN DE LUJO --- */
.miami-dark-page {
    background: #fff;
    color: #444;
    font-family: 'Times New Roman', serif;
    line-height: 1.8;
}

/* --- HERO COMPOSITION --- */
.art-hero-flex {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 80px;
    text-align: center;
}

.art-hero-content {
    flex: 1;
    max-width: 480px;
    margin: 0 auto;
    text-align: center;
}

.art-hero-title {
    font-size: clamp(3.5rem, 7vw, 5.5rem);
    font-weight: 300;
    line-height: 0.9;
    color: #1a1a1a;
    margin-bottom: 40px;
}

.art-gold-serif {
    color: #c5a47e;
    font-style: italic;
    display: block;
}

.art-hero-bio {
    border-left: 1px solid #c5a47e;
    padding-left: 30px;
}

.art-lead {
    font-size: 1.2rem;
    color: #1a1a1a;
    margin-bottom: 15px;
    font-weight: 400;
}

.art-hero-visual {
    flex: 1.2;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    background: url('../img/marmol-2.png') center/cover no-repeat;
    min-height: 700px;
    border-radius: 18px;
    overflow: hidden;
    margin: 0 auto;
}

.art-main-portrait {
    width: 100%;
    height: 700px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: transparent;
    box-shadow: none;
}

.art-main-portrait img {
    width: auto;
    height: 100%;
    max-width: 100%;
    object-fit: contain;
    border-radius: 12px;
    box-shadow: 0 8px 48px 0 rgba(191,163,126,0.10);
}

/* El Indicador de Mármol Oscuro */
.art-marble-dark-indicator {
    position: absolute;
    top: -40px; left: -40px;
    width: 250px; height: 250px;
    background-size: cover;
    z-index: -1;
    filter: brightness(0.3) contrast(1.3) grayscale(1); /* MÁRMOL OSCURO PSICOLÓGICO */
}

/* --- CONTACT BAR (MÁRMOL OSCURO) --- */
.art-contact-bar {
    padding: 140px 0;
    background-size: cover;
    background-attachment: fixed;
    text-align: center;
    position: relative;
}
.art-bar-overlay { 
    position: absolute; inset: 0; 
    background: rgba(0,0,0,0.7); /* Oscurecemos la barra de contacto */
}
.art-bar-text { font-size: 2.8rem; color: #fff; font-weight: 300; position: relative; z-index: 2; }
.art-bar-text a { color: #fff; text-decoration: underline; text-decoration-color: #c5a47e; }
.art-bar-sub { color: #c5a47e; font-style: italic; font-size: 2.1rem; display: block; margin-top: 10px; }

/* --- SECCIÓN EDITORIAL (ESTRECHA) --- */
.art-narrow-editorial { max-width: 900px !important; margin: 0 auto; }
.art-section { padding: 140px 0; }
.art-section--light { background: #fafafa; }

.art-editorial-wrapper { display: flex; gap: 60px; align-items: flex-start; }
.art-reverse { flex-direction: row-reverse; }

.art-indicator-column { flex-shrink: 0; width: 4px; }
.art-vertical-marble {
    width: 4px; height: 350px;
    background-size: cover;
    filter: brightness(0.4) grayscale(1); /* INDICADOR OSCURO */
    opacity: 0.8;
}

.art-section-title { font-size: 3.2rem; font-weight: 300; color: #111; margin-bottom: 40px; }
.art-section-title em { color: #c5a47e; font-style: italic; }

.art-quote-gold { border-left: 1px solid #c5a47e; padding-left: 30px; margin-top: 50px; font-style: italic; color: #c5a47e; font-size: 1.3rem; }

/* --- POEMARIOS --- */
.art-persona-lead { font-size: 1.4rem;
    font-style: italic;
    color: #7a6a4f;
    text-align: center;
    margin-bottom: 60px;
    font-weight: 300;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}
.art-books-minimal {
    display: flex;
    flex-direction: column;
    gap: 48px;
    max-width: 700px;
    margin: 0 auto;
}
.art-book-item {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    background: #faf8f4;
    border-radius: 18px;
    box-shadow: 0 2px 24px 0 rgba(197,164,126,0.07);
    padding: 36px 32px 32px 32px;
    border-left: 4px solid #c5a47e;
    transition: box-shadow 0.2s;
}
.art-book-item:hover {
    box-shadow: 0 8px 32px 0 rgba(197,164,126,0.13);
}
.art-book-num {
    font-size: 1.2rem;
    color: #c5a47e;
    font-style: italic;
    opacity: 0.7;
    margin-bottom: 10px;
    font-weight: bold;
    letter-spacing: 2px;
}
.art-book-content h3 {
    font-size: 1.3rem;
    font-weight: 400;
    margin-bottom: 8px;
    color: #1a1a1a;
    letter-spacing: 0.5px;
}
.art-book-content p {
    font-size: 1rem;
    color: #6a5c3a;
    margin-bottom: 12px;
}
.art-link-gold {
    color: #c5a47e;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: color 0.18s;
}
.art-link-gold:hover {
    color: #b8925c;
    text-decoration: underline;
}
@media (max-width: 700px) {
    .art-books-minimal {
        padding: 0 10px;
    }
    .art-book-item {
        padding: 28px 12px 24px 16px;
    }
}
/* --- KINTSUGI --- */
.art-kintsugi { background: #111; color: #fff; padding: 160px 0; position: relative; overflow: hidden; }
.art-kintsugi-bg { position: absolute; inset: 0; background-size: cover; opacity: 0.1; filter: brightness(0.3); }
.art-kintsugi-title { font-size: 10rem; color: rgba(197, 164, 126, 0.1); margin-bottom: -40px; font-style: italic; }
.art-final-phrase { font-size: 2.5rem; color: #c5a47e; font-style: italic; margin-top: 50px; }

/* REUSABLES */
.art-eyebrow { text-transform: uppercase; letter-spacing: 5px; font-size: 0.75rem; color: #c5a47e; margin-bottom: 25px; display: block; font-weight: bold;}
.art-link-gold { color: #c5a47e; text-decoration: none; font-size: 0.8rem; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;}

.art-btn-minimal {
    display: inline-block;
    background: #c5a47e;
    color: #fff;
    font-family: inherit;
    font-size: 1rem;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    border: none;
    border-radius: 24px;
    padding: 14px 32px;
    margin-top: 24px;
    box-shadow: none;
    text-decoration: none;
    transition: background 0.18s, color 0.18s;
    cursor: pointer;
}
.art-btn-minimal:hover {
    background: #b8925c;
    color: #fff;
    text-decoration: none;
}

@media (max-width: 991px) {
    .art-hero-flex { flex-direction: column; gap: 40px; }
    .art-hero-content, .art-hero-visual { max-width: 100%; margin: 0 auto; }
}
</style>