<?php // get_template_part('templates/page', 'header'); ?>

<section class="readings">

		<?php //Display 3 random Costar News Posts
		$twd_reading_args = [
			'post_type' => 'twd_reading',
			'posts_per_page' => 1
		];

		$twd_reading = new WP_Query( $twd_reading_args );
		?>
		<h3>TWD Reading Assignemnts</h3>


			<?php while ( $twd_reading->have_posts() ) : $twd_reading->the_post(); ?>
				<h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
				<div class="entry-content">
					<?php the_excerpt();?>
				</div>
			<?php endwhile;
wp_reset_postdata();
			?>

</section>

<section class="blog-feed">
<?php if (!have_posts()) : ?>
<div class="alert alert-warning">
	<?php _e('Sorry, no results were found.', 'sage'); ?>
</div>
<?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<div class="clearfix">
<?php the_posts_navigation(); ?>
	</div>
</section>
<!-- Links & other resources -->

