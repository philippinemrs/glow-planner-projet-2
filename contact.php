<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calendrier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="contact.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <!-- Ajout de la classe "logo" pour le style du logo -->
        <img src="LOGO - 1.png" alt="Logo du site" class="logo">
    </header>
    
<nav>
    <a href="a propos.html">A propos</a>
    <a href="blog.html">Blog</a>
    <a href="calendrier.html">Calendrier</a>
    <a href="planificateur.html">Plannificateur</a>
</nav>
<h1>Nous contacter </h1>

  <form>
    <label for="nom">Nom et Prénom :</label>
    <input type="text" id="nom" name="nom" class="half-width" required>
    <input type="text" id="prenom" name="prenom" class="half-width" required>

    <label for="email">Adresse e-mail :</label>
    <input type="email" id="email" name="email" class="full-width" required>

    <label for="objet">Objet :</label>
    <input type="text" id="objet" name="objet" class="full-width" required>

    <label for="message">Message :</label>
    <textarea id="message" name="message" rows="4" class="full-width" required></textarea>

    <button type="submit">Envoyer</button>
  </form>

</body>




