	<section class="SiteBottom">
		<div class="row">
			<div class="small-12 medium-8 columns">
				<div class="SiteBottom__content">
					<div class="Heading-3 Heading--white">Contact</div>
					<div class="Menu Menu--alt">
						<ul class="Menu__nav">
							<li class="Menu__item">
								<i class="fa fa-phone"></i> 604-928-3534
							</li>
							<li class="Menu__item">
								<i class="fa fa-envelope"></i> sarah@winratio.ca
							</li>
						</ul>
					</div>	
				</div>
			</div>
			<div class="small-12 medium-4 columns">
				<div class="SiteBottom__logo">
					<a class="Logo Logo--white" href="/">
						Win Ratio
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="Footer">
		<div class="row">
			<div class="small-12 medium-6 columns">
				<div class="Footer__copyright">
					Win Ratio &copy; <?php echo date('Y'); ?>
				</div>
			</div>
			<div class="small-12 medium-6 columns">
				<div class="Footer__menu">
					<ul class="SocialMenu">
						<li class="SocialMenu__item">
							<a class="SocialMenu__link" href="#">
								<i class="fa fa-google"></i>
							</a>
						</li>
						<li class="SocialMenu__item">
							<a class="SocialMenu__link" href="#">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li class="SocialMenu__item">
							<a class="SocialMenu__link" href="#">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li class="SocialMenu__item">
							<a class="SocialMenu__link" href="#">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('templates/google-analytics'); ?>
	<?php wp_footer(); ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
	<script>
		$('.Menu__toggle').on('click', function() {
			$(this).parent('.Menu').toggleClass('Menu--open');
			$('body').toggleClass('Body--noscroll');
		});
	</script>
	</body>
</html>