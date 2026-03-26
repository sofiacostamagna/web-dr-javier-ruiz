<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({ duration: 800, easing: 'ease-in-out', once: true, offset: 80 });
</script>

<footer class="site-footer-miami" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/marmol.jpg');">
    <div class="footer-overlay"></div>
    <div class="container footer-inner">

        <div class="footer-brand" data-aos="fade-up">
            <a href="<?php echo home_url(); ?>" class="footer-logo-miami">
                Dr. Javier <span class="gold-italic">Ruiz Romero</span>
            </a>
            <p class="footer-tagline">Andrología Avanzada · Salud Masculina de Autor</p>
        </div>

        <div class="footer-grid" data-aos="fade-up" data-aos-delay="100">
            <div class="footer-col">
                <span class="f-eyebrow">Contacto</span>
                <a href="tel:+34607198560" class="f-link">+34 607 198 560</a>
                <a href="mailto:info@drjavierruiz.com" class="f-link">info@drjavierruiz.com</a>
                <div class="footer-social-minimal">
                    <a href="#" aria-label="Instagram" class="footer-social-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="#" aria-label="YouTube" class="footer-social-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="currentColor" stroke="none"/></svg>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="footer-social-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
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

    /* =============================
   FOOTER PERSONALIZADO MIAMI
   ============================= */
.site-footer-miami {
    font-size: 1rem;
}
.site-footer-miami .footer-tagline,
.site-footer-miami .f-eyebrow,
.site-footer-miami .f-link,
.site-footer-miami .f-text,
.site-footer-miami .btn-footer-gold,
.site-footer-miami .footer-legal,
.site-footer-miami .footer-legal-links a {
    font-size: 0.95em;
}
.site-footer-miami .f-eyebrow {
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.site-footer-miami .footer-logo-miami {
    font-size: clamp(1.5rem, 3vw, 2.2rem);
}

.site-footer-miami {
    position: relative;
    padding: 120px 0 60px;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: #444;
    overflow: hidden;
    border-top: 1px solid rgba(197, 164, 126, 0.2);
}
.footer-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(255,255,255,0.88) 0%, rgba(255,255,255,0.75) 50%, rgba(255,255,255,0.88) 100%);
    z-index: 1;
}
.footer-inner { position: relative; z-index: 2; }
.footer-brand { text-align: center; margin-bottom: 80px; }
.footer-logo-miami {
    font-family: var(--font-heading);
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 300;
    color: #222;
    text-decoration: none;
    display: block;
    line-height: 1;
}
.footer-logo-miami .gold-italic { color: var(--accent-gold); font-style: italic; }
.footer-tagline { font-size: 0.75rem; letter-spacing: 5px; text-transform: uppercase; color: #999; margin-top: 20px; }
.footer-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 60px;
    padding-bottom: 80px;
    border-bottom: 1px solid rgba(0,0,0,0.06);
}
.footer-col { display: flex; flex-direction: column; }
.f-eyebrow { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 3px; color: var(--accent-gold); margin-bottom: 28px; font-weight: 600; }
.f-link, .f-text { font-size: 1.05rem; color: #666; margin-bottom: 14px; text-decoration: none; font-weight: 300; transition: color 0.3s; }
.f-link:hover { color: var(--accent-gold); }
.f-text strong { color: #333; font-weight: 500; }
.btn-footer-gold {
    align-self: flex-start;
    margin-top: 15px;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #222;
    text-decoration: none;
    border-bottom: 1px solid var(--accent-gold);
    padding-bottom: 4px;
    font-weight: bold;
    transition: color 0.3s;
}
.btn-footer-gold:hover { color: var(--accent-gold); }
.footer-social-minimal { display: flex; gap: 20px; margin-top: 28px; }
.footer-social-icon { color: #aaa; transition: color 0.3s, transform 0.3s; display: flex; align-items: center; }
.footer-social-icon:hover { color: var(--accent-gold); transform: translateY(-3px); }
.footer-bottom { padding-top: 40px; display: flex; justify-content: center; }
.footer-legal p { font-size: 0.75rem; color: #aaa; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 15px; text-align: center; }
.footer-legal-links { display: flex; gap: 25px; justify-content: center; }
.footer-legal-links a { font-size: 0.75rem; color: #888; text-decoration: none; text-transform: uppercase; letter-spacing: 1.5px; transition: color 0.3s; }
.footer-legal-links a:hover { color: var(--accent-gold); }
.wa-miami-style {
    position: fixed;
    bottom: 40px;
    right: 40px;
    background: #fff;
    color: #222;
    padding: 16px 30px;
    border-radius: 0;
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
.wa-miami-style:hover { background: var(--accent-gold); color: #fff; transform: translateY(-5px); }
.wa-miami-style:hover span { transform: translateX(5px); }
@media (max-width: 991px) {
    .footer-grid { grid-template-columns: 1fr; gap: 40px; text-align: center; }
    .footer-col { align-items: center; }
    .btn-footer-gold { align-self: center; }
    .footer-social-minimal { justify-content: center; }
}
@media (max-width: 480px) {
    .wa-miami-style { bottom: 20px; right: 20px; padding: 12px 20px; }
    .footer-logo-miami { font-size: 2rem; }
}
</style>