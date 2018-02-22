<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$black = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $black, "fonts".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $black, "fonts".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei Aparecido");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: " . date("d/m/Y")), $gray);

//fontes do google gratuitas: https://fonts.google.com/

header("Content-type: image/jpeg");

imagejpeg($image);
/*
se passar parametro, é salvo em disco uma imagem.
se não passar parametro, ele apenas exibe em tela. Exemplo: imagejpeg($image);
*/
imagedestroy($image);


 ?>