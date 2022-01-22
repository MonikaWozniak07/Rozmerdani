<?php
// Template Name: Aktualności
?>

<?php get_header(); ?>

<?php
    $banner_home = get_field('banner', get_option('page_on_front'))['obraz']['url'];
    $banner_news = get_field('banner', get_option('page_for_posts'))['url'];
    if( !empty( $banner_news ) ): ?>
    <section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php echo esc_url($banner_news); ?>);">
    <?php else : ?>
    <section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php echo esc_url($banner_home); ?>);">
    <?php endif; ?>
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1><strong><?php wp_title(''); ?></strong></h1>
        </div>
    </div>
</section>

<section class="news news-list pt-50 pb-50 pt-lg-100 pb-lg-100">
    <div class="container-sm">
        <?php if ( have_posts() ) : ?>
        <?php /* Start of the main loop. */ ?>

            <?php while ( have_posts() ) : the_post();  ?>
            <div class="news-item">
            <?php
            $image = get_field('obraz');
            if( !empty( $image ) ): ?>
            <div class="image">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php endif; ?>

            <div class="content">
                <div class="h2 title"><?php the_title(); ?></div>
                <div class="date"><?php echo get_the_date(); ?></div>
                <div class="dsc"><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>" class="link"></a>
            </div>
        </div>
        <?php endwhile; ?>
        <?php /* End of the main loop */ ?>

        <?php /* Add the pagination functions here. */ ?>
        <div class="pagination mt-25">
            <?php previous_posts_link( '« Nowsze' ); ?>
            <?php next_posts_link( 'Starsze »' ); ?>
        </div>

        <?php else : ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>