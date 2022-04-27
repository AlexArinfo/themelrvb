<?php get_header();
//Template Name: Index
?>
<main id=index>
   <!-- Début du slider -->
<div id="slider">
   <!-- Vignette du slider -->
   <div id="slider-window">
      <ul id="slides">
      <?php if ( have_rows( 'slide' ) ) : ?>
	<?php while ( have_rows( 'slide' ) ) : the_row(); ?>
		<?php $image = get_sub_field( 'image' ); ?>
		<?php $size = 'full'; ?>
		<?php if ( $image ) : ?>
			<?php echo wp_get_attachment_image( $image, $size ); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
   </div><!-- #slider-window -->
</div><!-- #slider -->
</main>
<?php get_footer(); ?>