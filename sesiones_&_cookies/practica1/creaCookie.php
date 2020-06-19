<?php


//setcookie('idioma_seleccionado', $_GET['idioma'], time()+86400);
setcookie('idioma_seleccionado', 'es', time()+86400);

header('Location:ver_cookie.php');
?>
