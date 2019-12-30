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
						<a href="<?php the_permalink();?>"><img class="img-article" src="<?php the_field('hero_image'); ?>" alt="Img-article"></a>
					</div>
					<div class="description-item">
						<p class="description-article"><?php the_content('Read More'); ?></p>
					</div>
				</div>
		<?php endwhile; ?>

			</div>
		</div>
		</div>
	</section>

<?php get_footer(); ?>
