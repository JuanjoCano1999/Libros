<?php
include 'con_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["actualizar"])) {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $tipo = $_POST["tipo"];
 
    $sql = "UPDATE libros SET titulo='$titulo', tipo='$tipo' WHERE id='$id'";

    if ($conex->query($sql) === TRUE) {
        echo "Registro actualizado con éxito.";
    } else {
        echo "Error al actualizar el registro: " . $conex->error;
    }
}

$conex->close();
?>