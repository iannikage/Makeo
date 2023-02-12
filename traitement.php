<?php
// Information de connection à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "makeo_formulaire_contact";

// Creation de la connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Verification de connection
if ($conn->connect_error) {
    die("Connection échouée: " . $conn->connect_error);
}
echo "Connection réussie";


$conn->close();
?>