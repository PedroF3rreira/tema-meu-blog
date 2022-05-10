<?php get_header();?>
	<section class="root-section">
		<div class="content-1 fullwidth">
			<?php if( have_posts() ):?>
				<?php  while( have_posts() ):?>
					<?php  the_post();?>
					<article class="post">
						<?php  if( has_post_thumbnail() ):?>
							<div class="post-thumbnail post-thumbnail-single ">
								
								<?php the_post_thumbnail( 'large', 'image-thumbnail' );?>
								
								<?php the_title( 
									$before = '<h3 class="post-title">', 
									$after 	= '</h3>', 
									$echo 	= true );?>

							<span class="post-author"><?php the_author();?> - <?php echo get_the_date();?></span>

							
							</div>
							<div class="post-content">
								<p class="post-excerpt"><?php the_content()?></p>
							</div>
							<div>
								<?php comments_number( 
									$zero 	= '0 comentarios', 
									$one 	= 'um comentario', 
									$more 	= '% comantarios', ) ?>
							</div>
						<?php  endif;?>
					</article>
					<?php if( comments_open() ): ?>
						<?php comments_template(); ?>
					<?php endif; ?>
				<?php  endwhile;?>
				<div class="pagination" style="color:#fff;">
					<div><?php previous_post_link(); ?></div>
					<div><?php next_post_link(); ?></div>
				</div>
			<?php  endif;?>
		</div>
		<div class="content-2">
			<?php get_sidebar(); ?>
		</div>
	</section>
<?php get_footer();?>