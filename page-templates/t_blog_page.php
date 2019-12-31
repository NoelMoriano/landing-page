
<?php
/*
 Template Name: Page Blog
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
			while ( have_posts() ) : the_post();?>
				<div class="item-article">
					<div class="img-item">
						<a href="blog-article.html">
							<!--<img class="img-article" src="images/article-blank.png" alt="Img-article"> -->
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>
					<div class="description-item">
						<a href="blog-article.html"><span class="title-article"><?php the_title();?></span></a>
						<span class="info-article">Autor / 01-01-2000 / Categoría</span>
						<p class="description-article"><?php the_content('Read more');?></p>
					</div>
				</div>

				<?php 	endwhile; // End of the loop. ?>

			</div>
		</div>
		</div>
	</section>

<?php
	get_footer();
?>