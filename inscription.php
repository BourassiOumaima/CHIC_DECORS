<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
            color :navy;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            heigth :400px;
            border-radius: 20px;
            background-color:#7CB9E8;
            padding :20px;
            margin-top:20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-family:cursive ;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border : none;
            border-radius: 15px;
        }
        input:focus{
            border-color:navy;
    
        }

        button {
            background-color:rgb(206, 39, 206);
            color: navajowhite;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        h1{
            color :navy;
            font-family:cursive ;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <form action="inscription.php" method="POST">
        
        <h1>CREER VOTRE COMPTE</h1>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="pass">Mot de passe :</label>
        <input type="password" id="pass" name="pass" required>

        <button type="submit">S'inscrire</button>
        <button type="reset">Annuler</button>
        
    </form>

</body>
</html>
<?php
function connexion()
{
    try
    {
        global $bdd;
        $bdd = new PDO('mysql:host=localhost;dbname=utilisateur;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
}

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connexion à la base de données
    connexion();

    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    //$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); // Hasher le mot de passe
    $pass= $_POST['pass'];
    // Préparer la requête d'insertion
    $stmt = $bdd->prepare("INSERT INTO inscription (nom, prenom, email, pass) VALUES (?, ?, ?, ?)");

    // Exécuter la requête avec les données du formulaire
    $stmt->execute([$nom, $prenom, $email, $pass]);

    // Fermer la connexion
    $bdd = null;

    // Rediriger l'utilisateur vers une page de confirmation, par exemple
    header('Location: interface.php');
    exit;
}
?>

