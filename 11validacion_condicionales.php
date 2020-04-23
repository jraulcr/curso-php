<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

if (isset($_POST["enviando"])) {

	//$edad = $_POST["edad_usuario"];

	$contra = $_POST["contra_usuario"];	

	$nombre = $_POST["nombre_usuario"];

switch (true) :

	case $nombre=='Juan' && $contra=='1234':
		echo "Usuario autorizado. Hola Juan";
		break;

	case $nombre=='Maria' && $contra=='5555':
		echo "Usuario autorizado. Hola María";
		break;		
	
	case $nombre=='Bego' && $contra=='1111':
		echo "Usuario autorizado. Hola Bego";
		break;	

	default:
		echo "Usuario NO autorizado. Fuera de aquí.";
		break;

endswitch;

	//Condicional ternaria
	//$resultado = $nombre=="Juan" && $contra=="1234" ? "Puedes acceder" : "No Puedes acceder.";

	//echo $resultado;

/*	if ($edad<=18) {
		echo "Eres menor de edad";
	} else if($edad<=65) {
		echo "Eres maduro";
	}else{
		echo "Cuídate";
	}*/
	
} 
	
?>