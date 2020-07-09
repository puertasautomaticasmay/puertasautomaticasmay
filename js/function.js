$(document).ready(function(){
  var current = $('#navbar-header').attr("current");
  var ref = "";
  $('#nav-items>li a').each(function (index, value) {
    ref = $(this).attr("href");
    if(ref==current)
      $(this).addClass("selected");
  });
});
