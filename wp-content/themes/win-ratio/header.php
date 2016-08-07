<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Win Ratio">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class('Body'); ?> >
		<section class="Hero">
			<header class="Header row column">
				<div class="Header__logo float-left">
					<a class="Logo" href="/">
						Win Ratio
					</a>
				</div>
				<div class="Header__menu float-right">
					<div class="Menu Menu--header">
						<button class="Menu__toggle">
							<i class="fa fa-bars"></i>
						</button>
						<?php
						wp_nav_menu([
							'theme_locations' => 'header-menu',
							'container' => false,
							'menu_class' => 'Menu__nav'
						]);
						?>
					</div>
				</div>
			</header>
			<div class="Lead">
				<div class="Lead__brand">Win / Ratio</div>
				<div class="Lead__tag">
					Excellence in proposals through 
					people, process, and technology
				</div>
			</div>
		</section>