<div class="row volunteers-row-1">
	<div class="col-sm-6">
		<img src="<?php echo $volunteer['picture']; ?>" alt="590x250x3" class="img-responsive" />
	</div>
	<div class="col-sm-6 text-center volunteers-col">
		<h3><?php echo $volunteer['name']; ?></h3>
		<p><?php echo $volunteer['content']; ?></p>
		<ul class="social-icon">
			<?php 
				$socials = $volunteer['socials'];
			?>
			<?php 
				foreach($socials as $social) :
			?>
				<li><a href="<?php echo $social['url'] ?>"><i class="fa <?php echo $social['icon'] ?>"></i></a></li>
			<?php endforeach; ?>
		</ul>
	</div>					
</div>	