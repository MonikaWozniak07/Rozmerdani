<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */
?>

<?php get_header(); ?>

<div>
    <?php
    if ( has_post_thumbnail() ) {
        echo get_the_post_thumbnail_url($post->ID, 'banner');
    }
    else {
        echo get_the_post_thumbnail_url(get_option('page_on_front'), 'banner');
    }
    ?>
</div>

<section class="banner pt-50 pb-50 pt-lg-100 pb-lg-100" style="
    background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'banner') ?>)
    ">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <?php if( is_front_page() && ! is_home() ) { ?>
            <h1><span>Psy i koty</span><br>Zaadoptuj<br>dowolne zwierzę!</h1>
            <?php } else { ?>
            <?php single_post_title( '<h1>', '</h1>' ); ?>
            <?php } ?>
        </div>
    </div>
</section>


<?php /*
<section>
    <div class="container">
        <?php while ( have_posts() ) : the_post(); //Open the loop ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    index.php

    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <section class="entry-meta">
        <?php echo get_the_date(); ?>
    </section><!-- .entry-meta -->

    <section class="entry-content">
        <?php the_content(); ?>
    </section><!-- .entry-content -->

</article>

<?php endwhile; // End the loop. ?>
</div>
</section>
*/ ?>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content');
	}

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content-none' );

} ?>

<?php /*
<section class="mt-50 mt-lg-100 mb-50 mb-lg-100">
    <div class="container">
        <div class="grid grid-1_1">
            <div class="grid-content">
                <p>Pomagamy bezdomnym i krzywdzonym zwierzętom, w szczególności psom i kotom oraz prowadzimy działania na rzecz humanitarnego traktowania zwierząt, ich poszanowania oraz zapewnienie im opieki</p>
                <p>Aliquam ullamcorper leo elementum sem euismod, ornare dapibus massa feugiat. Nullam quis porttitor lorem, ac consectetur nisl. Fusce consequat euismod nunc, nec efficitur ante tincidunt non. Mauris vulputate varius nunc, id elementum dui fringilla fermentum. In sed tincidunt urna. Etiam sodales tellus vel venenatis tristique. Nam risus odio, viverra a convallis at, volutpat nec metus.</p>
            </div>
            <div class="grid-image order-tablet-1 justify-self-center mobile-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" alt="british-cat">
</div>
</div>
</div>
</section>

<section class="section-help mt-50 mt-lg-100">
    <div class="container">
        <div class="bg-gray rounded overflow-hidden">
            <div class="grid grid-1_1">
                <div class="grid-content">
                    <div class="heading">
                        <h2>Chcesz pomóc?</h2>
                    </div>
                    <p>Jeśli chciałbyś wspomóc fundację... Donec volutpat ligula sit amet lacinia aliquam. Pellentesque a iaculis justo. Morbi leo nisi, elementum sed mi non, scelerisque cursus nibh.</p>
                    <a href="/" class="btn">Czytaj więcej</a>
                </div>
                <div class="grid-image order-tablet-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img2.jpg" alt="little-dog">
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mt-50 mt-lg-100">
    <div class="container">
        <div class="grid grid-1_1">
            <div class="grid-content pb-lg-100">
                <p>Duis at lacinia diam. Vivamus purus felis, consequat sed turpis id, lobortis tempus elit. In hac habitasse platea dictumst. Mauris et augue ac felis semper scelerisque at ac dolor. Pellentesque luctus orci ipsum, non scelerisque velit sagittis eget. Integer nec dui id nisl blandit ornare vehicula at sapien.</p>
                <p>Aliquam ullamcorper leo elementum sem euismod, ornare dapibus massa feugiat. Nullam quis porttitor lorem, ac consectetur nisl. Fusce consequat euismod nunc, nec efficitur ante tincidunt non. Mauris vulputate varius nunc, id elementum dui fringilla fermentum. In sed tincidunt urna. Etiam sodales tellus vel venenatis tristique. Nam risus odio, viverra a convallis at, volutpat nec metus.</p>
            </div>
            <div class="grid-image align-self-end justify-self-center mobile-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg" alt="dog-cat">
            </div>
        </div>
    </div>
</section>
*/ ?>

<?php get_footer(); ?>