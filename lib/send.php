 
<?php 
require 'config.php';
 
// Принимаем данные с формы 
 $phone=$_POST['phone']; 
 // Отправляем письмо админу  
mail($adminemail, 'сообщение', $phone); 

$body=file_get_contents("http://sms.ru/sms/send?api_id=".urlencode(iconv("windows-1251","utf-8","$key"))."&to=".urlencode(iconv("windows-1251","utf-8","$num"))."&text=".urlencode(iconv("windows-1251","utf-8","$phone")));

// Выводим сообщение пользователю 
print "<script language='Javascript'>
$('#modalform').css({'visibility': 'hidden'});

</script>";
echo "<h1 id='result'>";
print "Спасибо за заявку!";
echo "</h1>";
echo "<p id='result'>";
print "мы свяжемся с вами в ближайшее время";
echo "</p>";
print "<script language='Javascript'>
$('.resultsbtn').click(function (){
$('.popup, .overlay').css({'opacity': 0, 'visibility': 'hidden'});
$('.callmeicon').css({'visibility': 'visible'});
});
</script>
<div class='resultsbtn'>OK</div>";


exit; 
 ?>
