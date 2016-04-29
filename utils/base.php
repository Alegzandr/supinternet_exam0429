<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen LAMP - <?php if(isset($title)){ echo($title); } ?></title>
    <link rel="stylesheet" href="/utils/css/bootstrap.min.css">
    <link rel="stylesheet" href="/utils/css/styles.css">
</head>
<body>
<header class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">Examen LAMP</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/" id="home">Accueil</a></li>
                <li><a href="/exo1.php" id="exo1">Exercice 1</a></li>
                <li><a href="/exo2.php" id="exo2">Exercice 2</a></li>
            </ul>
        </nav>
    </div>
</header>

<main role="main" class="container">
    <?php if(isset($title)){ echo('<h1>' . $title . '</h1><hr>'); } ?>

    <?php if(isset($body)){ echo($body); } ?>
</main>

<footer class="footer">
    <div class="container">
        <br>
        <hr>
        <p class="text-center">&copy; 2016 - Alexandre Farrenq</p>
    </div>
</footer>

<script src="/utils/js/jquery.min.js"></script>
<script src="/utils/js/bootstrap.min.js"></script>
<?php if(isset($js)){ echo($js); } ?>
</body>
</html>