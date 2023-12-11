<?php
include 'con_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["borrar"])) {
    $id = $_POST["id"];

    $sql = "DELETE FROM libros WHERE id=$id";

    if ($conex->query($sql) === TRUE) {
        echo "Registro eliminado con éxito.";
    } else {
        echo "Error al eliminar el registro: " . $conex->error;
    }
}

$conex->close();
?