<?php if( !is_page('contact') ) : ?>
<section id="booking">
			<div class="custom-shape-divider-top">
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
						<path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
				</svg>
			</div>
			<div  class="inner">
				<h2>ご予約<span>Bookibg</span></h2>
				<p>ご予約はLINE・WEBにて受け付けております。<br>
				ご不明な点やお問い合わせに関しましては、お気軽にご連絡くださいませ。</p>
				<div class="d-flex">
						<a href="#" target="_blank">
							<i class="fa-brands fa-line"></i>
							LINE予約
						</a>
						<a href="<?php echo esc_url(home_url('/contact/')); ?>">
							<i class="fa-regular fa-envelope"></i>
							WEB予約
						</a>
				</div>
				<p class="mt-4 big"><b>営業時間</b><br>10:00〜22:00（不定休）</p>
			</div>
</section>
<?php endif; ?>

<footer class="<?php lightning_the_class_name( 'site-footer' ); ?>">

	<?php if ( has_nav_menu( 'footer-nav' ) ) : ?>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'footer-nav',
				'container'       => 'nav',
				'container_class' => 'footer-nav',
				'items_wrap'      => '<div class="container"><ul id="%1$s" class="%2$s ' . lightning_get_the_class_name( 'footer-nav-list' ) . ' nav nav--line">%3$s</ul></div>',
				'fallback_cb'     => '',
				'depth'           => 1,
			)
		);
		?>
	<?php endif; ?>
	
	<?php
	$footer_widget_area_count = apply_filters( 'lightning_footer_widget_area_count', 2 );
	$footer_widget_exists     = false;
	for ( $i = 1; $i <= $footer_widget_area_count; $i++ ) {
		if ( is_active_sidebar( 'footer-widget-' . $i ) ) {
			$footer_widget_exists = true;
		}
	}
	?>
	<?php if ( true === $footer_widget_exists ) : ?>
		<div class="container site-footer-content">
		<?php do_action( 'lightning_site_footer_content_prepend' ); ?>
			<div class="row">
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
				<div class="col-md-8">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
			</div>
		<?php do_action( 'lightning_site_footer_content_append' ); ?>
		</div>
	<?php endif; ?>

	<?php do_action( 'lightning_copyright_before' ); ?>

	<div class="container site-footer-copyright">
	<p>Copyright © RelaxRoamers-リラックスローマーズ｜東京都23区 出張リラクゼーションサービス All Rights Reserved.</p>
	</div>
</footer> 
<div class="footer-cta">
<a href="<?php echo esc_url(home_url('/contact/')); ?>">
	<picture>
		<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/web-sp.png" media="(max-width:767.9px)"/>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/web.png"alt="web予約">
	</picture>
</a>
<a href="#">
	<picture>
		<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/line-sp.png" media="(max-width:767.9px)"/>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/line.jpg"alt="友だち追加">
	</picture>
</a>
</div>