<?php 
    /* 
    Template Name: ModeleThemeVide
    Template Post Type: post, page, product
    */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title><?php the_title(); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <?php wp_footer(); ?>
    </body>
</html>