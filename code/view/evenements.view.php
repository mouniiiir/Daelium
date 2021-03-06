<?php
   if (!isset($data))
      header("Location:"."../");
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("../view/include/includes.view.php"); ?>
    <link rel="stylesheet" href="../data/css/evenements.css">
    <title>Dælium - Mes manifestations</title>
  </head>
  <body>
    <?php include("../view/include/header.view.php"); ?>
    <section class="col-lg-offset-1 col-lg-10">
      <div class="row">
        <?php if($data["asevenements"]){ foreach($data['evenements'] as $evt) { ?>
          <div class="col-xs-2">
            <a href="../controler/evenement.ctrl.php?id=<?= $evt['id'] ?>" id="pic" class="thumbnail">
              <img class="category-banner img-responsive" src="<?= $evt['img'] ?>" alt="...">
              <div class="OverlayText"><?= $evt['name'] ?></div>
            </a>
          </div>
        <?php } } ?>
        <div  class="col-xs-2">
          <a href="../controler/evenement_new.ctrl.php" id="pic" class="thumbnail">
            <img class="category-banner img-responsive" src="../data/img/icons/plus.png" alt="...">
            <div class="OverlayText ">Ajouter une manifestation</div>
          </a>
        </div>
      </div>
    </section>
    <?php include("../view/include/footer.view.php"); ?>
  </body>
</html>
