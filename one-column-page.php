<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * @package Shiword
 * @since 2.06
 */
?>

<?php get_header(); ?>

<?php shiword_get_layout( 'one-column' ); ?>

<div class="<?php shiword_content_class(); ?>">

	<?php if ( have_posts() ) {

		while ( have_posts() ) {

			the_post(); ?>

			<?php shiword_hook_entry_before(); ?>

			<div <?php post_class( 'sw-entry-standard' ) ?> id="post-<?php the_ID(); ?>">

				<?php shiword_hook_entry_top(); ?>

				<?php shiword_post_title( array( 'featured' => 1 ) ); ?>

				<?php shiword_hook_like_it(); ?>

				<?php shiword_extrainfo( array( 'auth' => 0, 'date' => 0, 'tags' => 0, 'cats' => 0 ) ); ?>

				<div class="storycontent">

					<?php the_content(); ?>

				</div>

				<div class="fixfloat">

					<?php wp_link_pages( 'before=<div class="meta sw-paginated-entry">' . __( 'Pages', 'shiword' ) . ':&after=</div>' ); ?>

				</div>

				<div class="fixfloat"> </div>

				<?php shiword_hook_entry_bottom(); ?>

			</div>

			<?php shiword_hook_entry_after(); ?>

			<?php shiword_get_sidebar( 'single' ); // show single widget area ?>

			<?php comments_template(); // Get wp-comments.php template ?>

		<?php } ?>

	<?php } else { ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.', 'shiword' );?></p>

	<?php } ?>

</div>

<?php get_footer(); ?>
