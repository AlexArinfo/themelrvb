<?php
// Contrôler si ACF est actif
if (!function_exists('get_field')) return;
?>

<?php get_header();
//Template Name: single
?>

<main id="singlearticle">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="hero" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">
                <div class="infos">
                    <div class="datetitre">
                    <span class="date">
    <?php the_time('l, jS F, Y'); ?>
    </span>
                        </div>
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    </div>
                    
                    <div class="auteuretcat">
                    <span><?php the_category(); ?></span>
                    <span><?php the_author();?></span>
                    </div>
                </div>
            </div>
            </div>

            <div class="container">
                    <article">
                            <?php the_content(); ?>
                    </article>

                <?php endwhile; ?>
                <div id="sidebar">
                    <?php get_template_part('sidebar'); ?>
                </div>
            </div>
           



        <?php endif; ?>

        <?php get_footer(); ?>