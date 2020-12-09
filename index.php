<?php get_header(); ?>

  <div class="main_title">
    <a href="<?php echo esc_url( home_url('/'));?>"><p>PKあたらん速報<p></a>

  </div>

  <?php include( TEMPLATEPATH . '/slider.php' ); ?>

  <div id="main_wrapper">

    <?php include( TEMPLATEPATH . '/main-contents.php' ); ?>

    <?php get_sidebar(); ?>

  </div><!-- #main_wrapper -->

<?php get_footer(); ?>

</div>
<!-- wrapper end -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/swiper.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/fixheader.js"></script>

</body>
</html>
