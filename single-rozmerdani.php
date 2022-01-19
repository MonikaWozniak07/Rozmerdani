<?php
/**
 * Rozmerdani single pet page
 */
?>

<?php get_header(); ?>

<?php /*
<h1 style="margin:0;padding:10px;background:lightblue;text-align:center;"><?php echo basename( __FILE__ ); ?></h1>
*/ ?>

<section>
    <div class="container">
        <?php
        while(have_posts()) { ?>
        <?php the_post(); ?>

        <div>
            <?php the_title(); ?>
        </div>

        <div>
            <?php the_field('gatunek'); ?>
        </div>

        <div>
            <?php the_field('plec'); ?>
        </div>

        <div>
            <?php the_field('opis'); ?>
        </div>

        <?php }
        ?>
    </div>
</section>


<?php get_footer(); ?>