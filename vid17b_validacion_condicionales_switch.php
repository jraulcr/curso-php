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

    $contra = $_POST["contra_usuario"];
    $nombre = $_POST["nombre_usuario"];

    switch (true):

        case $nombre == 'Juan' && $contra == '1234':
            echo "Usuario autorizado. Hola Juan";
            break;

        case $nombre == 'Maria' && $contra == '5555':
            echo "Usuario autorizado. Hola María";
            break;

        case $nombre == 'Pedro' && $contra == '1111':
            echo "Usuario autorizado. Hola Pedro";
            break;

        default:
            echo "Usuario NO autorizado.";
            break;

    endswitch;
}
?>