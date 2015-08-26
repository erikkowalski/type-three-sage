<aside class="clearfix readings-videos">



		<?php //Display Latest TWD Readings
        $twd_reading_args = [
            'post_type' => array('historical_readings','tutorial_videos'),
            'posts_per_page' => 4
        ];
        $twd_reading = new WP_Query( $twd_reading_args );?>
        <div class="container">
    <h2>Historical reading &amp; Video tutorials</h2>

	<section class="readings col-md-6">
        <?php while ( $twd_reading->have_posts() ) : $twd_reading->the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Reading Assignemnt</a></h3>


		<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a>
		<h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
		<div class="entry-content hidden-xs">
			<?php the_excerpt();?>
		</div>
		<?php endwhile; wp_reset_postdata();?>

	</section>
