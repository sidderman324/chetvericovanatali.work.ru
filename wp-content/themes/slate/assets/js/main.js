  jQuery(document).ready(function() {

  	jQuery('.page-header__burger-wrapper').on('click', function() {
  		console.log(123);
  		jQuery(this).find('.page-header__burger').toggleClass('page-header__burger--active');
  		jQuery('.main-menu').slideToggle(300);
  		jQuery('.submenu').fadeOut(300);
  		jQuery('#nav').slideToggle(300);
  	});

  	jQuery('#nav li').on('click', function(){
  		jQuery('#nav').fadeOut(300);
  		jQuery('.page-header__burger').removeClass('page-header__burger--active');
  	})
  	jQuery('section').on('click', function(){
  		jQuery('#nav').fadeOut(300);
  		jQuery('.page-header__burger').removeClass('page-header__burger--active');
  	})

  	function headerScroll() {
  		var scroll = jQuery(window).scrollTop();
  		if(scroll > 300) {
  			jQuery('#header').addClass('scrolled');
  		} if(scroll < 300) { 
  			jQuery('#header').removeClass('scrolled');
  		}
  	}
  	jQuery(document).ready(headerScroll);
  	jQuery(document).scroll(headerScroll);

  	jQuery('.wp-block-image').on('click', function(){
      var winWidth = jQuery(window).width();
      var winHeight = jQuery(window).height();
      var ratio = winWidth / winHeight;

      var ImgWidth = jQuery(this).find('img').width();
      var ImgHeight = jQuery(this).find('img').height();
      var ratioImg = ImgWidth / ImgHeight;

      console.log(ratio + '--' + ratioImg);

      /* Горизонтальный экран, горизонтальное фото */
      if((ratio > 1) && (ratioImg > 1)) {
        jQuery('.modal img').css({"width":"auto", "height":"100%"});
      } 
      /* Горизонтальн экран, вертикальное фото */
      if ((ratio > 1) && (ratioImg < 1)) {
        jQuery('.modal img').css({"width":"auto", "height":"100%"});
      }

      /* Вертикальный экран, горизонтальное фото */
      if ((ratio < 1) && (ratioImg > 1)) {
        jQuery('.modal img').css({"width":"100%", "height":"auto"});
      }
      /* Вертикальный экран, вертикальное фото */
      if ((ratio < 1) && (ratioImg < 1)) {
        jQuery('.modal img').css({"width":"100%", "height":"auto"});
      } 

      var src = jQuery(this).find('img').attr('src');
      jQuery('.modal img').attr('src',src);
      jQuery('.modal').addClass('visible');
      jQuery('.modal_bg').fadeIn(200);
    });
  	jQuery('.modal_bg').on('click', function(){
  		jQuery('.modal').removeClass('visible');
  		jQuery('.modal_bg').fadeOut(200);
      jQuery('.modal img').attr('src','');
    });
  	jQuery('.close').on('click', function(){
  		jQuery('.modal').removeClass('visible');
  		jQuery('.modal_bg').fadeOut(200);
      jQuery('.modal img').attr('src','');
    });
    jQuery('.modal').on('click', function(){
      jQuery('.modal').removeClass('visible');
      jQuery('.modal_bg').fadeOut(200);
      jQuery('.modal img').attr('src','');
    });
  });