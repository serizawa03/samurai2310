<?php
/**
 * Lightning G3 index.php common template-file
 *
 * @package vektor-inc/lightning
 */

use VektorInc\VK_Breadcrumb\VkBreadcrumb;

?><?php lightning_get_template_part( 'header' ); ?>

<?php
do_action( 'lightning_site_header_before', 'lightning_site_header_before' );
if ( apply_filters( 'lightning_is_site_header', true, 'site_header' ) ) {
	lightning_get_template_part( 'template-parts/site-header' );
}
do_action( 'lightning_site_header_after', 'lightning_site_header_after' );
?>
<?php do_action( 'lightning_site_body_before', 'lightning_site_body_before' ); ?>

<div class="<?php lightning_the_class_name( 'site-body' ); ?>">
	<?php do_action( 'lightning_site_body_prepend', 'lightning_site_body_prepend' ); ?>

	<section id="mv">
		<div class="mv_slider">
			<div class="mv_slider_img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/main3.jpg" alt="RelaxRoamers-ホームローマーズ" />
			</div>
			<div class="mv_slider_img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/main2.jpg" alt="RelaxRoamers-ホームローマーズ" />
			</div>
			<div class="mv_slider_img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/main4.jpg" alt="RelaxRoamers-ホームローマーズ" />
			</div>
			<div class="mv_slider_img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/main1.jpg" alt="RelaxRoamers-ホームローマーズ" />
			</div>
			<div class="mv_slider_img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/main5.jpg" alt="RelaxRoamers-ホームローマーズ" />
			</div>
		</div>
		<div class="mv_text mincho">
			<p>東京都23区 出張リラクゼーションサービス</p>
			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo2.png" alt="RelaxRoamers-ホームローマーズ" /></h1>
			<h2>忙しい毎日の中で<br>至福の癒しのひとときを</h2>
		</div>
	</section>

	<section id="news" class="container">
		<h2>最新のお知らせ<span>News</span></h2>
		<ul class="inner text-left">
		<?php 
      $args = array(
       'post_type' => array('post'),
       'post_status' =>'publish',
       'orderby' => 'date',
       'order' => 'DESC',
       'posts_per_page' => '3',
      );
    	$the_query = new WP_Query($args); ?>
      <?php 
        if($the_query->have_posts()): 
				while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<li>
					<span class="news-date"><?php echo the_date(); ?></span>
					<span class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
				</li>
      <?php endwhile; endif; ?>
				</ul>
		</section>


		<section id="concept">
			<div class="custom-shape-divider-top">
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
						<path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
				</svg>
			</div>
			<div class="container">
				<div class="concept-text inner">
					<h2>コンセプト<span>Concept</span></h2>
					<p>心と体に疲れを感じたら、<br class="sp">RelaxRoamersにおまかせください。<br>私たちは出張型のリラクゼーションサロンとして、<br class="pc">忙しい日常に「癒し」を提供します。</p>
					<p>RelaxRoamersは、<br class="sp">日々の忙しさから一時的に解放され、<br>心と体の疲れを和らげる<br class="sp">「オアシス」を目指しています。<br>
					ご自宅という安心で馴染みのある環境で、<br>高品質なリラクゼーションをお届けします。</p>
				</div>
			</div>
		</section>

		<section id="greeting">
			<div  class="container">
				<div class="greeting-text">
					<h2>ご挨拶<span>Greeting</span></h2>
					<!--<p class="big mincho">患者様お一人おひとりが<br>健やかに過ごしていただけるように</p>-->
					<p>はじめまして。院長の侍花子と申します。</p>
					<p>これまで多くの施設でセラピストとして活動してきましたが、私たちの新しいサービス、RelaxRoamersを通じて、さらに多くの方々に「癒し」を提供したいと考えています。</p>
					<p>RelaxRoamersは忙しい毎日に癒しをもたらし、心と体の疲れをほぐす出張型のリラクゼーションサロンです。毎日の生活や仕事のストレスから解放されるような「オアシス」を、ご自宅やオフィス、あるいはご指定の場所までお届けします。</p>
					<p>出張型のサービスですので、ご年配の方から、外出が大変なママさんまで幅広くご利用いただいています。お気軽にお問い合わせください。</p>
					<p>スタッフ一同が心をこめて提供するサービスを通じて、皆様にとって心地よい「オアシス」を作り出す場所でありたいと思っています。<br>
					皆様のご自宅やオフィスに癒しと安らぎをお届けすることで、日々の生活に新たな活力を与えられることを目指しています。<br>
					皆様のご利用、心よりお待ちしております。</p>
				</div>
			</div>
		</section>

		<section id="menu" class="container">
			<h2>メニュー<span>menu</span></h2>
			<p class="big mincho">それぞれの症状に合わせて、<br>最適なメニューをご提案</p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/menu.jpg" alt="最適なメニューをご提案" />
			<p>RelaxRoamersオリジナルメニューをはじめ、<br>ボディマッサージ、ヘッドマッサージ、足裏リフレクソロジーをご用意。<br>
			人それぞれ違うように、必要なケアも十人十色。<br>カウンセリングを元に最適なマッサージをご提案いたします。</p>
			<a href="<?php echo esc_url(home_url('/menu/')); ?>" class="more-btn">すべてのメニューを見る</a>
		</section>

		<section id="flow" class="container bg-green">
			<div class="row">
				<div class="col-md-12 mt-5">
					<div class="row">
						<div class="col-md-4">
							<p class="big mincho">患者様からの口コミ</p>
							<p>当院で施術を受けていただいた<br>患者様のお声を紹介していきます。</p>
							<a href="<?php echo esc_url(home_url('/voice/')); ?>" class="more-btn">すべての口コミを見る</a>
						</div>
						<div class="col-md-8">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/voice.jpg" alt="患者様からの口コミ" />
						</div>
					</div>
				</div>
				<div class="col-md-6 mb-5">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flow1.jpg" alt="初めての方へ" />
					<a href="<?php echo esc_url(home_url('/flow/')); ?>" class="more-btn">初めての方へ</a>
				</div>
				<div class="col-md-6 mb-5">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/qa.jpg" alt="Q＆A" />
					<a href="<?php echo esc_url(home_url('/qa/')); ?>" class="more-btn">Q＆A</a>
				</div>
			</div>
		</section>

		<section id="sns">
			<div  class="inner">
				<h2><span>SNS</span></h2>
				<p>RelaxRoamersでは、<br>様々な健康に関する情報を発信しております。<br>ぜひご覧ください。</p>
				<div class="d-flex">
						<a href="#" target="_blank">
						<i class="fa-brands fa-instagram"></i>
						</a>
				</div>
			</div>
			<div class="row">
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta1.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta2.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta3.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta4.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta5.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta6.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta7.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta8.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta9.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta10.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta11.png" alt="" />
				</div>
				<div class="col-4 col-md-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta12.png" alt="" />
				</div>
			</div>
		</section>

	<?php do_action( 'lightning_site_body_append', 'lightning_site_body_append' ); ?>
</div><!-- [ /.site-body ] -->

<?php
do_action( 'lightning_site_footer_before', 'lightning_site_footer_before' );
if ( apply_filters( 'lightning_is_site_footer', true, 'site_footer' ) ) {
	lightning_get_template_part( 'template-parts/site-footer' );
}
do_action( 'lightning_site_footer_after', 'lightning_site_footer_after' );
?>

<?php lightning_get_template_part( 'footer' ); ?>
