<?php
global $conn;
function obrirConnexioBD() {
    global $conn;
    $servername = "172.16.17.3";
    $username = "dcastrog";
    $password = "Qwerty1234";
    $dbname = "incidencies";

    // Crear connexió
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Error de connexió: " . $conn->connect_error);
    }
}

function tancarConnexioBD() {
    global $conn;
    $conn->close();
}
?>
