<div class="container">
    <h1><?= $titre ?></h1>
    <section class="d-flex flex-wrap justify-content-evenly w-75">
        <?php foreach ($robots as $key => $robot) : ?>
            <div class="text-center w-25">
                <img src="http://robohash.org/<?=  $robot->numero ?> " class="w-100">
                <p><?= $robot->nom ?></p>
            </div>
    
        <?php endforeach ?>
    </section>
</div>