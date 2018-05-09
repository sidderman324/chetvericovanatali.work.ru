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
				<h2><a href="#"><?php the_title(); ?></a></h2>
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
		<h2>Etiam sed tellus</h2>
		<div class="posts">
			<section class="post">
				<span class="image"><img src="images/pic01.jpg" alt="" /></span>
				<div class="content">
					<h3>Congue portitor</h3>
					<p>Aenean ultricies magna non sapien rhoncus, ac ullamcorper lorem convallis. Quisque at venenatis nisi, amet finibus mauris. Sed sodales ultricies eros, sit amet sodales sapien.</p>
					<ul class="actions">
						<li><a href="#" class="button">More</a></li>
					</ul>
				</div>
			</section>
			<section class="post">
				<span class="image"><img src="images/pic02.jpg" alt="" /></span>
				<div class="content">
					<h3>Duis nisl euismod</h3>
					<p>Ultrices nec metus. Aenean ultricies magna et sapien rhoncus ac ullamcorper lorem convallis. Quisque at venenatis nisi amet finibus mauris. Sed sodales ultricies magna etiam.</p>
					<ul class="actions">
						<li><a href="#" class="button">More</a></li>
					</ul>
				</div>
			</section>
			<section class="post">
				<span class="image"><img src="images/pic03.jpg" alt="" /></span>
				<div class="content">
					<h3>Elementum auctor</h3>
					<p>Quis interdum. Lorem quis lacus justo. Sed libero condimentum vehicula sem vel, mattis amet mauris. Nullam lacinia sit amet felis vel vestibulum. Morbi aliquam aenean.</p>
					<ul class="actions">
						<li><a href="#" class="button">More</a></li>
					</ul>
				</div>
			</section>
			<section class="post">
				<span class="image"><img src="images/pic04.jpg" alt="" /></span>
				<div class="content">
					<h3>Urna vel lacinia</h3>
					<p>Integer vel tincidunt lacus. Nulla augue nunc, eleifend quis leo ac, maximus interdum tellus. Etiam at vestibulum felis, id efficitur risus. Praesent ac nulla ex. Duis elementum.</p>
					<ul class="actions">
						<li><a href="#" class="button">More</a></li>
					</ul>
				</div>
			</section>
			<section class="post">
				<span class="image"><img src="images/pic05.jpg" alt="" /></span>
				<div class="content">
					<h3>Neque et suscipit</h3>
					<p>Libero condimentum, vehicula sem vel, mattis mauris. Nullam lacinia sit amet felis vel vestibulum. Morbi in aliquam est. Aenean dapibus porttitor nulla ultrices venenatis.</p>
					<ul class="actions">
						<li><a href="#" class="button">More</a></li>
					</ul>
				</div>
			</section>
			<section class="post">
				<span class="image"><img src="images/pic06.jpg" alt="" /></span>
				<div class="content">
					<h3>Vestibulum placerat</h3>
					<p>Tristique tellus et ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent mauris risus, pellentesque eu leo non, tincidunt.</p>
					<ul class="actions">
						<li><a href="#" class="button">More</a></li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</section>

<!-- Contact -->
<section id="contact" class="wrapper split">
	<div class="inner">
		<section>
			<h2>Send us a message</h2>
			<form method="post" action="#">
				<div class="row uniform">
					<div class="6u 12u$(large) 6u(medium) 12u$(xsmall)">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" />
					</div>
					<div class="6u$ 12u$(large) 6u$(medium) 12u$(xsmall)">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" />
					</div>
					<div class="12u$">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="5"></textarea>
					</div>
					<div class="12u$">
						<ul class="actions">
							<li><input type="submit" value="Send Message" class="special" /></li>
							<li><input type="reset" value="Reset" /></li>
						</ul>
					</div>
				</div>
			</form>
		</section>
		<section>
			<h2>Other ways to reach us</h2>
			<ul class="bulleted-icons">
				<li>
					<span class="icon-wrapper"><span class="icon fa-envelope"></span></span>
					<h3>Email</h3>
					<p><a href="#">information@untitled.tld</a></p>
				</li>
				<li>
					<span class="icon-wrapper"><span class="icon fa-twitter"></span></span>
					<h3>Twitter</h3>
					<p><a href="#">twitter.com/untitled-tld</a></p>
				</li>
				<li>
					<span class="icon-wrapper"><span class="icon fa-phone"></span></span>
					<h3>Phone</h3>
					<p>(800) 555-0000</p>
				</li>
				<li>
					<span class="icon-wrapper"><span class="icon fa-facebook"></span></span>
					<h3>Facebook</h3>
					<p><a href="#">facebook.com/untitled-tld</a></p>
				</li>
				<li>
					<span class="icon-wrapper"><span class="icon fa-home"></span></span>
					<h3>Mailing Address</h3>
					<p>1234 Fictional Avenue<br />
						Nashville, TN 00000<br />
						United States
					</p>
				</li>
				<li>
					<span class="icon-wrapper"><span class="icon fa-linkedin"></span></span>
					<h3>LinkedIn</h3>
					<p><a href="#">linkedin.com/untitled-tld</a></p>
				</li>
			</ul>
		</section>
	</div>
</section>
<?php get_footer(); ?>
