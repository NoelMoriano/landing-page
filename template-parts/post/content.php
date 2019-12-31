

	<section class="content-banner-primary-blog-article" id="post-<?php the_ID(); ?>">
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

				<?php
				the_content(
					sprintf(
						/* translators: %s: Post title. */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					)
				);
				?>


				<?php 

				// If comments are open or we have at least one comment, load up the comment template.
						/*if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						the_post_navigation(
							array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
							)
						);*/
				?>

			</div>
	</section>
<!-- #post-<?php the_ID(); ?> -->
