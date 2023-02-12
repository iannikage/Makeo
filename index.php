<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test Makeo</title>
    <link href="style.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="colonne_droite">
        <h2>Formulaire de contact</h2>
        <form id="formulaire" action="traitement.php" method="post">
            <label for="nomprenom">Nom et prénom :</label>
            <input type="text" id="nomprenom" name="nomprenom">

            <label for="email">Adresse email :</label>
            <input type="email" id="email" name="email">

            <label for="message">Message :</label>
            <textarea id="message" name="message"></textarea>

            <input type="submit" value="Envoyer">
        </form>
    </div>
    <div class="colonne_gauche">
        <h2>Tableau des données des formulaires</h2>
        <table>
            <thead>
            <tr>
                <th>Nom et prénom</th>
                <th>Adresse email</th>
                <th>Message</th>
            </tr>
            </thead>


            <tbody>
            <!-- les données stockées seront insérées ici -->
            <?php
            // Inclusion du fichier traitement.php
            include 'traitement.php';

            // Vérification de la définition de la variable $result
            if (isset($result)) {
                // Boucle pour afficher les données de la base de données dans le tableau
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['nomprenom'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['message'] . "</td>";
                    echo "</tr>";
                }
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
</body>
</html>