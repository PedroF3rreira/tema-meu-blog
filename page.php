<?php get_header();?>
	<section class="root-section">
		<div class="content-1 fullwidth">
				<?php  while( have_posts() ):?>
					<?php  the_post();?>
					<article class="post">
						<?php  if( has_post_thumbnail() ):?>
							<div class="post-thumbnail post-thumbnail-single ">
								
								<?php the_post_thumbnail( 'large', 'image-thumbnail' );?>
								
							</div>
						<?php  endif;?>
							<?php the_title( 
									$before = '<h3 class="post-title">', 
									$after 	= '</h3>', 
									$echo 	= true );?>

							<span class="post-author"><?php the_author();?> - <?php echo get_the_date();?></span>
							<div class="post-content">
								<p class="post-excerpt"><?php the_content()?></p>
							</div>
					</article>
				<?php  endwhile;?>
			
		</div>
		<div
		</div>
	</section>
<?php get_footer();?>