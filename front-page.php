<?php
get_header();?>

<script>document.body.className += ' fade-out';</script> <?php


echo do_shortcode('[smartslider3 slider="2"]');?>

<div class="content container bg-light ">
<?php   
        while ( have_posts() ) : the_post();
            the_content();
        endwhile; ?>
</div>
<?php get_footer(); ?>