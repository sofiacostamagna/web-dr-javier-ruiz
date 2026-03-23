<section class="section-map">
    <div class="container">
        <div class="map-wrapper-luxe">

            <div class="map-info-glass">
                <span class="eyebrow-luxe">Andrología en España</span>
                <h2 class="map-title">Nuestras <em>Sedes</em></h2>

                <div class="map-locations-list">
                    <div class="map-item">
                        <span class="city-name">Madrid</span>
                        <p>Clínica Vieco · C. Bárbara de Braganza 14</p>
                    </div>
                    <div class="map-item">
                        <span class="city-name">Barcelona</span>
                        <p>BMèdic · Sepulveda, 125</p>
                    </div>
                    <div class="map-item">
                        <span class="city-name">Reus</span>
                        <p>Institut Clínic · Passeig Sunyer, 49</p>
                    </div>
                </div>

                <a href="https://wa.me/34607198560" class="btn-map-contact">
                    Agendar Cita Presencial
                </a>
            </div>

            <div class="map-iframe-container">
               <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.283100656095!2d-3.6975252!3d40.4247545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42289659f8a379%3A0x6734c562e846067b!2sC.%20de%20B%C3%A1rbara%20de%20Braganza%2C%2014%2C%2028004%20Madrid!5e0!3m2!1ses!2ses!4v1711145000000!5m2!1ses!2ses"
    width="100%"
    height="700"
    style="border:0;"
    allowfullscreen=""
    loading="lazy">
</iframe>
            </div>

        </div>
    </div>
</section>
<style>
/* ==========================================================================
   SECCIÓN MAPA LUXE - TAUPE & AZUL PIZARRA
   ========================================================================== */

.section-map {
    padding: 120px 0 140px;
    background-color: var(--bg-white);
    position: relative;
    z-index: 0;
}

.map-wrapper-luxe {
    position: relative;
    border-radius: 4px;
    overflow: hidden;
    box-shadow: 0 40px 90px rgba(0,0,0,0.06);
    border: 1px solid var(--border-color);
}

/* Tarjeta Flotante (Glassmorphism sutil) */
.map-info-glass {
    position: absolute;
    top: 60px;
    left: 60px;
    z-index: 10;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    padding: 50px;
    max-width: 420px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-left: 3px solid var(--accent-gold);
}

.eyebrow-luxe {
    font-family: var(--font-body);
    font-size: 0.65rem;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: var(--accent-gold);
    display: block;
    margin-bottom: 15px;
}

.map-title {
    font-family: var(--font-heading);
    font-size: 2.8rem;
    text-transform: none;
    letter-spacing: 0;
    color: var(--primary-black);
    margin-bottom: 40px;
}

.map-title em {
    font-style: italic;
    color: var(--accent-warm);
}

/* Lista de Sedes */
.map-locations-list {
    margin-bottom: 40px;
}

.map-item {
    margin-bottom: 25px;
    padding-left: 20px;
    border-left: 1px solid rgba(191, 163, 126, 0.2);
}

.city-name {
    display: block;
    font-family: var(--font-body);
    font-size: 0.8rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--accent-blue-deep);
    margin-bottom: 5px;
}

.map-item p {
    font-size: 0.95rem;
    color: var(--accent-warm);
    margin: 0;
    font-weight: 300;
}

/* Botón */
.btn-map-contact {
    display: block;
    width: 100%;
    padding: 18px;
    background: var(--accent-blue-deep);
    color: #fff;
    text-align: center;
    text-decoration: none;
    font-family: var(--font-body);
    font-size: 0.75rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.btn-map-contact:hover {
    background: var(--primary-black);
    transform: translateY(-3px);
}

/* Filtro mineral para el mapa */
.map-iframe-container {
    line-height: 0;
    filter: grayscale(100%) contrast(1.1) brightness(1.1) sepia(0.1) hue-rotate(185deg);
    opacity: 0.8;
}

@media (max-width: 991px) {
    .map-info-glass {
        position: relative;
        top: 0;
        left: 0;
        max-width: 100%;
        border: none;
        border-bottom: 3px solid var(--accent-gold);
        padding: 40px 24px;
    }
    .map-iframe-container iframe {
        height: 450px;
    }
}
</style>
