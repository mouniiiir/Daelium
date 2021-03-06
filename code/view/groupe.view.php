<?php
   if (!isset($data))
      header("Location:"."../");
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("../view/include/includes.view.php"); ?>
    <link rel="stylesheet" href="../data/css/artiste.css">
    <title>Dælium - Artiste - <?= $data['groupe']['nom'] ?></title>
  </head>
  <body>
    <?php include("../view/include/header.view.php"); ?>
    <section class="col-lg-offset-1 col-lg-10">
      <h1><?= $data['groupe']['nom']?></h1> <a class ="btn btn-primary" href="../controler/groupe_fiche.ctrl.php?id=<?= $data['groupe']['id'] ?>" > Voir fiche public </a>
      <article class="col-lg-offset-2 col-lg-10">
        <div class="navbar navbar-right">
          <div class ="col-lg-3">
          <a class ="btn btn-default" href="../controler/groupes.ctrl.php"> Retour </a>
        </div>
        <div class ="col-lg-4">
          <a class ="btn btn-warning" href="../controler/groupe_edit.ctrl.php?id=<?= $data['groupe']['id'] ?>" > Modifier </a>
        </div>
<div class ="col-lg-4">
          <form action="../controler/groupe_edit.ctrl.php?action=remove" method="post">
            <input type="hidden" name="idgroupe" value="<?= $data['groupe']['id'] ?>">
            <input class="btn btn-danger" type="submit" value="Supprimer">
          </form>
          </div>

        </div>
      </article>
      <article class="col-lg-6 infoProfile">
        <!-- Information principals -->
        <div class="well">
          <h4>Informations générales :</h4>
          <table class="table">
            <colgroup>
              <col class="col-lg-3"/>
              <col/>
            </colgroup>
            <tbody>
              <tr>
                <th>Nom de scene :</th><td><?= $data["groupe"]['nom']?></td>
              </tr>
              <tr>
                <th>email:</th><td><?= $data["groupe"]['email']?></td>
              </tr>
              <tr>
                <th>Nombre de membres :</th><td><?= $data['groupe']['nb']?> </td>
              </tr>
              <tr>
                <th>Genre :</th><td><?= $data['groupe']['genre'] ?> </td>
              </tr>
              <tr>
                <th>Lieu :</th><td><?= $data['groupe']['lieu']['adresse'] ?> <?php if($data['groupe']['lieu']['googlemaps'] != NULL){ ?> <a href="<?= $data['groupe']['lieu']['googlemaps']  ?>">Google Maps</a> <?php } ?> </td>
              </tr>
              <tr>
                <th>Description :</th><td><?= $data['groupe']['description'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Fin Information principals -->
      </article>


      <article class="col-lg-6 infoProfile">
        <!-- Information principals -->
        <div class="well">
          <h4>Liste des membre du groupe</h4>
          <?php foreach ($data['artistes'] as $art) { ?>

              <div class="panel panel-primary">
                <div class="panel-heading"><?= $art['nom']?> <?= $art['prenom']?></div>
                <div class="panel-body">
                  <table class="table">
                    <colgroup>
                      <col/>
                      <col/>
                    </colgroup>
                    <tbody>
                      <tr>
                        <th>Nom :</th><td><?= $art['nom']?></td>
                      </tr>
                      <tr>
                        <th>Prenom :</th><td><?= $art['prenom']?> </td>
                      </tr>
                      <tr>
                        <th>Date de naissance :</th><td><?= $art['dateNaissance'] ?></td>
                      </tr>
                      <tr>
                        <th>Email :</th><td><?= $art['email'] ?></td>
                      </tr>
                      <tr>
                        <th>Telephone :</th><td><?= $art['telephone'] ?></td>
                      </tr>
                      <tr>
                        <th>Adresse :</th><td><?= $art['adresse'] ?></td>
                      </tr>
                      <tr>
                        <th>Mode de reversement du salaire :</th><td><?= $art['paiement'] ?></td>
                      </tr>
                      <?php if ($art['paiement'] == "Virement") { ?>
                        <tr>
                          <th>IBAN :</th><td><?= $art['IBAN'] ?></td>
                        </tr>
                      <?php } else if($art['paiement'] == "Cheque"){  ?>
                        <tr>
                          <th>Ordre du cheque :</th><td><?= $art['ordre'] ?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <div >

                    <form class="pull-right" action="../controler/artiste_edit.ctrl.php?action=remove" method="post">
                      <input type="hidden" name="idartiste" value="<?= $art['id']?>">
                      <input type="hidden" name="idgroupe" value="<?= $data['groupe']['id']?>">
                      <input class="btn btn-danger" type="submit" value="Suprimer du Groupe">
                    </form>
                    <a class ="btn btn-warning" href="../controler/artiste_edit.ctrl.php?id=<?= $art['id']?>"> Modifier </a>
                  </div>
                </div>
            </div>
          <?php }  ?>
          <a class ="btn btn-primary" href="../controler/artiste_edit.ctrl.php?idgroupe=<?= $data["groupe"]['id']?>&action=create"> Ajouter un Artiste </a>
        </div>
        <!-- Fin Information principals -->

      </article>



      <!-- Fin affichage des membre du groupe -->
      </section>
    <?php include("../view/include/footer.view.php"); ?>
  </body>
</html>
