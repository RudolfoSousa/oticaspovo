<header>
	<div class="navbar">
		<div class="navbar-container">
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
				</a>
			</div>
			<nav>
				<ul>
				<?php $menu = wp_get_menu_array('menu-principal'); ?>

    			<?php foreach ($menu as $key => $value): ?>
					<li>
						<a class="<?php echo wesg_check_active_menu($value['url']); ?>" href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a>
					</li>
				<?php endforeach; ?>
				</ul>
			</nav>
			<div class="navbar-contato">
				<!-- <img src="" alt=""> -->
				<p>Disk Povo: <span>(21)</span> <span class="yellow">3970-6969</span></p>
				<small><span class="yellow">Das 8h às 18h</span> | De segunda a sexta-feira <br> (exceto em feriados)</small>
			</div> 
		</div>
	</div>
</header>
