<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your home</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <form action="site.php" method="POST" name="authentification">
    <div class="cadre">
        <div class="nom">CHIC DECORS</div>
        <div class="email"><input id="email" type = "email" placeholder="username@gmail.com" name="email"></div>
        <div class="password"><input id="password" type = "password" placeholder="password" name = "pass"></div>
        <div class="signin"><input type="submit" value="Sign In"></div>
        <div class="or">Or</div>
        <div class="signup"><a href="inscription.php">Sign Up</a></div>
    </div>
    <div class="animation"></div>
    <script src ="site.js"></script>
    </form>
    <?php
include('bdd.php');

if(isset($_POST['email']) && isset($_POST['pass'])) {
    // Récupérer les données du formulaire
    $email_saisi = $_POST['email'];
    $pass_saisi = $_POST['pass'];

    // Connexion à la base de données
    connexion();

    // Préparer la requête pour récupérer l'utilisateur avec l'email donné
    $stmt = $bdd->prepare("SELECT * FROM inscription WHERE email = ?");
    $stmt->execute([$email_saisi]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier si l'utilisateur existe et le mot de passe est correct
    if($user && $pass_saisi === $user['pass']) {
        // Authentification réussie, rediriger vers la page interface.php
        header("location: interface.php");
        exit;
    } 

    // Fermer la connexion
    $bdd = null;
}
?>

</body>
</html>
