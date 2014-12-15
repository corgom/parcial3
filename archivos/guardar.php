<?php
$dir_destino = "cargados/";
$archivo_destino = $dir_destino . basename($_FILES["archivo"]["name"]);

if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo_destino)) {
    echo "El archivo ". basename( $_FILES["archivo"]["name"]). " ha sido cargado.";
} else {
    echo "Hubo un error al cargar el archivo.";
}

?>