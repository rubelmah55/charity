<?php
/*
Template Name: Homepage
*/

 get_header(); 
$page_id = get_queried_object_id();
 ?>
				
		<!--=================================  HEADER START ==========================================-->
		<?php 
		if(get_field('header_enable', $page_id)):
		?>
		<div class="header-image clearfix" id="home" style="background-image: url(<?php the_field('header_image'); ?>);">			
			<div class="header-section">
				<div class="container notifyModal">
					<div class="col-sm-12 header-div text-center">						
						<h1><?php the_field('banner_title'); ?></h1>
						<p><?php the_field('banner_content'); ?></p>
						<a href="#fadeandscale" class="btn header-btn fadeandscale_open"><?php the_field('banner_button_text'); ?></a>
					</div>			
				</div>
			</div>	
		</div>
		<?php endif; ?>
		<!--================================= HEADER ENDS ============================================-->	
		<!--================================= VARIOUS CAUSES START ==========================================-->
	<?php 
	if(get_field('various_enable', $page_id)):
	?>	
		<section class="section-padding section-1-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('various_title'); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10" />
				</div>
				<div class="row">
					<?php 
						$various = get_field('various_item', $page_id);
					?>
					<?php 
						foreach($various as $data) :
					?>
					<div class="col-sm-4 text-center various-col">
						
						
						<a href="#"><img src="<?php echo $data['various-item-img']; ?>" alt="64x64x1" /></a>
						<h3><?php echo $data['various_item_title']; ?></h3>
						<p><?php echo $data['various_item_content']; ?></p>
						
						<div class="progress-div">
							<p class="progress-value text-right">(<?php echo $data['progress_value']; ?>)</p>
							<div class="progress-bar-outer">
								<div class="progress-bar-inner-1" style="width: <?php echo $data['progress_value']; ?>%"></div>
							</div>
							<p class="progress-title"><?php echo $data['progress_title']; ?></p>
						</div>						
					</div>	
					<?php endforeach; ?>
				</div> 				
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= VARIOUS CAUSES ENDS ==========================================-->
		
		<!--================================= WHO WE CARE START ==========================================-->
	<?php 
	if(get_field('care_enable', $page_id)):
	?>	
		<section class="section-3-bg who-care-section" id="about">
			<div class="container-fluid no_padding">				
 				<div class="row no-row">
					<div class="col-sm-6 who-care-img" style="background-image: url(<?php the_field('we_care_image'); ?>)"></div>
					<div class="col-sm-6 who-care-col">
						<div class="heading-div-1">
							<p><?php the_field('we_care_title_top'); ?></p>
							<h2><?php the_field('we_care_title'); ?></h2>
							<img src="<?php echo get_template_directory_uri(); ?>/img/100x3.png" alt="100x3" />
						</div>
						<div class="who-care-col-1">
							<p class="second-para"><?php the_field('we_care_content'); ?>
							</p>						
							<a href="<?php the_field('we_care_button_url'); ?>" class="btn"><?php the_field('we_care_button_text'); ?></a>							
						</div>	
					</div>
				</div>
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= WHO WE CARE ENDS ==========================================-->
		
		<!--================================= HELPS TO REDUCE START ==========================================-->
	<?php 
	if(get_field('our_helps_enable', $page_id)):
	?>	
		<section class="section-padding section-1-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('our_help_title'); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10" />
				</div>
				<div class="row help-reduce-div">
				<?php
				$ourhelp = get_field('our_help_item', $page_id);
				list($left, $right) = array_chunk($ourhelp, ceil(count($ourhelp) / 2));
				?>
					<div class="col-sm-6 help-reduce-col">
					<?php foreach($left as $help): ?>
						<div class="row help-reduce-row-1 help-reduce-row-2 help-reduce-space">
							<div class="col-xs-2 col-sm-2">
								<a href="#"><img src="<?php echo $help['item_img']; ?>" alt="64x64x4" /></a>
							</div>
							<div class="col-xs-10 col-sm-9 col-md-10">
								<h3><?php echo $help['item_title']; ?></h3>
								<p><?php echo $help['item_content']; ?>
								</p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
					<div class="col-sm-6 help-reduce-col">
					<?php foreach($right as $help): ?>
						<div class="row help-reduce-row-1 help-reduce-row-2 help-reduce-space">
							<div class="col-xs-2 col-sm-2">
								<a href="#"><img src="<?php echo $help['item_img']; ?>" alt="64x64x4" /></a>
							</div>
							<div class="col-xs-10 col-sm-9 col-md-10">
								<h3><?php echo $help['item_title']; ?></h3>
								<p><?php echo $help['item_content']; ?>
								</p>
							</div>
						</div>

						<?php endforeach; ?>
					</div>					
				</div> 				
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= HELPS TO REDUCE ENDS ==========================================-->
		
		<!--================================= CAMPS WE DONE START ==========================================-->
	<?php 
	if(get_field('camp_enable', $page_id)):
	?>	
		<section class="section-padding section-2-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('camps_title'); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10" />
				</div>
				<div class="row">

					<?php 
						$camps = get_field('camp_item', $page_id);
					?>
					<?php 
						foreach($camps as $cam) :
					?>
					<div class="col-sm-4 camps-done-col">
						<img src="<?php echo $cam['item_img']; ?>" alt="360x250x1" class="img-responsive" />
						<h3><?php echo $cam['item_title']; ?></h3>
						<p><?php echo $cam['item_content']; ?></p>
						<a href="<?php echo $cam['button_url']; ?>" class="btn"><?php echo $cam['button_text']; ?></a>		
					</div>
				<?php endforeach; ?>					
				</div> 				
			</div>			
		</section>		
	<?php endif; ?>
		<!--================================= CAMPS WE DONE ENDS ==========================================-->		
		
		<!--================================= TOP DONATORS START ==========================================-->
	<?php 
	if(get_field('donator_enable', $page_id)):
	?>	
		<section class="section-padding section-4-bg" id="donators">
			<div class="container">
				<div class="heading-div-2 text-center">
					<h2><?php the_field('donator_title'); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x2.png" alt="90x10x2" />
				</div><!-- 
				<div class="row donators-details">
					<div class="col-xs-4 col-sm-4">
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/16x16x1.png" alt="16x16x1" /></li>
							<li><p>Tue-8.00 am</p></li>
						</ul>
					</div>
					<div class="col-xs-4 col-sm-4">
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/16x16x2.png" alt="16x16x1" /></li>
							<li><p>Nov 20, 2016</p></li>
						</ul>
					</div>
					<div class="col-xs-4 col-sm-4">
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/16x16x3.png" alt="16x16x1" /></li>
							<li><p>Montreal, Qc</p></li>
						</ul>
					</div>
				</div> -->				
				<div class="row donators-profile">
				<?php 
					$donator = get_field('donator_item', $page_id);
				?>
				<?php 
					foreach($donator as $dona) :
				?>
					 <div class="col-xs-6 col-sm-6 col-md-3">
						<div class="donators-profile-col text-center">
							<img src="<?php echo $dona['donator_img']; ?>" alt="150x150x1" />
							<p><?php echo $dona['donator_name']; ?></p>
						</div>
					</div>
				<?php endforeach; ?>

				</div> 	
				<div class="donators-btn text-center">
					<a href="<?php echo $dona['button_url']; ?>" class="btn btn-1"><?php echo $dona['button_text']; ?></a>				
				</div>
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= TOP DONATORS ENDS ==========================================-->
		
		<!--================================= OUR INVOLVEMENTS START ==========================================-->
	<?php 
	if(get_field('involvement_enable', $page_id)):
	?>	
		<section class="section-padding section-1-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('involvement_title'); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div>
				<div class="row">

					<?php 
						$involvement = get_field('involvement_item', $page_id);
					?>
					<?php 
						foreach($involvement as $invo) :
					?>

					<div class="col-sm-4 involvements-col">
						<img src="<?php echo $invo['item_img']; ?>" alt="360x250x4" class="img-responsive"/>
						<h3><?php echo $invo['item_title']; ?></h3>
						<p><?php echo $invo['item_content']; ?></p>
						<a href="<?php echo $invo['button_url']; ?>" class="btn"><?php echo $invo['button_text']; ?></a>		
					</div>
				<?php endforeach; ?>

				</div> 				
			</div>			
		</section>		
	<?php endif; ?>
		<!--================================= OUR INVOLVEMENTS ENDS ==========================================-->	
		
		<!--================================= ORPHAN CHILDREN START ==========================================-->
	<?php 
	if(get_field('orphan_enable', $page_id)):
	?>	
		<section class="section-padding orphan-children-section" style="background-image: url(<?php the_field('orphan_children_bg'); ?>)">
			<div class="container">	
				<div class="col-sm-12 orphan-children-col text-center">
					<h2><?php the_field('orphan_children_title'); ?></h2>
					<p><?php the_field('orphan_children_content'); ?></p>
					<a href="<?php the_field('orphan_children_button_url'); ?>" class="btn btn-1"><?php the_field('orphan_children_button_text'); ?></a>		
				</div>
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= ORPHAN CHILDREN ENDS ==========================================-->	
		
		<!--=================================  GALLERY START ==========================================-->
	<?php 
	if(get_field('gallery_enable', $page_id)):
	?>	
		<section class="section-padding section-1-bg" id="gallery">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('gallery_title'); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div>
 				<div class="row gallery-div">
					<?php 
						$gallery = get_field('gallery_img', $page_id);
					?>
					<?php 
						foreach($gallery as $gal) :
					?>

					<div class="col-sm-4 col-xs-6 bottom-space">
						<img src="<?php echo $gal['item_img']; ?>" alt="360x360x1" class="img-responsive" />
					</div>
				
					<?php endforeach; ?>
				</div>
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= GALLERY ENDS ==========================================-->
		
		<!--=================================  NEWS START ==========================================-->
	<?php 
	if(get_field('new_enable', $page_id)):
	?>
		<?php 
		$args = array(
			'post_type' => 'post',
		);
		$loop = new WP_Query($args);
		if($loop->have_posts()) :
		?>	
		<section class="section-padding section-2-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('latest_news_title'); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div>
 				<div class="row news-main-row">
				<?php 
				while($loop->have_posts()) : $loop->the_post();
					get_template_part('template-parts/content-loop'); 
				endwhile; 
				?>
				</div>							
			</div>			
		</section>		
		<?php endif; ?>
	<?php endif; ?>
		<!--================================= NEWS ENDS ==========================================-->		
		
		<!--=================================  VOLUNTEERS START ==========================================-->
	<?php 
	if(get_field('volunteer_enable', $page_id)):
	?>
		<?php 
		if($volunteers = get_field('volunteer_item', $page_id)) :
		?> 
		
		<section class="section-padding section-1-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('volunteer_title', $page_id); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div> 

					<?php 
					$count = 1;
					foreach($volunteers as $volunteer){
						$row = ($count % 2 != 0) ? 1 : 2;
						include('template-parts/volunteers-row-' . $row . '.php');
						$count++;
					}
					?>			
			</div>			
		</section>		
		<?php endif; ?>		
	<?php endif; ?>		
		<!--================================= VOLUNTEERS ENDS ==========================================-->
		
		<!--=================================  BEST MOVEMENT START ==========================================-->
	<?php 
	if(get_field('moment_enable', $page_id)):
	?>
		<section class="section-padding section-2-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('best_moment_title', $page_id); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div>
 				<div class="col-sm-12 best-moment">
					<img src="<?php the_field('best_moment_img', $page_id); ?>" alt="1000x400" class="img-responsive" />			
				</div>								
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= BEST MOVEMENT ENDS ==========================================-->
				
		<!--=================================  UPCOMING EVENTS START ==========================================-->
	<?php 
		if(get_field('event_enable', $page_id)):
	?>
		<?php 
			$args = array( 
				'post_type' => 'event', 
				'posts_per_page' => 10 
			);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) : 
		?>		
		<section class="section-padding section-1-bg" id="events" style="padding-bottom: 60px;">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('event_main_title', $page_id); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div>
 				<?php 
 				while($loop->have_posts()) : $loop->the_post();
 				?>
				<div class="row events-row-1">
					<div class="col-sm-6 events-img">
						<?php the_post_thumbnail('event'); ?>
					</div>
					<div class="col-sm-6 events-col">
						<h3><?php the_title(); ?></h3>
						<div class="col-sm-12 events-date-div">
							<div class="col-sm-6">
								<ul>
									<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/16x16x4.png" alt="16x16x4" /></a></li>
									<li><?php the_field('event_location'); ?></li>
								</ul>
							</div>	
							<div class="col-sm-6">							
								<ul>
									<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/16x16x5.png" alt="16x16x5" /></a></li>
									<li class="events-date"><?php the_field('event_date'); ?></li>
								</ul>
							</div>
						</div>
						<p><?php the_content(); ?></p>						
					</div>					
				</div>
				<?php endwhile; ?>
			</div>			
		</section>		
		<?php endif; 
		wp_reset_postdata()
		?>
	<?php endif; ?>
		<!--================================= UPCOMING EVENTS ENDS ==========================================-->
		
		<!--=================================  TESTIMONIAL START ==========================================-->
	<?php 
	if(get_field('testimonial_enable', $page_id)):
	?>	
		<section class="section-padding section-4-bg">
			<div class="container">
				<div class="heading-div-2 text-center">
					<h2><?php the_field('testimonial_title', $page_id); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x2.png" alt="90x10x2" />
				</div> 			
				<div class="col-sm-12">					
					<div class="testimonial-div text-center">
						<img src="<?php the_field('testimonial_img', $page_id); ?>" alt="100x100x1"/>
						<p><?php the_field('testimonial_content', $page_id); ?></p>
						<div class="testimonial-border"></div>
						<p class="testimonial-name"><span><?php the_field('testimonial_name', $page_id); ?>,</span><?php the_field('testimonial_position', $page_id); ?></p>
					</div>					
				</div>				
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= TESTIMONIAL ENDS ==========================================-->
		
		<!--================================= MOVING WITH START ==========================================-->
	<?php 
	if(get_field('moving_enable', $page_id)):
	?>	
		<section class="section-padding section-2-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('moving_title', $page_id); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div> 			
				<div class="row moving-row">	

					<?php 
						$moving = get_field('moving_item', $page_id);
					?>
					<?php 
						foreach($moving as $mov) :
					?>				
					<div class="col-sm-6 col-md-3 text-center moving-col moving-col-1">
						<a href="#" class="bottom-space"><img src="<?php echo $mov['item_img']; ?>" alt="80x80x1" /></a>
						<h3><?php echo $mov['item_title']; ?></h3>
						<p><?php echo $mov['item_content']; ?></p>
					</div>
					<?php endforeach; ?>
				</div>				
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= MOVING WITH ENDS ==========================================-->		
			
		<!--================================= WONDERFUL DAY START ==========================================-->
	<?php 
	if(get_field('wonderful_enable', $page_id)):
	?>	
		<section class="section-padding section-1-bg">
			<div class="container">							
				<div class="row">					
					<div class="col-sm-6 wonderful-img">
						<img src="<?php the_field('wonderful_img', $page_id); ?>" alt="590x280x3"  class="img-responsive"/>
					</div>
					<div class="col-sm-6 wonderful-col">
						<h3><?php the_field('wonderful_title', $page_id); ?></h3>
						<p><?php the_field('wonderful_content', $page_id); ?></p>
						<a href="<?php the_field('wonderful_button_url', $page_id); ?>" class="btn"><?php the_field('wonderful_button_text', $page_id); ?></a>	
					</div>
				</div>				
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= WONDERFUL DAY ENDS ==========================================-->
		
		<!--================================= HAPPIEST MOMENT START ==========================================-->
	<?php 
	if(get_field('happiest_enable', $page_id)):
	?>	
		<section class="section-padding section-2-bg">
			<div class="container">							
				<div class="row">					
					<div class="col-sm-6 col-sm-push-6 happiest-img">
						<img src="<?php the_field('happiest_img', $page_id); ?>" alt="590x280x4"  class="img-responsive"/>
					</div>
					<div class="col-sm-6 col-sm-pull-6 happiest-col">
						<h3><?php the_field('happiest_title', $page_id); ?></h3>
						<p><?php the_field('happiest_content', $page_id); ?></p>
						<a href="<?php the_field('happiest_button_url', $page_id); ?>" class="btn"><?php the_field('happiest_button_text', $page_id); ?></a>	
					</div>
				</div>				
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= HAPPIEST MOMENT ENDS ==========================================-->
		
		<!--================================= FAQ START ==========================================-->
	<?php 
	if(get_field('faq_enable', $page_id)):
	?>	
		<section class="section-padding section-1-bg">
			<div class="container">							
				<div class="heading-div text-center">
					<h2><?php the_field('faq_title', $page_id); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div> 
				<div class="row">					
					<div class="col-sm-12 faq-col">
						<?php 
							$faq = get_field('faq_item', $page_id);
						?>
						<?php 
							foreach($faq as $fa) :
						?>
						<div class="col-sm-6 faq-col-1">
							<ul>
								<li><img src="<?php echo $fa['icon']; ?>" alt="32x32x5"/></li>
								<li><h3><?php echo $fa['title']; ?></h3></li>
							</ul>
							<p><?php echo $fa['content']; ?></p>	
						</div>
					<?php endforeach; ?>
					</div>
				</div>	
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= FAQ ENDS ==========================================-->
		
		<!--================================= SPONSORS START ==========================================-->
	<?php 
	if(get_field('sponsor_enable', $page_id)):
	?>		
		<section class="section-padding section-1-bg">
			<div class="container">							
				<div class="heading-div text-center">
					<h2><?php the_field('sponsor_title', $page_id); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div> 
				<div class="row sponsors-row">
	
				<?php 
					$sponsor = get_field('sponsor_item', $page_id);
				?>
				<?php 
					foreach($sponsor as $spon) :
				?>
					<div class="col-xs-6 col-sm-4 col-md-2 sponsors-space-1">
						<img src="<?php echo $spon['sponsor_img']; ?>" alt="180x120x1" class="img-responsive"/>	
					</div>
				
				<?php endforeach; ?>
				</div>	
			</div>			
		</section>		
	<?php endif; ?>	
		<!--================================= SPONSORS ENDS ==========================================-->
		
		<!--================================= SINGLE IMAGE START ==========================================-->
		
		<div class="section-2-bg">
			<div class="container">	
				<img src="<?php the_field('sponsor_bottom_img', $page_id) ?>" alt="1500x600" class="img-responsive" />				
			</div>			
		</div>		
		
		<!--================================= SINGLE IMAGE ENDS ==========================================-->		
<?php get_footer(); ?>