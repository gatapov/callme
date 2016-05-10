<?php 
require '../lib/config.php';
?>
<head>
<link rel="stylesheet" href="/callme/tpl/css/callmestyle.css">
<link rel="stylesheet" href="/callme/tpl/css/css/callmebootstrap.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
<div class="container">

		<div class="callmeicon" style="position:fixed; right: 30px; bottom: 30px;">
		<div class="callme_phone">
		<div class="callme_wrapper">
		<span class="glyphicon glyphicon-earphone"></span>
		</div>
		</div>
		</div>
</div>

<!-- Modal -->
<div class="overlay"></div>
<div class="popup">
<div class="close_window">ЗАКРЫТЬ Х</div>

<form id="modalform" action="javascript:void(null);" onsubmit="call()"> 
 <div class="formheader">
 <div class="formtitle"><?=$callmetext?></div>

<input id="modalform" type= "text" name= "phone" placeholder="ваш телефон" required/>
 
<input id="modalformbtn" type= "submit" value= "<?=$btntext?>"> 
</div>
 <div class="formbottom"><?=$bottomtext?><br><?=$bottomphone?></div>
  
</form>
 <div class="results">
 </div>
 <div class="callme_copyright-wrapper">
<div class="callme_copyright">© <a href="http://callme.gatapov.com/" target="blank" style="color: #B5B4B4; text-decoration: none;">Callme script</a></div>
</div>
</div>

<script type="text/javascript">
$('#callmeicon, .resultsbtn, .callmeicon, .close_window, .overlay').click(function (){
$('.popup, .overlay').css({'opacity': 0, 'visibility': 'hidden'});
$('.callmeicon').css({'visibility': 'visible'});
});
$('#callmeicon, .callmeicon').click(function (e){
$('.popup, .overlay').css({'opacity': 1, 'visibility': 'visible'});
$('.callmeicon').css({'visibility': 'hidden'});
e.preventDefault();
});
/*
var timerId = setInterval(function() {
  $('.callme_wrapper2').css('transform', 'rotate(360deg)');

}, 2000);
*/

function call() {
 	var msg = $('#modalform').serialize();
        $.ajax({
          type: 'POST',
          url: 'callme/lib/send.php',
          data: msg,
          success: function(data) {
            $('.results').html(data);
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
 
}

	
	
</script>


</body>
