<?php
/*
Template Name Posts: Работа портфолио
Template Post Type: post, page, portfolio
*/
?>
<?php the_post(); ?>
<?php get_header(); ?>

<!-- Banner -->
<section id="banner" class="swiper-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<img src="<?php echo get_post_meta( get_the_id(), 'portfolio_main_photo', true); ?>" alt="" />
			<div class="inner">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>

<section id="" class="wrapper wrapper-single">
	<div class="inner">

		<!-- Content -->
		<div class="content content-single">
			<?php the_content(); ?>
		</div>


	</div>
</section>

<?php get_footer(); ?>
