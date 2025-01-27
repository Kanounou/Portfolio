<?php
$id = mysqli_connect("localhost", "root", "", "portefolio");
if (!$id) {
    echo "Erreur de connexion";
    exit; // Arrêter le script si la connexion échoue
}

if (isset($_POST["bout"])) {
    // Récupération et sécurisation des données
    $nom_prenom = $id, $_POST["nom_prenom"];
    $email = $id, $_POST["email"];
    $telephone = $id, $_POST["telephone"];
    $sujet = $id, $_POST["sujet"];
    $message = $id, $_POST["message"];

    // Vérification si l'email existe déjà
    $req = "SELECT * FROM messages WHERE email = '$email'";
    $res = mysqli_query($id, $req);

    if (mysqli_num_rows($res) > 0) {
        echo "Ce mail existe déjà.";
    } else {
        // Insertion des données dans la table `messages`
        $req = "INSERT INTO messages (nom_prenom, email, telephone, sujet, message) 
                VALUES ('$nom_prenom', '$email', '$telephone', '$sujet', '$message')";
        if (mysqli_query($id, $req)) {
            echo "Message envoyé avec succès.";
        } else {
            echo "Erreur lors de l'envoi du message : " . mysqli_error($id);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Coumba Kanouté</title>
    <link rel="stylesheet" href="moi.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <button><a href="formation.html">Formation</a></button>
            <button><a href="experience.html">Expérience</a></button>
            <button><a href="competence.html">Compétences</a></button>
        </nav>     
        <a href="conctact.htm" class="contact">Mes contacts</a>   
    </header>  
    <section class="home">
        <div class="home-content">
            <h3>Bonjour</h3>
            <h2>Je suis <span>Coumba KANOUTE</span><br>Étudiante en Informatique</h2>
            <p>Passionnée par l'informatique et les technologies numériques, je suis toujours
                 en quête de nouvelles opportunités pour approfondir mes connaissances et développer
                 mes compétences. Curieuse et motivée, j'investis mon énergie dans des projets techniques
                 et innovants, avec l'ambition de relever des défis et de contribuer à des solutions informatiques
                 performantes et créatives.</p>
            <div class="button-box">
                <a href="cv.html" class="cv">Mon CV</a>
            </div>
        </div>
        <div class="image">
            <img src="moi.jpg" alt="Coumba Kanouté" width="200px">
        </div>
    </section> 
    <section class="about">
        <div class="about-content">
            <h2 class="heading">À propos de <span>moi</span></h2>
            <h3>Concepteur Développeur d'<span>Applications</span></h3>
            <p>En tant que conceptrice développeuse d’applications, mon objectif est de 
                créer des solutions qui non seulement répondent aux besoins 
                des utilisateurs, mais qui soient également faciles à utiliser et esthétiques.</p>
        </div>
    </section>
    <section class="contact-form">
        <h2 class="contact-me">Contactez <span>moi</span></h2>
        <form action="" method="POST">
            <div class="input-box">
                <input type="text" name="nom_prenom" placeholder="Nom Prénom" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="text" name="telephone" placeholder="Numéro de téléphone">
                <input type="text" name="sujet" placeholder="Sujet" required>
            </div>
            <textarea name="message" cols="30" rows="10" placeholder="Message" required></textarea>
            <button type="submit" name="bout" class="btn-envoyer">Envoyer</button>
        </form>
    </section>
    <footer class="footer">
        <div class="contenu">
            <a href="#"><box-icon class="fa-brands fa-instagram" name="instagram" type="logo"></box-icon></a>
            <a href="www.linkedin.com/in/coumba-kanouté-081678305">*<box-icon class="fa-brands fa-linkedin" name="linkedin" type="logo"></box-icon></a>
            <a href="#"><box-icon class="fa-brands fa-square-twitter" name="twitter" type="logo"></box-icon></a>
        </div>
        <ul class="list">
            <li><a href="#">FAQ</a></li>
            <li><a href="#">À propos de moi</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <p class="copyright">© 2024 Coumba Kanouté</p>
    </footer>
</body>
</html>
