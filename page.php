<?php get_header(); ?>

    <a class="button button--page" href="<?php bloginfo('url'); ?>" title="Zurück zur Startseite">
        <span>
            <span data-hover="Zurück">Zurück</span>
        </span>
    </a>


<div id="page">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <?php the_content(); ?>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>