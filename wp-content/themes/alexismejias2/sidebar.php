<div id="left">
	<a href="<?php bloginfo('wpurl'); ?>"><h1>Alex Mejias</h1></a>
	<p class="email"><a href="mailto:alexis@alexismejias.com">alexis@alexismejias.com</a></p>
	<p class="telephone">1(516)784-6801</p>
	<div id="nav">
		<ul>
			<?php 
				$args_main = array(
					'title_li'=> __(' '),
					'depth'=>0,
					'exclude'=>2, // exclude the index page
					'sort_column' => 'menu_order'
				);
				wp_list_pages($args_main);
				?>
		</ul>

		<ul class="other">
			<li><a href="http://blog.alexismejias.com/">Blog</a></li>
		</ul>

	</div>
</div>