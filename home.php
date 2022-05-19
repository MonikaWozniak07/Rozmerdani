<?php get_header(); ?>

<?php
if ( carbon_get_post_meta( get_option('page_for_posts'), 'banner_image' ) ):
    $banner_image = wp_get_attachment_image_url( carbon_get_post_meta( get_option('page_for_posts'), 'banner_image' ), '' );
else:
    $banner_image = get_template_directory_uri().'/img/banner-rozmerdani.jpg';
endif;
?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(  <?php echo $banner_image; ?> );">
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

            <?php if ( has_post_thumbnail() ) { ?>
                <div class="image">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php } ?>

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