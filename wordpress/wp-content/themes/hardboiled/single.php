<?php get_header(); ?>

	<div id="body">

		<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link(); ?></div>
			<div class="alignright"><?php next_post_link(); ?></div>
		</div>

		<div class="navigation-cleared"></div>

			<div <?php post_class() ?> class="entry entry-<?php the_ID(); ?>">
			
				<div class="entry-head">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?> </a></h3>
				</div>
				
				<div class="entry-meta">
					<h4><?php the_time('Y/m/j') ?> <br /> <?php the_author() ?> <br /> <?php the_category('<br />') ?> <br /> <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?> <br /> <?php comments_popup_link('no comments', '1 comment', '% comments'); ?> <?php edit_post_link('edit', '<br />', ''); ?></h4>
				</div>
				
				<div class="entry-body">
					
					<?php the_content('read the rest of this entry &raquo;'); ?>
					
				</div>

				<div class="entry-clear"></div>
				
			</div>

			<div class="entry-cleared"></div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

<?php endif; ?>

		</div><!-- content -->

<?php get_sidebar(); ?>

	</div><!-- body -->

<?php get_footer(); ?>