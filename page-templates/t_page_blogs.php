<?php
/*
 Template Name: Page Entradas
 Template Post Type: post
 */
	get_header();
?>


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

							<?php
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/post/content', get_post_format() );

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								endwhile; // End of the loop.
								?>

							</div>
						</div>
						</div>
				</section>


<?php get_footer(); ?>




