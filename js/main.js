const hamburger = document.querySelector('.brand-hamburger');
const menu = document.querySelector('.nav-link');
const qq_wrapper =document.querySelector('#qq-wrapper');
const qq_scan =document.querySelector('.qqscan');
//hide-menu

hamburger.addEventListener('click', function(){
   menu.classList.toggle('hide-menu');
});

qq_wrapper.addEventListener('click', (event)=>{
   event.target.classList.toggle('scanchange')
});

$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
