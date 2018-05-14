<?php
/*
* Template name: Главная страница
*/
?>
<?php get_header(); ?>

<!-- Banner -->
<section id="banner">

	<?php
	$args = array(
		'posts_per_page' => 5,
		'post_type' => array( 'slider' ),
	);
	$posts = new WP_Query( $args );
	while( $posts->have_posts() ) :
		$posts->the_post();
		?>
		<article>
			<img src="<?php echo get_post_meta( get_the_id(), 'slider_bgr_image', true); ?>" alt="" />
			<div class="inner">
				<h2><?php the_title(); ?></h2>
			</div>
		</article>
		<?php
	endwhile;
	wp_reset_postdata();
	?>

</section>

<!-- One -->
<section id="one" class="wrapper major-pad">
	<div class="inner">
		<section class="spotlight">
			<div class="content">
				<h2>Обо мне</h2>
				<p><?= get_option('about_full_name');?></p>
				<p><?= get_option('about_about_me');?></p>
			</div>
			<span class="image"><img src="<?= get_option('about_photo');?>" alt="" /></span>
		</section>
	</div>
</section>

<!-- Two -->
<section id="two" class="wrapper content-pad">
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
					<img src="<?php echo get_post_meta( get_the_id(), 'work_type_icon', true); ?>" alt="" />
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

<!-- Three -->
<section id="three" class="wrapper style2">
	<div class="inner">
		<h2>Портфолио</h2>
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
						<p><?php the_excerpt(); ?></p>
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

<?php get_footer(); ?>