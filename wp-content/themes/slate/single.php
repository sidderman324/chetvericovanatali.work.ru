<?php
/*
Template Name Posts: Работа портфолио
Template Post Type: post, page, portfolio
*/
?>
<?php the_post(); ?>
<?php get_header(); ?>

<div class="container">
	<img src="<?php echo get_post_meta( get_the_id(), 'portfolio_main_photo', true); ?>" alt="" />
	<div class="inner">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<section id="" class="wrapper wrapper-single">
	<div class="inner">

		<!-- Content -->
		<div class="content content-single">
			<?php the_content(); ?>
		</div>


	</div>
</section>

<?php get_footer(); ?>
