<?php
/*
Template Name Posts: Работа портфолио
Template Post Type: post, page, portfolio
*/
?>
<?php get_header(); ?>
21312312312312
<section class="wrapper" id="posts" style="padding-top: 100px;">
	<div class="inner">

		<?php

		if( have_posts() ) :

			while( have_posts() ) :
				the_post();
				$count = get_post_meta( get_the_id(), '_look', true);
				if($count == "") {$count = 0;}
				?>

				<div class="post_wrapper split reversed">
					<div class="content">
						<h2 class="post_title"><?php the_title(); ?></h2>
						<p class="post_date">Опубликовано: <?php the_date(); ?> в <?php the_time(); ?></p>
						<?php the_excerpt(); ?>
						<ul class="actions actions--post">
							<li class="button_wrapper"><a href="<?php the_permalink(); ?>" class="button">Читать далее</a></li>
							<li><span class="icon fa-eye"> <?php echo $count ?></span></li>
							<li><span class="icon fa-commenting-o"> <?php echo comments_number('0','1'); ?></span></li>
						</ul>
						<?php the_category() ?>
						<?php the_tags() ?>
					</div>
					<div class="image"><?php the_post_thumbnail(); ?></div>
				</div>

				<?php
			endwhile;
		else :
			?>
			<div class="search_wrapper_page">
				<h2 class="">К сожалению, в данной категории еще нет записей</h2>
				<p>Может быть вас заинтересует что нибудь еще?</p>

				<form class="search_form" action="<?php echo site_url() ?>">
					<input type="text" name="s" placeholder="Введите поисковой запрос" required>
					<button class="icon fa-search">Искать</button>
				</form>

			</div>
			<?php
		endif;


		?>
	</div>
</section>


<?php get_footer(); ?>
