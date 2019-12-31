
</article id="post-<?php the_ID(); ?>">
	<section class="content-banner-primary-blog-article">
		<section class="content-blog-article-page">
			<div class="container-title-content">
				<div class="item-title">
						<a href="<?php the_permalink(); ?>"><div class="item-go-back"><i class="fa fa-arrow-left"></i>Volver al blog</div></a>	
						<span class="text-title"><?php the_title()?></span>
						<span class="text-sub-title">Subtítulo completo que refuerce la idea principal</span>
						<span class="text-info-blog">Nombre completo del autor / 01-01-2000 / Categoría</span>
				</div>
			</div>
		</section>
	</section>





	<section class="content-description-blog-article" class="entry-content"> 
		<div class="container-blog-article-detail">
				
				<div><?php the_post_thumbnail( 'banner_single_blog' ); ?></div>

				<p class="item-text-description">	<?php
		the_content(
			sprintf(
				/* translators: %s: Post title. */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?></p>


			</div>
	</section>


</article><!-- #post-<?php the_ID(); ?> -->
