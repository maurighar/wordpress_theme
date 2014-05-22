<?php get_header() ?>
<div id="main" class="group">
	<div id="blog" class="left-col">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		<div id="post">

			<h2><?php the_title(); ?></h2>
			<div class="byline">
				Escrito por <?php the_author_posts_link(); ?>
				el <a href="<?php the_permalink() ?>"> <?php the_time('l d F, Y') ?> </a>
			</div>  <!-- Fin byline -->
			<?php the_content(); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>


			<div class="navi">
				<div class="right">
					<?php previous_post_link(); ?> / <?php next_post_link(); ?>
				</div>  <!-- Fin Right -->
			</div>   <!-- fin Navi -->



		</div>  <!-- Fin de post -->





	</div> <!-- Fin de seccion Blog -->
</div> <!-- Fin del main -->
<?php get_footer(); ?>