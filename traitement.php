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
// Vérifie si le formulaire a été soumis
if (isset($_POST['nomprenom']) && isset($_POST['email']) && isset($_POST['message'])) {

    // Enregistrement des données du formulaire dans des variables
    $nomprenom = $_POST["nomprenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validation des données du formulaire
    if (empty($nomprenom) || empty($email) || empty($message)) {
        echo "Vous n'avez pas rempli tous les champs";
        exit;
    }

    // Insertion des données du formulaire dans la base de données
    $sql = "INSERT INTO envoi_formulaire (nomprenom, email, message)
  VALUES ('$nomprenom', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouvel enregistrement effectué avec succès";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Récupération toutes les données de la base de données
    $sql = "SELECT nomprenom, email, message FROM envoi_formulaire";
    $result = mysqli_query($conn, $sql);
}

$conn->close();


