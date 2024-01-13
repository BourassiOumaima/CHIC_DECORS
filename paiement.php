<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAIEMENT</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-image: url(carte.jpg);
            color :white;
        }

        form {
            max-width: 500px;
            margin: 0px auto;
            heigth :400px;
            border-radius: 40px;
            background-color:rgb(59, 28, 28);
            padding :20px;
            margin-top:40px;
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
            background-color:black;
            color: navajowhite;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        h1{
            color :white;
            font-family:cursive ;
            font-size: 30px;
        }
    </style>
</head>
<body>
<form action="paiement.php" method="POST">
        
        <h1>EFFECTUER VOTRE PAIEMENT</h1>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <label for="cin">CIN :</label>
        <input type="text" id="cin" name="cin" required>
        <label for="num">Numéro de carte :</label>
        <input type="text" id="num" name="num" required>
        <button type="submit">Valider</button>
        <button type="reset">Annuler</button>
        
    </form>
</body>
</html>
<?php
// Fonction pour la connexion au serveur et à la base

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
if (isset($_POST['email']) && isset($_POST['cin']) && isset($_POST['num'])) {
    // Connexion à la base de données
    connexion();

    $email = $_POST['email'];
    $cin= $_POST['cin'];
    $num= $_POST['num'];
    // Préparer la requête d'insertion
    $stmt = $bdd->prepare("INSERT INTO paiement(email,cin,numcarte) VALUES (?, ?, ?)");

    // Exécuter la requête avec les données du formulaire
    $stmt->execute([$email, $cin,$num]);

    // Fermer la connexion
    $bdd = null;
    $messageAlerte = 'Paiement effectué avec succès!';
    //exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        <?php
        if (!empty($messageAlerte)) {
            echo "alert('{$messageAlerte}');";
        }
        ?>
    </script>
</head>
<body>

</body>
</html>
