	<div id="sidebar">

		<div id="search">

			<?php get_search_form(); ?>

		</div>

		<div id="side">
		<ul>
			<li><h2>issue 15.1</h2>
			<p><strong>october 2011</strong></p>
			<p><a href="http://hardboiled.berkeley.edu/wordpress/archived-issues/issue-15-1/"><img src="http://hardboiled.berkeley.edu/wordpress/wp-content/uploads/2011/10/15.1.jpg" width="240" height="305" /></a></p>
			<p><a href="http://hardboiled.berkeley.edu/wordpress/archived-issues/issue-15-1/">read it online</a> or <a href="http://hardboiled.berkeley.edu/wordpress/wp-content/uploads/2011/10/15.1.pdf">download the pdf</a>.</p>
			</li>

			<li>
				<?php sidebarlogin(); ?>
			</li>

			<li>

				<!--subscribe2-->

			</li>

			<li><h2>blog archives</h2>
				<ul>
				<?php wp_get_archives('type=yearly'); ?>
				</ul>
			</li>

			<?php wp_list_bookmarks(); ?>

		</ul>

		</div>

	</div>