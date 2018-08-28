<?php/*
Template Name: Events
*/
?>
<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
?>
<?php require 'events-wrap.php' ?>



