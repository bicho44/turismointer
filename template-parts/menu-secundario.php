<?php if ( has_nav_menu( 'secondary' ) ) : // Check if there's a menu assigned to the 'social' location. ?>
  <?php
			wp_nav_menu(array(
					'menu' => 'secondary',
					'theme_location' => 'secondary',
					'depth' => 1,
					'container' => 'div',
					'container_class' => 'secondary',
					'container_id' => 'secondary',
					'menu_class' => 'list-inline',
				)
			);

	?>
<?php endif; // End check for menu.
