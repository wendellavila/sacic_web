$(function() {
  	$('.navbar').affix({
  		offset: { top: $('.navbar').offset().top }
   	});
});

function Toggleicon(button) {
  if($('#toggle-icon').hasClass('fa fa-1-5x fa-bars')) {
  document.getElementById("toggle-icon").className = "fa fa-1-5x fa-minus";
  }
  else {
  document.getElementById("toggle-icon").className = "fa fa-1-5x fa-bars";
  }
}

