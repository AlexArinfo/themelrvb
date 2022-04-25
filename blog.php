<?php get_header();
//Template Name: Blog
?>

<?php 
get_template_part( './template-parts/heroup'); 
?>

<main id="blog">


<section class="container">
<h2><?php the_title()?></h2>
<?php
$recentPosts = new WP_Query();
$recentPosts->query('showposts=9');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<article>
<div class="imgarticle">
<?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('blogpage_thumb'); ?>
    <?php endif; ?>

    </div>
    
    <div class="textearticle">
    <span class="date">
    <?php the_time('l, jS F, Y'); ?>
    </span>
    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
 
    <?php the_excerpt(); ?>
    <span><?php the_category(); ?></span>
    <span><?php the_author();?></span>
    </div>
    </article>
    <?php endwhile; ?>
    
    </section>
    </main>
    <?php get_footer(); ?>
    
    
    
    
    
