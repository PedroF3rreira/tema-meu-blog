<?php get_header();?>
	<section class="root-section">
		<div class="content-1">
			<?php if( have_posts() ):?>
				<?php  while( have_posts() ):?>
					<?php  the_post();?>
					<article class="post">
						<?php  if( has_post_thumbnail() ):?>
							<div class="post-thumbnail">
								<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail( 'medium', 'image-thumbnail' );?>
								</a>
							</div>
							<div class="post-content">
								<?php the_title( $before = '<h3>', $after = '</h3>', $echo = true );?>
								<span class="post-author"><?php the_author();?> - <?php echo get_the_date();?></span>
								<p class="post-excerpt"><?php the_excerpt(); ?></p>
							</div>
						<?php  endif;?>
					</article>
				<?php  endwhile;?>
				<div class="pagination" style="color:#fff;">
					<div><?php previous_posts_link( 'Artigos anteriores' ); ?></div>
					<div><?php next_posts_link( 'Proximos artigos' ) ?></div>
				</div>
			<?php  endif;?>
		</div>
		<div class="content-2">
			<?php get_sidebar(); ?>
		</div>
	</section>
<?php get_footer();?>