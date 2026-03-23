<?php get_header(); ?>

<main id="main-content">

    <?php 
    // 1. Atracción: El impacto visual inicial
    get_template_part('template-parts/banner'); 
    ?>

    <?php 
    // 2. Educación: Qué problemas resolvemos
    get_template_part('template-parts/treatments'); 
    ?>

    <?php 
    /* 3. CONFIANZA: Aquí va la nueva sección del Doctor.
       Crea un archivo llamado 'doctor.php' en la carpeta 'template-parts'.
    */
    get_template_part('template-parts/biografia');
    ?>

  <?php 
    // 5. Conversión: Formulario de contacto
    get_template_part('template-parts/contacto'); 

    get_template_part('template-parts/mapa'); 
    ?>
</main>

<?php get_footer(); ?>