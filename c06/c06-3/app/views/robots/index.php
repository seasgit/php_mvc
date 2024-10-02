<div class="container">
    <h1><?= $titre ?></h1>
    <?php foreach ($robots as $key => $robot) : ?>
        <p><?= $robot->nom ?></p>
    <?php endforeach ?>
</div>