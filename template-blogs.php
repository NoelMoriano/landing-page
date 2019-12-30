<?php
/**
 * Template Name: Blog
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

		<?php while (have_posts()) : the_posts(); ?>
				<div class="item-article">
					<div class="img-item">
					</div>
					<div class="description-item">
						<a href="#"><span class="title-article"><?php single_post_title('custom_title');?></span></a>
					
					</div>
				</div>
		<?php endwhile; ?>

			</div>
		</div>
		</div>
	</section>

<?php get_footer(); ?>
