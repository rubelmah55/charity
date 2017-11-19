<?php

 get_header(); ?>
				
		<!--=================================  HEADER START ==========================================-->
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
		
		<!--================================= HEADER ENDS ============================================-->	
		<!--================================= VARIOUS CAUSES START ==========================================-->
		
		<section class="section-padding section-1-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2><?php the_field('various_title'); ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10" />
				</div>
				<div class="row">
<?php 
	$various = get_field('various_item'); 
?>
<?php 
	foreach($various as $data) :
?>
					<div class="col-sm-4 text-center various-col">
						
						
						<a href="#"><img src="<?php echo $data['various-item-img']; ?>" alt="64x64x1" /></a>
						<h3><?php echo $data['various_item_title']; ?></h3>
						<p><?php echo $data['various_item_content']; ?></p>
						<?php endforeach; ?>
						<div class="progress-div">
							<p class="progress-value text-right"><?php the_field('progress_value'); ?></p>
							<div class="progress-bar-outer">
								<div class="progress-bar-inner-1"></div>
							</div>
							<p class="progress-title"><?php the_field('progress_title'); ?></p>
						</div>						
					</div>	
					<div class="col-sm-4 text-center responsive-top-space various-col">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/64x64x2.png" alt="64x64x2" /></a>
						<h3>Drought</h3>
						<p>
							Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
						</p>
						<div class="progress-div">
							<p class="progress-value text-right">(72%)</p>
							<div class="progress-bar-outer">
								<div class="progress-bar-inner-2"></div>
							</div>
							<p class="progress-title">$54,000/ $1,00,000</p>
						</div>						
					</div>	
					<div class="col-sm-4 text-center responsive-top-space various-col">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/64x64x3.png" alt="64x64x3" /></a>
						<h3>Education</h3>
						<p>
							Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
						</p>
						<div class="progress-div">
							<p class="progress-value text-right">(41%)</p>
							<div class="progress-bar-outer">
								<div class="progress-bar-inner-3"></div>
							</div>
							<p class="progress-title">$54,000/ $1,00,000</p>
						</div>						
					</div>						
				</div> 				
			</div>			
		</section>		
		
		<!--================================= VARIOUS CAUSES ENDS ==========================================-->
		
		<!--================================= WHO WE CARE START ==========================================-->
		
		<section class="section-3-bg who-care-section" id="about">
			<div class="container-fluid no_padding">				
 				<div class="row no-row">
					<div class="col-sm-6 who-care-img"></div>
					<div class="col-sm-6 who-care-col">
						<div class="heading-div-1">
							<p>Kindness Towards Humanity</p>
							<h2>Who We Care</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/img/100x3.png" alt="100x3" />
						</div>
						<div class="who-care-col-1">
							<p>
								Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
								Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos.
								Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos.
							</p>						
							<p class="second-para">
								Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
								Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos.
								Donec varius sodales orci. Class aptent taciti sociosqu torquent.
							</p>						
							<a href="#" class="btn">Learn More</a>							
						</div>	
					</div>
				</div>
			</div>			
		</section>		
		
		<!--================================= WHO WE CARE ENDS ==========================================-->
		
		<!--================================= HELPS TO REDUCE START ==========================================-->
		
		<section class="section-padding section-1-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2>Our Helps To Reduce</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10" />
				</div>
				<div class="row help-reduce-div">
					<div class="col-sm-6 help-reduce-col">
						<div class="row help-reduce-row-1 help-reduce-row-2 help-reduce-space">
							<div class="col-xs-2 col-sm-2">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/64x64x4.png" alt="64x64x4" /></a>
							</div>
							<div class="col-xs-10 col-sm-9 col-md-10">
								<h3>Education</h3>
								<p>
									Donec varius sodales orci. End of content. Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
								</p>
							</div>
						</div>
						<div class="row help-reduce-row-1 help-reduce-row-2 help-reduce-space">
							<div class="col-xs-2 col-sm-2">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/64x64x5.png" alt="64x64x5" /></a>
							</div>
							<div class="col-xs-10 col-sm-9 col-md-10">
								<h3>Drought</h3>
								<p>
									Donec varius sodales orci. End of content. Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
								</p>
							</div>
						</div>
						<div class="row help-reduce-row-1 help-reduce-row-3 help-reduce-space">
							<div class="col-xs-2 col-sm-2">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/64x64x6.png" alt="64x64x6" /></a>
							</div>
							<div class="col-xs-10 col-sm-9 col-md-10">
								<h3>Child Labour</h3>
								<p>
									Donec varius sodales orci. End of content. Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
								</p>
							</div>
						</div>						
					</div>	
					
					<div class="col-sm-6 help-reduce-col">
						<div class="row help-reduce-row-1 help-reduce-row-2 help-reduce-space">
							<div class="col-xs-2 col-sm-2">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/64x64x7.png" alt="64x64x7" /></a>
							</div>
							<div class="col-xs-10 col-sm-9 col-md-10">
								<h3>Poverty</h3>
								<p>
									Donec varius sodales orci. End of content. Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
								</p>
							</div>
						</div>
						<div class="row help-reduce-row-1 help-reduce-row-2 help-reduce-space">
							<div class="col-xs-2 col-sm-2">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/64x64x8.png" alt="64x64x8" /></a>
							</div>
							<div class="col-xs-10 col-sm-9 col-md-10">
								<h3>Infanticide</h3>
								<p>
									Donec varius sodales orci. End of content. Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
								</p>
							</div>
						</div>
						<div class="row help-reduce-row-1">
							<div class="col-xs-2 col-sm-2">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/64x64x9.png" alt="64x64x9" /></a>
							</div>
							<div class="col-xs-10 col-sm-9 col-md-10">
								<h3>War Violence</h3>
								<p>
									Donec varius sodales orci. End of content. Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
								</p>
							</div>
						</div>						
					</div>					
				</div> 				
			</div>			
		</section>		
		
		<!--================================= HELPS TO REDUCE ENDS ==========================================-->
		
		<!--================================= CAMPS WE DONE START ==========================================-->
		
		<section class="section-padding section-2-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2>Camps We Done</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10" />
				</div>
				<div class="row">
					<div class="col-sm-4 camps-done-col">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x250x1.jpg" alt="360x250x1" class="img-responsive" />
						<h3>Education Camp</h3>
						<p>
							Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
						</p>
						<a href="#" class="btn">Read More</a>		
					</div>	
					<div class="col-sm-4 camps-done-col responsive-top-space ">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x250x2.jpg" alt="360x250x2" class="img-responsive"/>
						<h3>Blood Donation</h3>
						<p>
							Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
						</p>
						<a href="#" class="btn">Read More</a>		
					</div>	
					<div class="col-sm-4 camps-done-col responsive-top-space ">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x250x3.jpg" alt="360x250x3" class="img-responsive"/>
						<h3>Poverty Relief</h3>
						<p>
							Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
						</p>
						<a href="#" class="btn">Read More</a>		
					</div>						
				</div> 				
			</div>			
		</section>		
		
		<!--================================= CAMPS WE DONE ENDS ==========================================-->		
		
		<!--================================= TOP DONATORS START ==========================================-->
		
		<section class="section-padding section-4-bg" id="donators">
			<div class="container">
				<div class="heading-div-2 text-center">
					<h2>We Honour Our Top Donators</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x2.png" alt="90x10x2" />
				</div>
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
				</div>				
				<div class="row donators-profile">
					 <div class="col-xs-6 col-sm-6 col-md-3">
						<div class="donators-profile-col text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/150x150x1.png" alt="150x150x1" />
							<p>Name</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 donator-top-space-1">
						<div class="donators-profile-col text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/150x150x2.png" alt="150x150x2" />
							<p>Name</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 donator-top-space">
						<div class="donators-profile-col text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/150x150x3.png" alt="150x150x3" />
							<p>Name</p>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 donator-top-space">
						<div class="donators-profile-col text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/150x150x4.png" alt="150x150x4" />
							<p>Name</p>
						</div>
					</div>
				</div> 	
				<div class="donators-btn text-center">
					<a href="#" class="btn btn-1">Read More</a>				
				</div>
			</div>			
		</section>		
		
		<!--================================= TOP DONATORS ENDS ==========================================-->
		
		<!--================================= OUR INVOLVEMENTS START ==========================================-->
		
		<section class="section-padding section-1-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2>Our Involvements</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div>
				<div class="row">					
					<div class="col-sm-4 involvements-col">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x250x4.jpg" alt="360x250x4" class="img-responsive"/>
						<h3>Education Camp For Poor</h3>
						<p>
							Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
						</p>
						<a href="#" class="btn">Read More</a>		
					</div>	
					<div class="col-sm-4 involvements-col responsive-top-space">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x250x5.jpg" alt="360x250x5" class="img-responsive"/>
						<h3>War Prevention initiative</h3>
						<p>
							Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
						</p>
						<a href="#" class="btn">Read More</a>		
					</div>	
					<div class="col-sm-4 involvements-col responsive-top-space">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x250x6.jpg" alt="360x250x6" class="img-responsive" />
						<h3>Education Camp For Poor</h3>
						<p>
							Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
						</p>
						<a href="#" class="btn">Read More</a>		
					</div>						
				</div> 				
			</div>			
		</section>		
		
		<!--================================= OUR INVOLVEMENTS ENDS ==========================================-->	
		
		<!--================================= ORPHAN CHILDREN START ==========================================-->
		
		<section class="section-padding orphan-children-section">
			<div class="container">	
				<div class="col-sm-12 orphan-children-col text-center">
					<h2>Donate Now To Orphan Children</h2>
					<p>
						Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
						Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
					</p>
					<a href="#" class="btn btn-1">Donate Now</a>		
				</div>
			</div>			
		</section>		
		
		<!--================================= ORPHAN CHILDREN ENDS ==========================================-->	
		
		<!--=================================  GALLERY START ==========================================-->
		
		<section class="section-padding section-1-bg" id="gallery">
			<div class="container">
				<div class="heading-div text-center">
					<h2>Gallery</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div>
 				<div class="row gallery-div">
					<div class="col-sm-4 col-xs-6 bottom-space">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x360x1.jpg" alt="360x360x1" class="img-responsive" />
					</div>					
					
					<div class="col-sm-4 col-xs-6 bottom-space">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x360x2.jpg" alt="360x360x2" class="img-responsive" />
					</div>	
					
					<div class="col-sm-4 col-xs-6 bottom-space">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x360x3.jpg" alt="360x360x3" class="img-responsive" />
					</div>					
				
					<div class="col-sm-4 col-xs-6 gallery-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x360x4.jpg" alt="360x360x4" class="img-responsive" />
					</div>					
					
					<div class="col-sm-4 col-xs-6 gallery-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x360x5.jpg" alt="360x360x5" class="img-responsive" />
					</div>	
					
					<div class="col-sm-4 col-xs-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/360x360x6.jpg" alt="360x360x6" class="img-responsive" />
					</div>						
				</div>
			</div>			
		</section>		
		
		<!--================================= GALLERY ENDS ==========================================-->
		
		<!--=================================  NEWS START ==========================================-->
		
		<section class="section-padding section-2-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2>Our Latest News</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div>
 				<div class="row news-main-row">
					<div class="col-sm-6">
						<div class="row news-row news-space">
							<div class="col-xs-1 col-sm-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/48x48x1.png" alt="48x48x1" />
							</div>
							<div class="col-xs-10 col-sm-10">
								<h3>Best Complementary</h3>
								<p class="news-date"><a href="#">Feb 01, 2017</a></p>
								<p>	Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
									Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
								</p>
							</div>
						</div>
						<div class="row news-row news-row-1 news-space">
							<div class="col-xs-1 col-sm-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/48x48x2.png" alt="48x48x2" />
							</div>
							<div class="col-xs-10 col-sm-10">
								<h3>Best Complementary</h3>
								<p class="news-date"><a href="#">Feb 01, 2017</a></p>
								<p>	Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
									Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
								</p>
							</div>
						</div>						
					</div>
					<div class="col-sm-6 news-second-col">
						<div class="row news-row news-space">
							<div class="col-xs-1 col-sm-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/48x48x3.png" alt="48x48x3" />
							</div>
							<div class="col-xs-10 col-sm-10">
								<h3>Best Complementary</h3>
								<p class="news-date"><a href="#">Feb 01, 2017</a></p>
								<p>	Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
									Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
								</p>
							</div>
						</div>
						<div class="row news-row news-row-1">
							<div class="col-xs-1 col-sm-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/48x48x4.png" alt="48x48x4" />
							</div>
							<div class="col-xs-10 col-sm-10">
								<h3>Best Complementary</h3>
								<p class="news-date"><a href="#">Feb 01, 2017</a></p>
								<p>	Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
									Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
								</p>
							</div>
						</div>						
					</div>					
				</div>							
			</div>			
		</section>		
		
		<!--================================= NEWS ENDS ==========================================-->		
		
		<!--=================================  VOLUNTEERS START ==========================================-->
		
		<section class="section-padding section-1-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2>Our Volunteers</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div> 			
				<div class="row volunteers-row-1">
					<div class="col-sm-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/590x250x2.jpg" alt="590x250x2" class="img-responsive" />
					</div>
					<div class="col-sm-6 text-center volunteers-col">
						<h3>John Peter</h3>
						<p>	Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos. Donec varius sodales orci.
						</p>
						<ul class="social-icon">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>					
				</div>	
				<div class="row volunteers-row-2">
					<div class="col-sm-6 col-sm-push-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/590x250x3.jpg" alt="590x250x3" class="img-responsive" />
					</div>
					<div class="col-sm-6 col-sm-pull-6 text-center volunteers-col">
						<h3>John Peter</h3>
						<p>	Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos. Donec varius sodales orci.
						</p>
						<ul class="social-icon">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>					
				</div>	
			</div>			
		</section>		
		
		<!--================================= VOLUNTEERS ENDS ==========================================-->
		
		<!--=================================  BEST MOVEMENT START ==========================================-->
		
		<section class="section-padding section-2-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2>Best Moment In Our Life</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div>
 				<div class="col-sm-12 best-moment">
					<img src="<?php echo get_template_directory_uri(); ?>/img/1000x400.jpg" alt="1000x400" class="img-responsive" />			
				</div>								
			</div>			
		</section>		
		
		<!--================================= BEST MOVEMENT ENDS ==========================================-->
				
		<!--=================================  UPCOMING EVENTS START ==========================================-->
		
		<section class="section-padding section-1-bg" id="events">
			<div class="container">
				<div class="heading-div text-center">
					<h2>Upcoming Events</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div> 			
				<div class="row events-row-1">
					<div class="col-sm-6 events-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/590x280x1.jpg" alt="590x280x1" class="img-responsive" />
					</div>
					<div class="col-sm-6 events-col">
						<h3>Wealth and Health</h3>
						<div class="col-sm-12 events-date-div">
							<div class="col-sm-6">
								<ul>
									<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/16x16x4.png" alt="16x16x4" /></a></li>
									<li> Montreal, Qc.</li>
								</ul>
							</div>	
							<div class="col-sm-6">							
								<ul>
									<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/16x16x5.png" alt="16x16x5" /></a></li>
									<li class="events-date">Feb 02, 2017</li>
								</ul>
							</div>
						</div>
						<p>Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
						</p>
						<p>	Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.
						Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
						</p>						
					</div>					
				</div>
				<div class="row events-second-row">
					<div class="col-sm-6 events-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/590x280x2.jpg" alt="590x280x2" class="img-responsive" />
					</div>
					<div class="col-sm-6 events-col">
						<h3>All Over World NGO Meet</h3>
						<div class="col-sm-12 events-date-div">
							<div class="col-sm-6">
								<ul>
									<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/16x16x4.png" alt="16x16x4" /></a></li>
									<li> Montreal, Qc.</li>
								</ul>
							</div>	
							<div class="col-sm-6">							
								<ul>
									<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/16x16x5.png" alt="16x16x5" /></a></li>
									<li class="events-date">Feb 02, 2017</li>
								</ul>
							</div>
						</div>
						<p>Donec varius sodales orci. Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
							Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
						</p>
						<p>	Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.
						Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content.
						</p>						
					</div>					
				</div>
			</div>			
		</section>		
		
		<!--================================= UPCOMING EVENTS ENDS ==========================================-->
		
		<!--=================================  TESTIMONIAL START ==========================================-->
		
		<section class="section-padding section-4-bg">
			<div class="container">
				<div class="heading-div-2 text-center">
					<h2>Testimonial</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x2.png" alt="90x10x2" />
				</div> 			
				<div class="col-sm-12">					
					<div class="testimonial-div text-center">						
						<img src="<?php echo get_template_directory_uri(); ?>/img/100x100x1.png" alt="100x100x1"/>
						<p>	"Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.
						Class aptent taciti sociosqu torquent, per inceptos himenaeos. End of content."
						</p>
						<div class="testimonial-border"></div>
						<p class="testimonial-name"><span>Mark Davis,</span> Social Activist</p>
					</div>					
				</div>				
			</div>			
		</section>		
		
		<!--================================= TESTIMONIAL ENDS ==========================================-->
		
		<!--================================= MOVING WITH START ==========================================-->
		
		<section class="section-padding section-2-bg">
			<div class="container">
				<div class="heading-div text-center">
					<h2>Moving with</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div> 			
				<div class="row moving-row">					
					<div class="col-sm-6 col-md-3 text-center moving-col moving-col-1">
						<a href="#" class="bottom-space"><img src="<?php echo get_template_directory_uri(); ?>/img/80x80x1.png" alt="80x80x1" /></a>
						<h3>Kindness</h3>
						<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.</p>
					</div>
					<div class="col-sm-6 col-md-3 text-center moving-col moving-col-2 ">
						<a href="#" class="bottom-space"><img src="<?php echo get_template_directory_uri(); ?>/img/80x80x2.png" alt="80x80x2" /></a>
						<h3>Dedication</h3>
						<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.</p>
					</div>
					<div class="col-sm-6 col-md-3 text-center moving-col moving-col-1 moving-4">
						<a href="#" class="bottom-space"><img src="<?php echo get_template_directory_uri(); ?>/img/80x80x3.png" alt="80x80x3" /></a>
						<h3>Kindness</h3>
						<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.</p>
					</div>
					<div class="col-sm-6 col-md-3 text-center moving-col moving-col-2 moving-3">
						<a href="#" class="bottom-space"><img src="<?php echo get_template_directory_uri(); ?>/img/80x80x4.png" alt="80x80x4" /></a>
						<h3>Kindness</h3>
						<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.</p>
					</div>
				</div>				
			</div>			
		</section>		
		
		<!--================================= MOVING WITH ENDS ==========================================-->		
			
		<!--================================= WONDERFUL DAY START ==========================================-->
		
		<section class="section-padding section-1-bg">
			<div class="container">							
				<div class="row">					
					<div class="col-sm-6 wonderful-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/590x280x3.jpg" alt="590x280x3"  class="img-responsive"/>
					</div>
					<div class="col-sm-6 wonderful-col">
						<h3>Wonderful Day</h3>
						<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.
						Class aptent taciti sociosqu torquent, per inceptos himenaeos.Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.
						</p>
						<a href="#" class="btn">Read More</a>	
					</div>
				</div>				
			</div>			
		</section>		
		
		<!--================================= WONDERFUL DAY ENDS ==========================================-->
		
		<!--================================= HAPPIEST MOMENT START ==========================================-->
		
		<section class="section-padding section-2-bg">
			<div class="container">							
				<div class="row">					
					<div class="col-sm-6 col-sm-push-6 happiest-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/590x280x4.jpg" alt="590x280x4"  class="img-responsive"/>
					</div>
					<div class="col-sm-6 col-sm-pull-6 happiest-col">
						<h3>Happiest Moment</h3>
						<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.
						Class aptent taciti sociosqu torquent, per inceptos himenaeos.Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.Donec varius sodales orci.
						</p>
						<a href="#" class="btn">Read More</a>	
					</div>
				</div>				
			</div>			
		</section>		
		
		<!--================================= HAPPIEST MOMENT ENDS ==========================================-->
		
		<!--================================= FAQ START ==========================================-->
		
		<section class="section-padding section-1-bg">
			<div class="container">							
				<div class="heading-div text-center">
					<h2>Faq</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div> 
				<div class="row">					
					<div class="col-sm-6 faq-col">
						<div class="col-sm-12 faq-col-1">
							<ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/32x32x5.png" alt="32x32x5"/></li>
								<li><h3>Who We Are and Why?</h3></li>
							</ul>
							<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
							Class aptent taciti sociosqu torquent, per inceptos himenaeos.
							</p>	
						</div>
						<div class="col-sm-12 faq-col-1">
							<ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/32x32x5.png" alt="32x32x5"/></li>
								<li><h3>How To Become Volunteers?</h3></li>
							</ul>
							<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
							Class aptent taciti sociosqu torquent, per inceptos himenaeos.
							</p>	
						</div>
						<div class="col-sm-12">
							<ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/32x32x5.png" alt="32x32x5"/></li>
								<li><h3>How Can I Donate To The Orphanage?</h3></li>
							</ul>
							<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
							Class aptent taciti sociosqu torquent, per inceptos himenaeos.
							</p>	
						</div>
					</div>	
					<div class="col-sm-6 faq-col">
						<div class="col-sm-12 faq-col-1">
							<ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/32x32x5.png" alt="32x32x5"/></li>
								<li><h3>Who We Are and Why?</h3></li>
							</ul>
							<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
							Class aptent taciti sociosqu torquent, per inceptos himenaeos.
							</p>	
						</div>
						<div class="col-sm-12 faq-col-1">
							<ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/32x32x5.png" alt="32x32x5"/></li>
								<li><h3>How To Become Volunteers?</h3></li>
							</ul>
							<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
							Class aptent taciti sociosqu torquent, per inceptos himenaeos.
							</p>	
						</div>
						<div class="col-sm-12">
							<ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/32x32x5.png" alt="32x32x5"/></li>
								<li><h3>How Can I Donate To The Orphanage?</h3></li>
							</ul>
							<p>Aenean arcu viverra varius sodales sociosqu torquent, per inceptos himenaeos.
							Class aptent taciti sociosqu torquent, per inceptos himenaeos.
							</p>	
						</div>
					</div>	
				</div>	
			</div>			
		</section>		
		
		<!--================================= FAQ ENDS ==========================================-->
		
		<!--================================= SPONSORS START ==========================================-->
		
		<section class="section-padding section-1-bg">
			<div class="container">							
				<div class="heading-div text-center">
					<h2>Our Beloved Sponsors</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/90x10x1.png" alt="90x10x1" />
				</div> 
				<div class="row sponsors-row">					
					<div class="col-xs-6 col-sm-4 col-md-2 sponsors-space-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/180x120x1.png" alt="180x120x1" class="img-responsive"/>	
					</div>
					<div class="col-xs-6 col-sm-4 col-md-2 sponsors-space-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/180x120x2.png" alt="180x120x2" class="img-responsive"/>	
					</div>
					<div class="col-xs-6 col-sm-4 col-md-2 sponsors-space sponsors-space-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/180x120x3.png" alt="180x120x3" class="img-responsive"/>	
					</div>
					<div class="col-xs-6 col-sm-4 col-md-2 sponsors-space sponsors-space-1 sponsors-space-2">
						<img src="<?php echo get_template_directory_uri(); ?>/img/180x120x4.png" alt="180x120x4" class="img-responsive"/>	
					</div>
					<div class="col-xs-6 col-sm-4 col-md-2 sponsors-space-1 sponsors-space-2">
						<img src="<?php echo get_template_directory_uri(); ?>/img/180x120x5.png" alt="180x120x5" class="img-responsive"/>	
					</div>
					<div class="col-xs-6 col-sm-4 col-md-2 sponsors-space-2">
						<img src="<?php echo get_template_directory_uri(); ?>/img/180x120x6.png" alt="180x120x6" class="img-responsive"/>	
					</div>
				</div>	
			</div>			
		</section>		
		
		<!--================================= SPONSORS ENDS ==========================================-->
		
		<!--================================= SINGLE IMAGE START ==========================================-->
		
		<div class="section-2-bg">
			<div class="container">	
				<img src="<?php echo get_template_directory_uri(); ?>/img/1500x600.jpg" alt="1500x600" class="img-responsive" />				
			</div>			
		</div>		
		
		<!--================================= SINGLE IMAGE ENDS ==========================================-->		
<?php get_footer(); ?>