<?php get_header(); ?>

<section class="section">

    <header>
        <h1><?php _e( 'Tags for ', 'cassiopeia' ); single_tag_title(); ?></h1>
    </header>

    <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'includes/loop-excerpt' );
        endwhile;
            get_template_part('includes/pagination');
        endif;
    ?>

</section><!-- /.section -->

<?php
    get_sidebar();
    get_footer(); 
?>