  <header class="page-header" style="margin: 0px; border: none;">
    <nav class="nav navbar-default container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href=".."><img src="../data/img/D.png"/><span class="text">Daelium</span></a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <!-- Menu des differentes section du site  plus module de recherche-->
        <ul class="nav navbar-nav navbar-left">
          <li<?php echo($data['page']=="Main"?" class='active'":"") ?>><a href="../controler/main.ctrl.php"><span class="glyphicon glyphicon-home"></span><span class="text">Accueil</span></a></li>
          <li<?php echo($data['page']=="Profil"?" class='active'":"") ?>><a href="../controler/profil.ctrl.php"><span class="glyphicon glyphicon-user"></span><span class="text">Profil</span></a></li>
          <li<?php echo($data['page']=="Documents"?" class='active'":"") ?>><a href="../controler/documents.ctrl.php"><span class="glyphicon glyphicon-file"></span><span class="text">Documents</span></a></li>
          <li<?php echo($data['page']=="Agenda"?" class='active'":"") ?>><a href="../controler/agenda.ctrl.php"><span class="glyphicon glyphicon-calendar"></span><span class="text">Agenda</span></a></li>
          <li<?php echo($data['page']=="Messages"?" class='active'":"") ?>><a href="../controler/messages.ctrl.php"><span class="glyphicon glyphicon-envelope"></span><span class="text">Messagerie</span></a></li>
          <li<?php echo($data['page']=="Annuaire"?" class='active'":"") ?>><a href="../controler/annuaire.ctrl.php"><span class="fa fa-book"></span><span class="text">Annuaire</span></a></li>
          <?php if($data["user-type"] == "booker") { ?>
            <li<?php echo($data['page']=="Groupes"?" class='active'":"") ?>><a href="../controler/groupes.ctrl.php"><span class="fa fa-group"></span><span class="text">Groupes</span></a></li>
          <?php } else { ?>
            <li<?php echo($data['page']=="Evenements"?" class='active'":"") ?>><a href="../controler/evenements.ctrl.php"><span class="glyphicon glyphicon-music"></span><span class="text">Manifestations</span></a></li>
          <?php }?>
          <li<?php echo($data['page']=="Negociations"?" class='active'":"") ?>><a href="../controler/negociations.ctrl.php"><span class="fa fa-comments"></span><span class="text">Negociations</span></a></li>


          <li id="liste" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span><span class="text">Listes <span class="caret"></span></span></a>
            <ul class="dropdown-menu">
              <li><a href="../controler/liste_groupe.ctrl.php"><span class="text">Liste Groupes</span></a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../controler/liste_manifestation.ctrl.php"><span class="text">Liste Manifestations</span></a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../controler/liste_utilisateur.ctrl.php"><span class="text">Liste Utilisateurs</span></a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right"><!--
          <li>
            <form class="navbar-form navbar-right" method="GET" action="#">
              <a class="btn btn-default collapsed" role="button" data-toggle="collapse" href="#searchBarCollapse" aria-expanded="false" aria-controls="searchBarCollapse"><span class="glyphicon glyphicon-search no-margin"></span></a>
              <div class="collapse" id="searchBarCollapse">
                <div class="input-group collapse collapsed" id="searchBar">
                  <input type="text" class="form-control" placeholder="Je cherche ...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#searchBarCollapse" aria-expanded="false" aria-controls="searchBarCollapse"><span class="glyphicon glyphicon-remove no-margin"></span></button>
                  </span>
                </div>
              </div>
            </form>
          </li>-->
          <!-- Menu de l'uilisateur-->
          <li id="notifs" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-bell"></span><?php if($data['notifs-menu']['count']>0) { ?><sup><span class="notifs-count label label-primary" style="font-size: 12px;"><?= $data['notifs-menu']['count'] ?></span></sup><?php } ?></a>
            <ul class="dropdown-menu">
              <li class="notifs-menu">
                  <a href="../controler/notifications.ctrl.php">Notifications</a>
                  <ul class="">
                    <?php foreach ($data["notifs-menu"]["list"] as $key => $value) { ?>
                      <a href="../controler/notifications.ctrl.php?id=<?= $value['id'] ?>" data-id="<?= $value['id'] ?>" class="notif-item bg-info"><span class="icon"><span class="fa fa-<?= $value['icon'] ?>"></span></span><?= $value["titre"] ?></a>
                    <?php } ?>
                  </ul>
                </li>
            </ul>
          </li><!--
          <li id="settings" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span><span class="text">Paramétres <span class="caret"></span></span></a>
            <ul class="dropdown-menu">
              <li>
                <?php if($data["type"]=="booker") { ?>
                  <p class="colsm-12"><span class="glyphicon glyphicon-ok"></span>Booker</p>
                <?php } else { ?>
                  <a href="../controler/main.ctrl.php?type=booker">Booker</a>
                <?php } ?>
              </li>
              <li>
                <?php if($data["type"]=="organisateur") { ?>
                  <p class="colsm-12"><span class="glyphicon glyphicon-ok"></span>Organisateur</p>
                <?php } else { ?>
                  <a href="../controler/main.ctrl.php?type=organisateur">Organisateur</a>
                <?php } ?>
              </li>
              <li role="separator" class="divider"></li>
              <li><a href="#" onclick="$('#debug-info-frame').collapse('show')"><span style="margin-right: 10px;" class="fa fa-code"></span><span class="text">Debug</span></a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>-->
          <li id="profile" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><span class="text">Compte <span class="caret"></span></span></a>
            <ul class="dropdown-menu">
              <li><a href="../controler/profil.ctrl.php">Voir le profil</a></li>
              <li><a href="../controler/profil_edit.ctrl.php">Modifier le profil</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../controler/parametre.ctrl.php"><span class="glyphicon glyphicon-cog"></span>Paramétres du Compte </a></li>
              <li role="separator" class="divider"></li>
              <li><a id="logoutBtn" href="#"><span class="glyphicon glyphicon-off"></span>Déconnexion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <div class="alerts">
    <?php foreach ($data['alerts'] as $key => $alert) { ?>
      <p id="alert<?= $key ?>" class="alert alert-<?= $alert['type'] ?> alert-dismissible fade in" onclick="$('#alert<?= $key ?>').alert('close')"><span class="glyphicon glyphicon-<?= $alert['icon'] ?>"></span><span class="text"><?= $alert['message'] ?></span><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></p>
    <?php } ?>
    </div>
  </header>
  <div id="debug-info-frame" class="collapse collapsed">
    <div style="background-color: #DDD; width:70%; left: 15%; top: 10%; height: 80%; padding: 20px; position: fixed; z-index: 15; border: 1px solid #777; border-radius: 15px;">
      <a href="#" onclick="$('#debug-info-frame').collapse('hide')" style="position: absolute; top: 10px; right: 15px;"><span class="fa fa-close"></span></span></a>
      <h2>Debug :</h2>
      <div style="height: 80%; padding: 20px; overflow: auto;">
      <?php
         echo('<b>$data</b>');
         var_dump($data);

         echo('<b>$_SESSION</b>');
         var_dump($_SESSION);

         echo('<b>$_GET</b>');
         var_dump($_GET);

         echo('<b>$DEBUG</b>');
         if (isset($DEBUG)) var_dump($DEBUG);
      ?>
      </div>
    </div>
  </div>
