
$(function(){
$('body').append('<div class="callme">');
});

$(document).ready(function(){ 
  $.get("/callme/tpl/form.php", function(data) {
    $(".callme").html(data);
  });
});

