<?php get_header(); ?>

	<div id="body">

		<div id="content">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">archive for the &#8216;<?php single_cat_title(); ?>&#8217; category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">posts tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">author archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">blog archives</h2>
 	  <?php } ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> class="entry entry-<?php the_ID(); ?>">
			
				<div class="entry-head">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				</div>
				
				<div class="entry-meta">
					<h4><?php the_time('m/j/Y') ?> <br /> <?php the_author() ?> <br /> <?php the_category('<br />') ?> <br /> <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?> <br /> <?php comments_popup_link('no comments', '1 comment', '% comments'); ?> <?php edit_post_link('edit', '<br />', ''); ?></h4>
				</div>
				
				<div class="entry-body">
					
					<?php the_content('read the rest of this entry &raquo;'); ?>
					
				</div>

				<div class="entry-clear"></div>

			</div>

			<div class="entry-cleared"></div>

		<?php endwhile; ?>

		<div class="navigation">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		</div>
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>

		</div><!-- content -->

<?php get_sidebar(); ?>

	</div><!-- body -->

<?php get_footer(); ?>