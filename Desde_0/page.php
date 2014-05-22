<?php get_header() ?>
<div id="main" class="group">
	<div id="blog" class="left-col">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div id="post">
			<?php the_content(); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

		</div>  <!-- Fin de post -->


	</div> <!-- Fin de seccion Blog -->
</div> <!-- Fin del main -->
<?php get_footer(); ?>