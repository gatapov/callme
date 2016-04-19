
$(function(){
$('body').append('<div class="callme">');
});

$(document).ready(function(){ 
  $.get("/callme/tpl/form.php", function(data) {
    $(".callme").html(data);
  });
});

setTimeout(function() { 
    $.get("/callme/tpl/modal.php", function(data) {
    $(".callme").html(data);
    $('.modal-popup, .modal-overlay').css({'opacity': 1, 'visibility': 'visible'});
  });

  }, 5000);
