jQuery(document).ready(function($) {
  rotateSlides();
  
  function rotateSlides(){
    $('#slider').cycle({  // rotate banners
      slideExpr:'.views-row',
      fx:     'fade',
      timeout:  5000,
      speed:  800,
      pause:  1,
      before: onBefore ,
      pager: '#slider-pager',
      prev:  '#link-prev',
      next:  '#link-next'
    });
  }
  
  function onBefore() {			
    var title = $(this).children(".views-field-title").text();
    var body = $(this).children(".views-field-body").text();
    var ltitle = $(this).children(".views-field-field-link").text();
    var lhref = $(this).children(".views-field-field-link").find("a").attr("href");

    $('#slider-header #slide-title').text(title);
    $('#slider-header #slide-body').text(body);
    $('#slider-header #slide-link').text(ltitle);
    $('#slider-header #slide-link').attr("href", lhref);
  };

  $('.has-events a').hover(function(e){
    var text = this.name;
    //alert(text);
      $('#event-overlay').css({left:e.pageX - $('#event-overlay').outerWidth() / 2, top:e.pageY - $('#event-overlay').outerHeight() - 8}).text(text).show();
    },function(){
      $('#event-overlay').hide();
  });
    
});