<?php 
require '../lib/config.php';
?>
<head>
<link rel="stylesheet" href="/callme/tpl/css/style.css">

</head>
<body>

<!-- Modal -->
<div class="modal-overlay"></div>
<div class="modal-popup">


<form id="modalform1" action= "/callme/lib/send.php" method= "POST"> 
 <div class="formtitle">Вы были на сайте 1 секунду, нашли что искали?<br>Давайте мы вам позвоним?</div>
<input id="modalform" type= "text" name= "phone" placeholder="ваш телефон" required/>
 
<input id="modalformbtn" type= "submit" value= "<?=$btntext?>"> 

 <div class="formbottom"><?=$bottomtext?><br><?=$bottomphone?></div>
  
  <div class="modal_close_window">Я еще поищу)</div>
  
  </div>
</form>
<script>
$('#callmeicon, .callmeicon, .modal_close_window, .modal-overlay').click(function (){
$('.modal-popup, .modal-overlay').css({'opacity': 0, 'visibility': 'hidden'});
});
</script>
</body>