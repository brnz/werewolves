<?php get_header(); ?>

	<div id="body">

		<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> class="entry entry-<?php the_ID(); ?>">
			
				<div class="entry-head">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				</div>
				
				<div class="entry-meta">
					<h4><!--<?php the_time('Y/m/j') ?> <br /> --><?php edit_post_link('edit', '<br />', ''); ?></h4>
				</div>
				
				<div class="entry-body">
					
					<?php the_content('read the rest of this entry &raquo;'); ?>
					
				</div>

				<div class="entry-clear"></div>

			</div>

			<div class="entry-cleared"></div>

		<?php endwhile; endif; ?>
	
	<?php comments_template(); ?>
	
		</div><!-- content -->

<?php get_sidebar(); ?>

	</div><!-- body -->

<?php get_footer(); ?>
