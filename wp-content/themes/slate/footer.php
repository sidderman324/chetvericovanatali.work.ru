<!-- Contact -->
<section id="contact" class="wrapper split">
	<div class="inner">
		<section>
			<h2>Контактная информация</h2>
			<ul class="bulleted-icons">
				<li>
					<span class="icon-wrapper"><span class="icon fa-envelope"></span></span>
					<h3>Email</h3>
					<p><a href="#"><?php echo get_option('about_mail'); ?></a></p>
				</li>
				<li>
					<span class="icon-wrapper"><span class="icon fa-instagram"></span></span>
					<h3>Instagram</h3>
					<p><a href="<?php echo get_option('about_instagram'); ?>"><?php echo get_option('about_instagram'); ?></a></p>
				</li>
				<li>
					<span class="icon-wrapper"><span class="icon fa-phone"></span></span>
					<h3>Phone</h3>
					<p><a href="tel:+<?php $tel = get_option('about_phone'); $replace=array('-', ' ', '+', '(', ')'); $tel = str_replace($replace, '', $tel); echo $tel; ?>"><?php echo get_option('about_phone'); ?></a></p>
				</li>
				<li>
					<span class="icon-wrapper"><span class="icon fa-facebook"></span></span>
					<h3>Facebook</h3>
					<p><a href="<?php echo get_option('about_facebook'); ?>"><?php echo get_option('about_facebook'); ?></a></p>
				</li>
			</ul>
		</section>
	</div>
</section>
<!-- Footer -->
<footer id="footer">
	<div class="inner">
		<a href="/wp-admin/">Войти</a>
	</div>
</footer>

</body>
</html>
