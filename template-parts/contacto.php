<section class="section-contact-split" id="contacto">

    <div class="contact-split-inner">

    <div class="contact-split-left" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/marmol.jpg');">
        <div class="contact-left-inner">

            <div class="treatments-eyebrow">
                <span class="gold-dash"></span>
                <span class="eyebrow-text">Consulta Médica</span>
            </div>

            <h2 class="contact-split-headline">
                Cada caso<br>
                <em>merece</em><br>
                atención única.
            </h2>

            <p class="contact-split-sub">Agenda tu primera consulta con el Dr. Ruiz. Un enfoque clínico riguroso, personalizado y completamente discreto.</p>

            <div class="contact-split-links">
                <a href="tel:+34607198560" class="contact-split-link">
                    <span class="split-link-label">Teléfono</span>
                    <span class="split-link-value">+34 607 198 560</span>
                </a>
                <a href="https://wa.me/34607198560" target="_blank" class="contact-split-link">
                    <span class="split-link-label">WhatsApp</span>
                    <span class="split-link-value">Escríbenos ahora →</span>
                </a>
            </div>

            <div class="contact-split-cities">
                <span>Madrid</span>
                <span>Barcelona</span>
                <span>Reus</span>
            </div>

        </div>
    </div>

    <div class="contact-split-right">
        <div class="contact-right-inner">

            <p class="contact-form-title">Solicitar Consulta</p>

            <form action="#" class="form-split-style">

                <div class="fsplit-row">
                    <div class="fsplit-field">
                        <input type="text" name="name" placeholder="Nombre completo" required>
                    </div>
                    <div class="fsplit-field">
                        <input type="tel" name="phone" placeholder="Teléfono" required>
                    </div>
                </div>

                <div class="fsplit-field">
                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <div class="fsplit-field">
                    <select name="procedure">
                        <option value="" disabled selected>Área de interés</option>
                        <option value="salud-sexual">Salud Sexual</option>
                        <option value="fertilidad">Fertilidad Masculina</option>
                        <option value="androstetica">Androestética & Wellaging</option>
                        <option value="sueroterapia">Sueroterapia</option>
                    </select>
                </div>

                <div class="fsplit-row">
                    <div class="fsplit-field">
                        <select name="source">
                            <option value="" disabled selected>¿Cómo nos conociste?</option>
                            <option value="google">Google</option>
                            <option value="instagram">Instagram</option>
                            <option value="referral">Recomendación</option>
                        </select>
                    </div>
                    <div class="fsplit-field">
                        <select name="time">
                            <option value="" disabled selected>Horario preferido</option>
                            <option value="morning">Mañana (9h–13h)</option>
                            <option value="afternoon">Tarde (15h–19h)</option>
                        </select>
                    </div>
                </div>

                <div class="fsplit-field">
                    <textarea name="message" rows="3" placeholder="¿En qué podemos ayudarte?"></textarea>
                </div>

                <div class="fsplit-footer">
                    <a href="#" class="btn-luxe btn-gold-fill" onclick="this.closest('form').submit(); return false;">Enviar Solicitud</a>
                    <p class="fsplit-notice">Tus datos son tratados con total confidencialidad.</p>
                </div>

            </form>

        </div>
    </div>



</section>
