<?php
    session_start();
    include_once("./includes/data.inc.php");
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/connexion.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/connected.css">
    <title>Gmail</title>
</head>

<body>
    <header>
        <a href="#"><img class="logo" src="./asset/gmail_logo.png" alt="logo"></a>
        <nav>
            <ul class="navigation">
                <li><a href="#help"> POUR LES PROS</a></li>
                <li><a href="./connexion.html"> CONNEXION</a></li>
                <li><a href="./index.html">CRÉER UN COMPTE</a></li>
            </ul>
        </nav>
    </header>

    <main>

    <div class="welcome-message">
            <h1>Bienvenue <?php echo $prenom . " " . $nom; ?></h1>
        </div>

    <?php
    include_once("./includes/login.inc.php");
    echo "<p class=\"success\">Bonjour ".$_SESSION['mail'];
    ?>
    </main>
    
</body>
</html>