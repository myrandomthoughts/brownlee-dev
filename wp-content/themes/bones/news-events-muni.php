<div class="sidebar">
	<div class="news-list">
		<h4>News</h4>
		<?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => '1') );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<span class="post-time"><?php the_time('F j, Y'); ?></span>
		<div class="news-item">
			<a href="<?php the_permalink(); ?>"><h3><?php the_field( 'ne_title' ); ?></h3></a>

			<p><?php the_excerpt(); ?></p>
			<a class="full" href="<?php the_permalink(); ?>">></a>
		</div>

		<?php endwhile; wp_reset_postdata(); ?>
		<a class="full-link" href="<?php bloginfo('url'); ?>/?page_id=91">View News</a>
	</div>

	<div class="events-list">
		<h4>Events</h4>
		<?php $loop = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => '1') );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<span class="post-time"><?php the_time('F j, Y'); ?></span>
		<div class="events-item">	
			<a href="<?php the_permalink(); ?>"><h3><?php the_field( 'ne_title' ); ?></h3></a>

			<p><?php the_excerpt(); ?></p>
			<a class="full" href="<?php the_permalink(); ?>">></a>
		</div>

		<?php endwhile; wp_reset_postdata(); ?>
		<a class="full-link" href="<?php bloginfo('url'); ?>/?page_id=193">View Events</a>
	</div>

	<div class="municipal-contact">
		<h3>Contact our Municipal Helpine:</h3>
		<ul>
			<li><?php the_field('muni_edmonton_ph') ?> (Edmonton)</li>
			<li><?php the_field('muni_calgary_ph') ?> (Calgary)</li>
		</ul>
		<em>or directly by e-mail to a member of our <a href="">Municipal Team</a> dedicated to serving municipalities and their related public entities.</em>
	</div>
</div><!--end of sidebar-->