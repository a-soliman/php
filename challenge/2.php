<?php 
/*changing colores*/
$text = "PHP Toturial";
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
?>