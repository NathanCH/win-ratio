<?php
get_header();
?>
	<section class="Content">
		<div class="Section Section--grey">
			<?php echo get_template_part('templates/content-process'); ?>
		</div>
		<div class="Section">
			<div class="row">
				<div class="small-12 column">
					<h2 class="Heading-2">Services</h2>
				</div>
			</div>
			<div class="Service">
				<div class="row">
					<div class="small-12 medium-6 columns">
						<div class="Service__content">
							<div class="Service__container">
								<h3 class="Service__title Heading-3">Turn-Key Proposal Services</h3>
								<p class="Service__text Paragraph">
									We’ll lead and staff a proposal of any size, working 
									collaboratively with your business development and 
									technical leaders. We will assess the job and recommend 
									the combination of services that will add the most 
									value: management, writing, editing, graphics, and 
									production.
								</p>
								<a class="Service__button Button Button--text Button--arrow" href="#">
									Learn More
								</a>
							</div>
						</div>
					</div>
					<div class="small-12 medium-5 medium-offset-1 columns">
						<img class="Service__photo" src="http://placehold.it/400x300" />
					</div>
				</div>
			</div>
			<div class="Service">
				<div class="row">
					<div class="small-12 medium-5 columns">
						<img class="Service__photo" src="http://placehold.it/400x300" />
					</div>
					<div class="small-12 medium-6 medium-offset-1 columns">
						<div class="Service__content">
							<div class="Service__container">
								<h3 class="Service__title Heading-3">À la Carte Proposal Services</h3>
								<p class="Service__text Paragraph">
									Even on well-staffed proposal teams, sections and tasks 
									fall through the cracks. We can jump in to rewrite a section, 
									workshop the executive summary, create logos, icons, and 
									graphics, or provide an end-to-end edit with fresh eyes.
								</p>
								<a class="Service__button Button Button--text Button--arrow"  href="#">
									Learn More
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="Section Section--grey">
			<div class="row">
				<div class="small-12 medium-6 columns">
					<h3 class="Heading-3">Proposal Coaching</h3>
					<p class="Paragraph">
						In a half-day, we’ll teach your technical and business 
						development specialists to write more effective proposal 
						content.
					</p>
					<a class="Button Button--text Button--arrow" href="#">
						Learn More
					</a>
				</div>
				<div class="small-12 medium-6 columns">
					<h3 class="Heading-3">Content Libraries</h3>
					<p class="Paragraph">
						Reusable content libraries are key to increasing a sales 
						or proposal team’s efficiency. We support you in populating 
						libraries for projects, resumes, forms, logos, and more.
					</p>
					<a class="Button Button--text Button--arrow" href="#">
						Learn More
					</a>
				</div>
			</div>
		</div>
		<div class="Section Section--bridge">
			<?php echo get_template_part('templates/content-benefits'); ?>
		</div>
	</section>
<?php
get_footer();
?>