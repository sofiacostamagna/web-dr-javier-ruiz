<?php /* Template Part: Banner Hero */ ?>

<section class="hero-main" id="hero-slider">

    <div class="hero-slides">
        <div class="hero-slide active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/consultorio-2.jpg');"></div>
        <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/consultorio-1.jpg');"></div>
        <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/consultorio.jpg');"></div>
    </div>

    <div class="hero-overlay"></div>

    <div class="container hero-wrapper">
        <div class="hero-content-box">

            <div class="hero-eyebrow-flex">
                <span class="gold-dash"></span>
                <span class="eyebrow-text">Andrología Avanzada · Madrid · Barcelona · Reus</span>
            </div>

            <h1 class="hero-main-title">
                <span class="title-pre">Medicina de Autor.</span>
                <span class="title-display">Salud Masculina.</span>
            </h1>

            <p class="hero-description">
                Especialista en Salud Sexual, Reproductiva y Regenerativa Masculina.<br>
                Un abordaje cercano, honesto y personalizado.
            </p>

            <div class="hero-button-group">
                <a href="<?php echo home_url('/contacto/'); ?>" class="btn-luxe btn-gold-fill">Solicitar Consulta</a>
                <a href="<?php echo home_url('/conoceme/'); ?>" class="btn-luxe btn-transparent">Conoce al Doctor</a>
            </div>

        </div>
    </div>

    <div class="hero-side-nav">
        <div class="hero-counter-luxe">
            <span id="current-num">01</span>
            <div class="progress-line"><div class="progress-fill"></div></div>
            <span>03</span>
        </div>
    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero-slide');
    const currentNum = document.getElementById('current-num');
    const progressFill = document.querySelector('.progress-fill');
    let index = 0;

    function nextSlide() {
        slides[index].classList.remove('active');
        index = (index + 1) % slides.length;
        slides[index].classList.add('active');
        currentNum.innerText = '0' + (index + 1);
        progressFill.style.width = (((index + 1) / slides.length) * 100) + '%';
    }

    setInterval(nextSlide, 5000);
});
</script>
