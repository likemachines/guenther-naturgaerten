<?php
/*
* Template Name: Startseite
*/ get_header(); ?>

    <?php $link = get_field('button');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="button" id="button-mobile" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
            <span>
                <span data-hover="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></span>
            </span>
        </a>
    <?php endif; ?>

<?php 
$images = get_field('slideshow');
$size = 'full'; 
if( $images ): ?>
<div id="slideshow" class="swiper">
  <div class="swiper-wrapper">
        <?php foreach( $images as $image_id ): ?>
            <div class="swiper-slide">
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </div>
        <?php endforeach; ?>
  </div>
</div>
<?php endif; ?>

<div id="textbox">
    <?php the_field('textbox'); ?>
</div>

<div id="contact">
    <?php the_field('contact'); ?>

    <?php $link = get_field('button');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
            <span>
                <span data-hover="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></span>
            </span>
        </a>
    <?php endif; ?>
    <?php $link = get_field('legal','options');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="legal" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
            <?php echo esc_html( $link_title ); ?>
        </a>
<?php endif; ?>
</div>

<?php get_footer(); ?>