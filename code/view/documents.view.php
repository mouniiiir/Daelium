<?php
   if (!isset($data))
      header("Location:"."../");
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("../view/include/includes.view.php"); ?>
    <link rel="stylesheet" href="../data/css/documents.css">
    <title>Dælium - Documents</title>
  </head>
  <body>
    <?php include("../view/include/header.view.php"); ?>
    <section class="col-lg-10 col-lg-offset-1">
      <div class="col-lg-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Mes fichiers : <?= $data['dirName'] ?></h4>
            <small><?php foreach ($data['path'] as $folder) { ?><a href="<?= $folder['path'] ?>"><?= $folder['name'] ?></a> &raquo; <?php } ?></small>
          </div>
          <div class="panel-body table-responsive no-padding">
            <?php if (count($data['dir'])>0) { ?>
            <table class="table table-bordered table-hover">
              <thead>
                <tr><th class="col-lg-7">Nom</th><th class="col-lg-2">Actions</th><th class="col-lg-2">Date de modification</th><th class="col-lg-1">Taille</th></tr>
              </thead>
              <tbody>
                <?php foreach ($data['dir'] as $elem) { ?>
                  <tr>
                    <td><a href="<?= $elem['link'] ?>"><span class="glyphicon glyphicon-<?= $elem['type'] ?>"></span><?= $elem['name'] ?></a></td>
                    <td><div class="btn-group">
                      <?php if ($elem['type']=="file") { ?>
                        <a href="<?= $elem['link'] ?>" class="btn btn-default"><span class="glyphicon glyphicon-download-alt no-margin"></span></a>
                        <button type="button" data-target="<?= $elem['target'] ?>" class="share-btn btn btn-default" data-toggle="popover" title="Partager" data-content="Chargement du lien de partage en cours ...">
                          <span class="fa fa-link no-margin"></span>
                        </button>
                      <?php } ?>
                      <!--<a class="btn btn-default"><span class="glyphicon glyphicon-sort no-margin"></span></a>-->
                      <a data-target="<?= $elem['target'] ?>" class="delete-btn btn btn-default"><span class="glyphicon glyphicon-trash no-margin"></span></a>
                    </div></td>
                    <td><?= (isset($elem['date'])?$elem['date']:"") ?></td>
                    <td><?= (isset($elem['size'])?$elem['size']:"") ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <?php } else { ?>
              <blockquote class="text-center"><b>Ce dossier est vide.</b></blockquote>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Créer un dossier</h4>
            <small>Le dossier sera créé dans le répertoire courant.</small>
          </div>
          <div class="panel-body">
            <div class="loader">.</div>
            <div class="input-group col-sm-12">
              <div class="col-sm-9"><input id="newFolderName" placeholder="Nom du dossier" class="form-control" type="text"></div>
              <button id="sendNewFolder" data-action="?ajax&create&folder=<?= $data['upPath'] ?>"  class="btn btn-default col-sm-3"><span class="fa fa-folder"></span>Créer</button>
            </div>
          </div>
        </div>
        <div id="uploadPanel" class="panel panel-default">
          <div class="panel-heading">
            <h4>Ajouter un fichier</h4>
            <small>Le fichier sera enregistré dans le répertoire courant avec le même nom.</small>
          </div>
          <div class="panel-body">
            <div class="loader">.</div>
            <div class="input-group col-sm-12">
              <input id="file" name="file" type="file" class="col-sm-9">
              <button id="sendFile" data-action="?ajax&upload&folder=<?= $data['upPath'] ?>"  class="btn btn-default col-sm-3"><span class="glyphicon glyphicon-cloud-upload"></span>Envoyer</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include("../view/include/footer.view.php"); ?>
    <script src="../data/js/documents.js"></script>
  </body>
</html>
