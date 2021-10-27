<?php
/**
 * The single post file
 */
?>

<?php get_header(); ?>

<h1 style="margin:0;padding:10px;background:lightblue;text-align:center;"><?php echo basename( __FILE__ ); ?></h1>

<div>
    <?php /*
    if ( has_post_thumbnail() ) {
        echo get_the_post_thumbnail_url(get_option('page_for_posts'), 'banner');
    } else {
        echo get_the_post_thumbnail_url(get_option('page_on_front'), 'banner');
    }
    */ ?>
</div>

<?php if ( has_post_thumbnail() ) : ?>
<div class="container">
    <?php the_post_thumbnail('full'); ?>
</div>
<?php endif; ?>

<section>
    <div class="container">
        <?php
        while(have_posts()) { ?>
        <?php the_post(); ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
        <?php }
        ?>
    </div>
</section>

<?php get_footer(); ?>