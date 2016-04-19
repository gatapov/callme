 
<?php 
require 'config.php';
 
 
// Принимаем данные с формы 
 $phone=$_POST['phone']; 

 // Отправляем письмо админу  
mail($adminemail, 'сообщение', $phone); 

$body=file_get_contents("http://sms.ru/sms/send?api_id=".urlencode(iconv("windows-1251","utf-8","$key"))."&to=".urlencode(iconv("windows-1251","utf-8","$num"))."&text=".urlencode(iconv("windows-1251","utf-8","$phone")));



// Выводим сообщение пользователю 

print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000); 
//--></script> 
 
$msg 
 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  

exit; 
 
?>