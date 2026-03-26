<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true,
    offset: 80
  });
</script>
<footer class="site-footer-miami" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/marmol.jpg');">
    <div class="footer-overlay"></div> <div class="container footer-inner">

        <div class="footer-brand">
            <a href="<?php echo home_url(); ?>" class="footer-logo-miami">
                Dr. Javier <span class="gold-italic">Ruiz Romero</span>
            </a>
            <p class="footer-tagline">Andrología Avanzada · Salud Masculina de Autor</p>
        </div>

        <div class="footer-grid">
            <div class="footer-col">
                <span class="f-eyebrow">Contacto</span>
                <a href="tel:+34607198560" class="f-link">+34 607 198 560</a>
                <a href="mailto:info@drjavierruiz.com" class="f-link">info@drjavierruiz.com</a>
                <div class="footer-social-minimal">
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" aria-label="Google"><i class="fa-brands fa-google"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <span class="f-eyebrow">Sedes Especializadas</span>
                <p class="f-text"><strong>Madrid</strong> — C. Bárbara de Braganza 14</p>
                <p class="f-text"><strong>Barcelona</strong> — Sepulveda, 125</p>
                <p class="f-text"><strong>Reus</strong> — Passeig Sunyer, 49</p>
            </div>

            <div class="footer-col">
                <span class="f-eyebrow">Horario</span>
                <p class="f-text">Lunes a Viernes</p>
                <p class="f-text">09:00 – 20:00</p>
                <a href="#contacto" class="btn-footer-gold">Solicitar Cita</a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-legal">
                <p>&copy; <?php echo date('Y'); ?> Dr. Javier Ruiz Romero</p>
                <nav class="footer-legal-links">
                    <a href="<?php echo home_url('/aviso-legal/'); ?>">Aviso Legal</a>
                    <a href="<?php echo home_url('/privacidad/'); ?>">Privacidad</a>
                    <a href="<?php echo home_url('/cookies/'); ?>">Cookies</a>
                </nav>
            </div>
        </div>

    </div>
</footer>

<a href="https://wa.me/34607198560" class="wa-miami-style" target="_blank">
    WhatsApp Directo <span>&rarr;</span>
</a>

<?php wp_footer(); ?>
</body>
</html>
<style>
/* ==========================================================================
   FOOTER MIAMI GALLERY — REFINADO
   ========================================================================== */

.site-footer-miami {
    position: relative;
    padding: 120px 0 60px;
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Efecto parallax sutil */
    color: #444;
    overflow: hidden;
    border-top: 1px solid rgba(197, 164, 126, 0.2);
}

/* Capa para que el mármol no ensucie el diseño */
.footer-overlay {
    position: absolute;
    inset: 0;
        background: linear-gradient(to bottom, 
            rgba(255,255,255,0.80) 0%, 
            rgba(255,255,255,0.65) 50%, 
            rgba(255,255,255,0.80) 100%);
    z-index: 1;
}

.footer-inner {
    position: relative;
    z-index: 2;
}

/* Branding */
.footer-brand {
    text-align: center;
    margin-bottom: 80px;
}

.footer-logo-miami {
    font-family: var(--font-heading);
    font-size: clamp(2rem, 4vw, 3.2rem);
    font-weight: 300;
    color: #222;
    text-decoration: none;
    display: block;
    line-height: 1;
}

.footer-logo-miami .gold-italic {
    color: var(--accent-gold);
    font-style: italic;
}

.footer-tagline {
    font-size: 0.65rem;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: #999;
    margin-top: 20px;
}

/* Grid de Información */
.footer-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 60px;
    padding-bottom: 80px;
    border-bottom: 1px solid rgba(0,0,0,0.05);
}

.footer-col {
    display: flex;
    flex-direction: column;
}

.f-eyebrow {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: var(--accent-gold);
    margin-bottom: 25px;
    font-weight: bold;
}

.f-link, .f-text {
    font-size: 0.95rem;
    color: #666;
    margin-bottom: 12px;
    text-decoration: none;
    font-weight: 300;
    transition: color 0.3s;
}

.f-link:hover { color: var(--accent-gold); }
.f-text strong { color: #333; font-weight: 500; }

/* Botón y Redes */
.btn-footer-gold {
    align-self: flex-start;
    margin-top: 15px;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #222;
    text-decoration: none;
    border-bottom: 1px solid var(--accent-gold);
    padding-bottom: 4px;
    font-weight: bold;
}

.footer-social-minimal {
    display: flex;
    gap: 20px;
    margin-top: 25px;
}

.footer-social-minimal a {
    color: #aaa;
    font-size: 1.1rem;
    transition: color 0.3s;
}

.footer-social-minimal a:hover { color: var(--accent-gold); }

/* Legal */
.footer-bottom {
    padding-top: 40px;
    display: flex;
    justify-content: center;
}

.footer-legal p {
    font-size: 0.65rem;
    color: #aaa;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
    text-align: center;
}

.footer-legal-links {
    display: flex;
    gap: 25px;
    justify-content: center;
}

.footer-legal-links a {
    font-size: 0.65rem;
    color: #888;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

/* WhatsApp Flotante Miami Style */
.wa-miami-style {
    position: fixed;
    bottom: 40px;
    right: 40px;
    background: #fff;
    color: #222;
    padding: 16px 30px;
    border-radius: 0; /* Estilo cuadrado de lujo */
    border: 1px solid var(--accent-gold);
    font-family: var(--font-body);
    font-size: 0.65rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    text-decoration: none;
    box-shadow: 20px 20px 60px rgba(0,0,0,0.05);
    z-index: 1000;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: all 0.4s ease;
}

.wa-miami-style span { transition: transform 0.3s; }

.wa-miami-style:hover {
    background: var(--accent-gold);
    color: #fff;
    transform: translateY(-5px);
}

.wa-miami-style:hover span { transform: translateX(5px); }

/* Responsive */
@media (max-width: 991px) {
    .footer-grid { grid-template-columns: 1fr; gap: 40px; text-align: center; }
    .footer-col { align-items: center; }
    .btn-footer-gold { align-self: center; }
    .footer-social-minimal { justify-content: center; }
}
</style>