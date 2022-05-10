<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head();?>
	</head>
	<body <?php body_class();?>>
		<header class="site-header">
			
			<div class="top-header">....</div>
			
			<div class="center-header container">
				<div class="logo-site">
					<?php if( has_custom_logo() ): ?>
						<?php the_custom_logo(); ?>
					<?php endif; ?>
				</div>
				<?php if( has_nav_menu( 'primary' ) ): ?>
					<?php wp_nav_menu( array(
						'menu' 				=> 'primary',
						'container' 		=> 'nav',
						'container_class' 	=> 'menu-container',
						'fallback_cd' 		=> false,

					) ); ?>
				<?php endif; ?>
			</div>
		</header>