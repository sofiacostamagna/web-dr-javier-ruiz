<footer class="site-footer-luxe">
        <div class="container">

            <div class="footer-header-luxe">
                <a href="<?php echo home_url(); ?>" class="footer-logo-main">
                    Dr. Javier Ruiz Romero
                </a>
                <p class="footer-tagline-luxe">Andrología Avanzada &amp; Salud Masculina de Autor</p>
            </div>

            <div class="footer-content-luxe">
                <div class="footer-contact-block">
                    <p class="f-label">Contacto</p>
                    <p class="f-detail">+34 607 198 560</p>
                    <p class="f-detail">info@drjavierruiz.com</p>
                </div>

                <div class="footer-contact-block">
                    <p class="f-label">Sedes</p>
                    <p class="f-detail">Madrid — C. Bárbara de Braganza 14</p>
                    <p class="f-detail">Barcelona — Sepulveda, 125</p>
                    <p class="f-detail">Reus — Passeig Sunyer, 49</p>
                </div>

                <div class="footer-hours-block">
                    <p class="f-label">Horario</p>
                    <p class="f-detail">Lun–Vie: 9:00 – 20:00</p>
                    <p class="f-detail">Sáb–Dom: Cerrado</p>
                </div>
            </div>

            <div class="footer-social-luxe">
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" aria-label="Google"><i class="fa-brands fa-google"></i></a>
            </div>

            <div class="footer-legal-luxe">
                <p>&copy; <?php echo date('Y'); ?> Dr. Javier Ruiz Romero &mdash; Todos los derechos reservados</p>
                <nav class="footer-links-luxe">
                    <a href="<?php echo home_url('/aviso-legal/'); ?>">Aviso Legal</a>
                    <a href="<?php echo home_url('/privacidad/'); ?>">Privacidad</a>
                    <a href="<?php echo home_url('/cookies/'); ?>">Cookies</a>
                </nav>
            </div>

        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

<style>
/* ==========================================================================
   FOOTER LUXE — FONDO OSCURO
   ========================================================================== */

.site-footer-luxe {
    background-color: var(--accent-blue-deep);
    padding: 100px 0 40px;
    border-top: 1px solid rgba(255,255,255,0.1);
    text-align: center;
}

/* Logo */
.footer-logo-main {
    font-family: var(--font-heading);
    font-size: 3rem;
    font-weight: 300;
    font-style: italic;
    color: #fff;
    text-decoration: none;
    letter-spacing: 0;
    display: block;
    margin-bottom: 14px;
    transition: color 0.3s;
}

.footer-logo-main:hover {
    color: var(--accent-gold);
}

.footer-tagline-luxe {
    font-family: var(--font-body);
    font-size: 0.63rem;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #fff;
    margin-bottom: 72px;
}

/* Bloques de info */
.footer-content-luxe {
    display: flex;
    justify-content: center;
    gap: 80px;
    margin: 0 auto 64px;
    padding: 0 20px;
    border-top: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    padding-top: 56px;
    padding-bottom: 56px;
}

.f-label {
    font-family: var(--font-body);
    font-size: 0.6rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #fff;
    font-weight: 600;
    margin: 0 0 16px;
}

.f-detail {
    font-family: var(--font-body);
    font-size: 0.88rem;
    color: #fff;
    margin: 6px 0;
    font-weight: 300;
}

/* Redes sociales */
.footer-social-luxe {
    margin-bottom: 56px;
}

.footer-social-luxe a {
    color: #fff;
    font-size: 1.2rem;
    margin: 0 16px;
    transition: color 0.3s;
    text-decoration: none;
}

.footer-social-luxe a:hover {
    color: var(--accent-gold);
}

/* Barra legal */
.footer-legal-luxe {
    border-top: 1px solid rgba(255,255,255,0.2);
    padding-top: 40px;
}

.footer-legal-luxe p {
    font-family: var(--font-body);
    font-size: 0.63rem;
    color: #fff;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.footer-links-luxe {
    margin-top: 12px;
}

.footer-links-luxe a {
    font-family: var(--font-body);
    font-size: 0.63rem;
    color: #fff;
    text-decoration: none;
    margin: 0 12px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    transition: color 0.3s;
}

.footer-links-luxe a:hover {
    color: var(--accent-gold);
}

/* Botón WhatsApp flotante */
.wa-miami-style {
    position: fixed;
    bottom: 36px;
    right: 36px;
    background: var(--accent-blue-deep);
    color: #fff;
    padding: 14px 32px;
    border: 1px solid rgba(255,255,255,0.25);
    border-radius: 100px;
    font-family: var(--font-body);
    font-size: 0.62rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    text-decoration: none;
    box-shadow: 0 12px 40px rgba(122,154,179,0.35);
    transition: all 0.3s ease;
    z-index: 1000;
}

.wa-miami-style:hover {
    background: var(--accent-gold);
    border-color: var(--accent-gold);
    color: #fff;
}

/* Responsive */
@media (max-width: 768px) {
    .footer-content-luxe {
        flex-direction: column;
        gap: 36px;
        align-items: center;
    }
    .footer-logo-main { font-size: 2.2rem; }
    .wa-miami-style { bottom: 24px; right: 24px; padding: 12px 24px; }
}
</style>
