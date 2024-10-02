<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Cours PHP objet</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-4 text-center">
                <h1 class='mb-4'>L'employé du mois</h1>
                <img src="./assets/images/<?= $p->getPhoto() ?>" class="w-50 mb-4">
                <h3><?= $p->getPrenom() ?> <?= $p->getNom() ?></h3>
                <p><?= $info_exp ?></p>
                <p>Entreprise actuelle : <?= $p->getEntreprise() ?>
            </div>
        </div>
    </div>

</body>

</html>