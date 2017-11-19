<div class="col-sm-6">
	<div class="col-xs-1 col-sm-2">
		<img src="<?php echo get_template_directory_uri(); ?>/img/48x48x2.png" alt="48x48x2" />
	</div>
	<div class="col-xs-10 col-sm-10">
		<h3><?php the_title(); ?></h3>
		<p class="news-date"><?php the_date('M j, Y'); ?></p>
		<?php the_content(); ?>
	</div>
</div> <!-- end of col-md-6 -->