<?php

define('CONTROLLER_PATH', '../Controllers/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('LIBRARIES_PATH', '../libraries/');

require_once(LIBRARIES_PATH."Conexion.php");
$db = Conexion::getConnection();
$query = "INSERT INTO usuarios (correo, clave) VAlUES correo = '" . $_POST["correo"] . "' AND clave =  '" . $_POST["clave"] .  '"; ' 
$result = $db->query($query);
if ($result->num_rows > 0) {
    echo "Datos Correctos";
    while ($row = mysqli_fetch_assoy($result)) {
session_start();
$_SESSION["id_usuario"] = $row["id"];
$_SESSION["correo"] = $row["correo"];
$_SESSION["rol"] = $row["rol"];
    }
} else {
    header("Location:".VIEWS_PATH."login.php?info=1");
}
?>