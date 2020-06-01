<?php
include './lib/db.php';
include './lib/data.php';
include 'partials/header.php';

?>

<body id="top">
    <div class="banner-logo">
        <img class="logo" src="res\images\logo_mcir.png" alt="">

    </div>
    <!--------------------- Nos REALISATIONS -------------------->
    <div class="container-fluid" id="realisations">
        <div class="row">
            <h2 class="title col-12"><b>NOS REALISATIONS</b></br></h2>
            <?php foreach ($works as $work) : ?>
                <div class="col-4 realisation">
                    <img class="img-realisation" src="res\images\<?= $work['image_url']; ?>" alt="<?= $work['titre']; ?>">
                    <p class="title-img-realisation"><?= $work['titre']; ?></p>
                    <p><?= $work['description']; ?></p>
                    <a class="link" href="#">EN SAVOIR PLUS</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!------------------------------------------------>

    <div class="interval"></div>

    <!--------------------- Le Groupe -------------------->
    <div id="groupe">
        <div class="img-groupe">
            <div class="desc-groupe">
                <h1 class="title-groupe"><?= $groupe['titre']; ?></h1>
                <p><?= $groupe['description']; ?>.</p>
            </div>
        </div>
    </div>
    <!------------------------------------------------>

    <div class="interval"></div>

    <!--------------------- Nos Valeurs -------------------->
    <div class="container-fluid" id="realisations">
        <div class="row">
            <h2 class="title col-12"><b>NOS VALEURS</b></br></h2>
            <?php foreach ($valeurs as $valeur) : ?>
                <div class="col-4 valeur">
                    <img class="img-valeur" src="res\images\<?= $valeur['image_url']; ?>" alt="<?= $valeur['titre']; ?>">
                    <div class="txt-image">
                        <h1 class="title-img-valeur"><?= $valeur['titre']; ?></h1>
                        <p><?= $valeur['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!------------------------------------------------>

    <?php include 'partials/footer.php'; ?>