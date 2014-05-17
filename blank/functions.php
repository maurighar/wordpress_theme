<?php

	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name'=>'sidebar1',
			'before_widget' => '<div id="%1$s" class="side %2$s">', // Removes <li>
			'after_widget' => '</div>', // Removes </li>
		));

?>