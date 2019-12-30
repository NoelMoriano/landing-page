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

<?php while (have_posts()) : the_posts();?>
				<div class="item-article">
					<div class="img-item">
						<a href="<?php the_permalink();?>"><img class="img-article" src="<?php the_posts_thumbnails('full');?>" alt="Img-article"></a>
					</div>
					<div class="description-item">
						<a href="<?php the_permalink();?>"><span class="title-article"><?php the_field('custom_title');?></span></a>
						<span class="info-article"><?php the_author_posts_link();?> / <?php the_time('F jS, Y');?> / <?php the_comments_number('0 Comments','1 Comments','% responses');?></span>
						<p class="description-article"><?php the_content('Read More'); ?></p>
					</div>
				</div>
<?php endwhile; ?>

			</div>
		</div>
		</div>
	</section>

	<?php get_footer(); ?>
