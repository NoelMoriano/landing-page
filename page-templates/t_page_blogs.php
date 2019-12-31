<?php
/*
 Template Name: Page Entradas
 Template Post Type: post
 */
	get_header();
?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<section class="content-blog-page">
						<div class="container-articles-content">
						<div class="container-titles">
							<div class="container-title-one">
								<span class="text-small">Compartimos</span>
								<span class="text-title">NUESTRA EXPERIENCIA</span>
							</div>
						</div>
						<div class="container-blog-articles">
							<div class="content-items-articles">

						<?php while (have_posts()) : the_posts();?>
								<div class="item-article">
								
									<div class="description-item">
										<a href="#"><span class="title-article"><?php the_archive_title();?></span></a>
							
										<p class="description-article"><?php the_archive_description(); ?></p>
									</div>
								</div>
						<?php endwhile; ?>

							</div>
						</div>
						</div>
				</section>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

<?php get_footer(); ?>


