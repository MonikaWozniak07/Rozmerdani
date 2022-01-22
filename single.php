<?php
/**
 * The single post file
 */
?>

<?php get_header(); ?>

<section class="news-post">
    <article class="container-sm pt-50 pb-50 pb-lg-100">
        <div class="text-center mb-25">
            <h1 class="title"><?php the_title(); ?></h1>
            <div class="date"><?php echo get_the_date(); ?></div>
        </div>
        <?php
        $image = get_field('obraz');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="featured-image"/>
        <?php endif; ?>
        <?php the_content(); ?>
    </article>
</section>

<?php get_footer(); ?>