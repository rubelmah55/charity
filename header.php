
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
		<?php if (get_field('favicon', 'options')): ?>
	<link rel="icon" href="<?php the_field('favicon', 'options'); ?>" sizes="32x32">
	<?php endif; ?>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-fixed-top" data-offset="75">
		<!-- PAGE LAYOUT STARTS HERE -->
		<!--================================= NAVIGATION START =============================================-->
		<header class="clearfix">
			<nav class="navbar navbar-default navbar-fixed-top clearfix" id="top-nav">
				<div class="container">
					<div class="logo-image">
						<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php $logo = get_field('logo', 'options'); if($logo) : ?>
                                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/150x50.png" alt="">
                                <?php endif; ?>
                            </a>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>					
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right" id="menu-list">
							<li class="menu">
								<a href="#home" class="pagescroll">
								Home
								</a>
							</li>
							<li class="menu">
								<a href="#about" class="pagescroll">
									About
								</a>
							</li>									
							<li class="menu">
								<a href="#donators" class="pagescroll">
								Donators
								</a>
							</li>	
							<li class="menu">
								<a href="#gallery" class="pagescroll">
								Gallery
								</a>
							</li>
							<li class="menu">
								<a href="#events" class="pagescroll">
								Events
								</a>
							</li>
							<li class="menu">
								<a href="#contact" class="pagescroll">
								Contact
								</a>
							</li>							
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
			</nav>
		</header>
		<!--================================= NAVIGATION ENDS ==============================================-->
