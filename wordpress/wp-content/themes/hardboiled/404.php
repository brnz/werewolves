<?php get_header(); ?>

	<div id="body">

		<div id="content">
			
			<div class="entry entry-404">

				<div class="entry-head">
					<h3>error 404 - not found</h3>
				</div>
				
				<div class="entry-meta">
					<h4><!--<?php the_time('m/j/Y') ?> <br /> --><?php edit_post_link('edit', '<br />', ''); ?></h4>
				</div>
				
				<div class="entry-body">
					
					<p>We could not find what you were looking for at this address.  Please try to use the search form to the left to find what you're after.</p>
					
				</div>

				<div class="entry-clear"></div>

			</div>

			<div class="entry-cleared"></div>
	
		</div><!-- content -->

<?php get_sidebar(); ?>

	</div><!-- body -->

<?php get_footer(); ?>