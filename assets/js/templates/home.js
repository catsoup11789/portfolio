$(document).ready(function($) {
$('.accordion').find('.accordion-toggle').click(function(){

  //Expand or collapse this panel
  $(this).next().slideToggle('fast', function(){
      if($(this).is(':visible')) {
          $(this).parent().find('h5').addClass('active');
          $(this).parent().find('h5').removeClass('inactive');
      } else {
          $(this).parent().find('h5').removeClass('active');
          $(this).parent().find('h5').addClass('inactive');
      }
  });

  //Hide the other panels
  $(".accordion-content").not($(this).next()).slideUp('fast', function() {
          $(this).parent().find('h5').removeClass('active');
          $(this).parent().find('h5').addClass('inactive');
  });

});
});