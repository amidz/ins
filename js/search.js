jQuery(document).ready(function($) {

  var defaultText = "Search";
  
  $('#search-block-form .form-item-search-block-form input')
  .val(defaultText)
  .focus(function(){
    if ($(this).val() == defaultText){
      $(this).val("");      
    }
    
  })
  .blur(function(){
    if ($(this).val() == ""){
      $(this).val(defaultText);      
    }
  });

});