<aside class="clearfix readings-videos">

		<?php //Display Latest hand outs and tutorial videos
        $twd_reading_args = [
            'post_type' => array('historical_readings','tutorial_videos'),
            'posts_per_page' => 2
        ];
        $twd_reading = new WP_Query( $twd_reading_args );?>
    <div class="container">
    <h2>Historical Readings &amp; Video tutorials</h2>

    <?php while ( $twd_reading->have_posts() ) : $twd_reading->the_post(); ?>

        <section class="col-md-6">
            <h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>

            <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a>

        </section>
    <?php endwhile; wp_reset_postdata();?>
    </div>
</aside>
