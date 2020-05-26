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

    $nombre = $_POST["nombre_usuario"];
    $contra = $_POST["contra"];
    //$edad = $_POST["edad_usuario"];

    //Condicional ternaria
     //$resultado = $nombre=="Juan" && $edad<18 ? "Eres menor de edad. No Puedes acceder" : "Puedes acceder.";
     //echo $resultado;

    	//Condicional ternaria
	$resultado = $nombre=="Juan" && $contra=="1234" ? "Puedes acceder" : "No Puedes acceder.";

	echo $resultado;
}
?>