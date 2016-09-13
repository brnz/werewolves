<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">

				<div id="information">
					<p><b><a href="/">hardboiled</a></b> meetings are held on wednesdays, 6:00 pm in 283 dwinelle.  join us!<br />
					check out the <a href="/decal/">course schedule</a> to see what we will be doing and <a href="/calendar/">our calendar and community calendar</a> for events to attend.<br />
					also visit us on <a href="http://www.facebook.com/group.php?gid=2200936691&ref=ts">facebook</a>, <a href="http://twitter.com/hbmag">twitter</a>, and <a href="http://issuu.com/hardboiledmagazine">issuu</a>.<br />
					have any questions?  contact us at <a href="/contact/"><b>hardboiled</b>magazine (at) gmail.com</a>.</p>
				</div>

				<div id="host">
					<p><a href="<?php bloginfo('rss2_url'); ?>">entries rss</a> and <a href="<?php bloginfo('comments_rss2_url'); ?>">comments rss</a>.<br />
					<?php do_action( 'twentyeleven_credits' ); ?>
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'proudly powered by %s', 'twentyeleven' ), 'wordpress' ); ?></a><br />
					<a href="http://www.ocf.berkeley.edu"><img src="http://www.ocf.berkeley.edu/images/hosted-logos/ocfbadge_mini8.png" alt="Hosted by the OCF" width="98" height="39" style="border:0" /></a><br /></p>
				</div>

			</div>

			<div id="clear"></div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>