<?php 
require '../lib/config.php';
?>
<head>
<link rel="stylesheet" href="/callme/tpl/css/style.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
<div class="container">
		<div class="callmeicon" style="position:fixed; right: 30px; bottom: 30px; min-width:30px; max-width:80px; height=auto;">
		<img src="./callme/tpl/img/phone.png" class="img-responsive" id="callmeimg" width="80px" height="80px"/>
		</div>
</div>

<!-- Modal -->
<div class="overlay"></div>
<div class="popup">
<div class="close_window">ЗАКРЫТЬ Х</div>

<form id="modalform" action= "/callme/lib/send.php" method= "POST"> 
 <div class="formtitle"><?=$callmetext?></div>
<input id="modalform" type= "text" name= "phone" placeholder="ваш телефон" required/>
 
<input id="modalformbtn" type= "submit" value= "<?=$btntext?>"> 

 <div class="formbottom"><?=$bottomtext?><br><?=$bottomphone?></div>
  
</form>

<div class="copyright">© <a href="http://gatapov.com/2015/12/02/скрипт-обратного-звонка-с-смс-уведомл/" target="blank" style="color: #B5B4B4; text-decoration: none;">Callme script</a></div>
</div>

<script type="text/javascript">
$('#callmeicon, .callmeicon, .close_window, .overlay').click(function (){
$('.popup, .overlay').css({'opacity': 0, 'visibility': 'hidden'});
});
$('#callmeicon, .callmeicon').click(function (e){
$('.popup, .overlay').css({'opacity': 1, 'visibility': 'visible'});
e.preventDefault();
});
</script>


<script type="text/javascript">

$(function() {
    $("img#callmeimg")
        .mouseover(function() { 
            var src = $(this).attr("src").match(/[^\.]+/) + "_over.png";
            $(this).attr("src", src);
        })
        .mouseout(function() {
            var src = $(this).attr("src").replace("_over.png", ".png");
            $(this).attr("src", src);
        });
});
</script>
<script>
setInterval(function() {$( ".callmeicon" ).effect( "shake" );}, 5000);
</script>

</body>
