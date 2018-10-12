<?php
/*
* Template name: Главная страница
*/
?>
<?php get_header(); ?>

<!-- Banner -->
<section id="banner" class="swiper-container">
	<div class="swiper-wrapper">
		<?php
		$args = array(
			'posts_per_page' => 5,
			'order' => 'ASC',
			'post_type' => array( 'slider' ),
		);
		$posts = new WP_Query( $args );
		while( $posts->have_posts() ) :
			$posts->the_post();
			?>
			<div class="swiper-slide">
				<?php echo wp_get_attachment_image(get_post_meta( get_the_id(), 'slider_bgr_image', true), full ); ?>
				<div class="inner">
					<h2 style="color: <?php echo get_post_meta( get_the_id(), 'color', true); ?>"><?php the_title(); ?></h2>
					<p style="color: <?php echo get_post_meta( get_the_id(), 'color', true); ?>"><?php echo get_post_meta( get_the_id(), 'slider_text', true); ?></p>
				</div>
			</div>
			<?php
		endwhile;
		wp_reset_postdata();
		?>
	</div>
	<div class="swiper-pagination"></div>
</section>

<script>
	function getSlider () {
		var mySwiper = new Swiper('.swiper-container', {
			speed: 400,
			slidesPerView: 1,
			slidesPerColumn: 1,
			loop: true,
			autoplay: {delay: 10000,},
			pagination: {el: '.swiper-pagination',type: 'bullets',clickable: 'true',},
		});

		// var mySwiper = new Swiper('.swiper-container', {
		// 	speed: 400,
		// 	spaceBetween: 100
		// });
	}
	getSlider();

</script>

<!-- Three -->
<section id="three" class="wrapper style2">
	<div class="inner">
		<h2>Интерьеры</h2>
		<div class="posts">

			<?php
			$args = array(
				'posts_per_page' => 999,
				'post_type' => array( 'portfolio' ),
			);
			$posts = new WP_Query( $args );
			while( $posts->have_posts() ) :
				$posts->the_post();
				?>

				<section class="post">
					<span class="image"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></span>
					<div class="content">
						<h3><?php the_title(); ?></h3>
						<?php //the_excerpt(); ?>
						<ul class="actions">
							<li><a href="<?php the_permalink(); ?>" class="button">Подробнее</a></li>
						</ul>
					</div>
				</section>

				<?php
			endwhile;
			wp_reset_postdata();
			?>

		</div>
	</div>
</section>

<!-- One -->
<section id="one" class="wrapper major-pad">
	<div class="inner">
		<h2>Био</h2>
		<section class="spotlight">
			<div class="content">
				<!-- <p><?= get_option('about_full_name');?></p> -->
				<p><?= get_option('about_about_me');?></p>
			</div>
			<span class="image"><img src="<?= get_option('about_photo');?>" alt="" /></span>
		</section>
	</div>
</section>
<!-- Two -->
<section id="two" class="wrapper content-pad" style="display: none;">
	<div class="inner">
		<div class="features">


			<?php
			$args = array(
				'posts_per_page' => 999,
				'post_type' => array( 'work_type' ),
			);
			$posts = new WP_Query( $args );
			while( $posts->have_posts() ) :
				$posts->the_post();
				?>

				<section class="content">
					<!-- <img src="<?php echo get_post_meta( get_the_id(), 'work_type_icon', true); ?>" alt="" /> -->
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				</section>

				<?php
			endwhile;
			wp_reset_postdata();
			?>

		</div>
	</div>
</section>



<?php get_footer(); ?>
