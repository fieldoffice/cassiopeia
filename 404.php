<?php get_header(); ?>
    
<section class="section">

	<article id="post-404">

        <header>
            <h1><?php _e( 'Page not found', 'cassiopeia' ); ?></h1>
        </header>

        <p>Use the search to find what you are looking for <a href="<?php echo home_url(); ?>"><?php _e( 'return to the homepage', 'cassiopeia' ); ?></a>.</p>

        <?php get_template_part( 'includes/search' ); ?>

	</article>

</section><!-- /.section -->

<?php 
    get_sidebar();
    get_footer(); 
?>