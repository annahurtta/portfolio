require('bootstrap');
var app = {
  navigateTo: function(){
    $('.li_nav').click(function(e){
      e.preventDefault();
      var clicked_nav = $(this).data('navigate');
       $('html, body').animate({
        scrollTop: $('.' + clicked_nav).offset().top -50
      });
    })
  },
  init: function() {
    app.navigateTo();
  }
}
$(document).ready(function () {
  app.init();
});