<a href="https://api.whatsapp.com/send?phone=573045613670&text=Hola%2c%20me%20gustar%c3%ada%20recibir%20m%c3%a1s%20informaci%C3%B3n%20sobre%20Guigo%20Maderas." class="wp" target="_blank"></a>
<footer class="play-font color-white bg-gray">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="" class="img-fluid logo-footer ">
        <?php
        $defaults = array(
            'theme_location'    => 'footer-menu',
            'container'             => 'false'
        );
        wp_nav_menu( $defaults );

        ?>
    <a class="arrow-move arrow-move-up js-btn" href="#inicio"></a>
    <small>©2019 Guigo maderas. All Rights Reserved. Website by Actividad Creativa.</small>
</footer>
<?php wp_head();?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>
