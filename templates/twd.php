<aside class="clearfix twd">

<div class="container">
  		<?php //Display Latest TWD Readings
        $twd_reading_args = [
            'post_type' => 'twd_reading',
            'posts_per_page' => 1
        ];
        $twd_reading = new WP_Query( $twd_reading_args );?>

    <h2>This week's <a href="http://www.typographicwebdesign.com">TWD</a> reading &amp; exercise</h2>

	<section class="readings col-md-6">
        <?php while ( $twd_reading->have_posts() ) : $twd_reading->the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Reading Assignemnt</a></h3>


		<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a>
		<h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
		<div class="entry-content hidden-xs">
			<?php the_excerpt();?>
		</div>
		<?php endwhile; wp_reset_postdata();?>
		<a class="twd-readings" href="<?php echo $_SERVER['REQUEST_URI'];?>/twd_readings">View all readings</a>

	</section>



        <?php //Display latest TWD Exercise
        $twd_exercise_args = [
            'post_type' => 'twd_exercise',
            'posts_per_page' => 1
        ];

        $twd_exercise = new WP_Query( $twd_exercise_args );?>

        <section class="exercise col-md-6">
            <h3><a href="<?php the_permalink(); ?>"><span class="glyphicon glyphicon glyphicon-blackboard" aria-hidden="true"></span>  Exercise</a></h3>
            <?php while ( $twd_exercise->have_posts() ) : $twd_exercise->the_post(); ?>
            <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a>

            <h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
            <div class="entry-content hidden-xs">
                <?php the_excerpt();?>
            </div>
		<?php endwhile;wp_reset_postdata();?>

	</section>
	</div><!-- .container -->
</aside>
