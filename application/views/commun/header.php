<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="dist/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <title><?=$title?></title>

  </head>
  <body>

    <header>
      <div class="container-fluid bg-blue py-5">
        <h1 class="text-center text-white">EXERCICES WEBBOY</h1>
      </div>

      <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container">
          <h1 class="display-4">Bienvenue sur mon site d'entraînement</h1>
          <p class="lead">Exercices développeur web | Webboy.</p>
          <p class="lead">Cette page servira à recenser et à naviguer dans toutes les pages que je vais réaliser au fur et à mesure de la formation.</p>
        </div>
      </div>

      <div class ="collapse navbar-collapse" id="main_nav">
        <ul class ="nav navbar-nav">
          <li ><?= anchor(’index’, "Accueil"); ?></li >
          <li ><?= anchor(’contact’, "Contact"); ?></li >
        </ul >
      </div >

    </header>

