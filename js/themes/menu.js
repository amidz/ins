jQuery(document).ready(function() {	
	//опред кол-во элементов
	var count = jQuery("div#sub_menu ul li ul li").length;
	//Перенести в др JS
	jQuery('.views_slideshow_controls_text_previous').html('');
	jQuery('.views_slideshow_controls_text_next').html('');
  jQuery('div#sub_menu ul li').hover(function() {
    //выполняется при наведении
    jQuery(this).find('ul').fadeIn(300);
	//alert(jQuery(this).html());
	jQuery("div#sub_menu ul li ul").height(31*count);
	
	
	 
  },
  function() {
    //выполняется когда мы убираем мышку
    jQuery(this).find('ul').hide();
  });	
});

