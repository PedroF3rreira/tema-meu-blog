<?php get_header();?>
	<section class="root-section">

		<div class="archive-title">
			<?php the_archive_title( $before = '<h1>', $after = '</h1>' ); ?>
		</div>
		
		<div class="content-1">
			<!--pega o aquivo com layout dos posts -->
			<?php get_template_part('template_parts/post'); ?>
		
		</div>
		<div class="content-2">
			<?php get_sidebar(); ?>
		</div>
	</section>
<?php get_footer();?>