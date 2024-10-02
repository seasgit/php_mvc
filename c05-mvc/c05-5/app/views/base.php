<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project MVC V3</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>

<body>
    <nav class="nav">
        <a class="nav-link" href="<?= BASE_URL ?>/accueil">accueil</a>
        <a class="nav-link" href="<?= BASE_URL ?>/robot">Robots</a>
    </nav>
    <!--  Contenu selon page  -->
    <?php require $page ?>
</body>

</html>