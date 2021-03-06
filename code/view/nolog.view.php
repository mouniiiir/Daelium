<?php
   if (!isset($data))
      header("Location:"."../");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../data/css/bootstrap.css">
    <link rel="stylesheet" href="../data/css/nolog.css"/>
    <link rel="icon" type="image/png" href="../data/img/D.png" />
    <title>Dælium</title>
  </head>
  <body onscroll="scroll()"><!-- onscroll="attachNavbar()" -->
    <div id="welcome-page">
      <nav id="navbar" class="container-fluid nav navbar-default">
        <div class="navbar-header">
          <img src="../data/img/D.png" alt="LogoSite" style="height:50px;"/>
        </div>
        <!-- Menu des differentes section du site  plus module de recherche-->
        <form class="navbar-form navbar-right" method="GET" action="#">
          <!-- Menu de l'uilisateur-->
            <a href="../controler/connexion.ctrl.php" type="button" class="btn btn-primary">Se connecter</a>
            <a href="../controler/inscription.ctrl.php" type="button" class="btn btn-warning">Je m'inscris maintenant !</a>
        </form>
      </nav>
      <div id="carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="slide-full item active">
              <!--<img src="../data/img/fotolia_musique.jpg" style="position: relative; bottom: 500px;"/>-->
              <div class="carousel-caption">
                <h1>Bienvenue sur <b>Dælium</b></h1>
                <p>Bienvenue sur le site de gestion musicale !</p>
              </div>
            </div>
            <div class="slide-full item">
              <!--<img src="../data/img/fotolia_musique.jpg" style="position: relative; bottom: 500px;"/>-->
              <div class="carousel-caption">
                <h1>Bienvenue sur <b>Dælium</b></h1>
                <p>Vous êtes à la recherche d'un outil performant pour gérer vos artistes ? Ou vous souhaitez organiser un événement particulier ? Alors rejoignez notre site ! C'est rapide, et gratuit !</p>
                <p><a id="sliderButton" class="btn btn-lg btn-primary" href="#navbar" role="button">Je veux en savoir plus !</a></p>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="btn-down container-fluid">
        <a href="#navbar">Lire ...</a>
      </div>
    </div>

    <div id="contentAnchor">.</div>

    <div class="container marketing">
      <div class="row">
        <blockquote>
        Dælium est un outil intuitif et performant pour vous aider à gérer vos artistes, il vous permettra de prendre du recul sur leurs statuts et les aidera à accéder au monde du spectacle ! Il intègre des fonctionnalités d'agenda, une messagerie interne et permet une meilleure communication entre booker et organisateur.
        </blockquote>
      </div>
      <div class="row">
        <div class="col-lg-4 text-center">
          <!-- <a href="#"> -->
            <div class="img-circle"><span class="icon-img icon-gift"></span></div>
          <!-- </a> -->
          <h2>Gratuit</h2>
          <p>L'inscription à Dælium est entièrement gratuite, de même que son utilisation. Aucun paiement ne vous sera demandé en contrepartie de l'utilisation que vous ferez du site.</p>
          <!-- <p><a class="btn btn-default" href="#" role="button">Voir les détails &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
          <!-- <a href="#"> -->
            <div class="img-circle"><span class="icon-img icon-tools2"></span></div>
          <!-- </a> -->
          <h2>Innovant</h2>
          <p>Dælium est un outil innovant et utilise les technologies les plus adéquates pour permettre une meilleure gestion de vos besoins.</p>
          <!-- <p><a class="btn btn-default" href="#" role="button">Voir les détails &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
          <!-- <a href="#"> -->
            <div class="img-circle"><span class="icon-img icon-adjustments"></span></div>
          <!-- </a> -->
          <h2>Adaptable</h2>
          <p>Dælium s'adaptera à tout vos besoins. L'outil ci-présent à été pensé pour être paramétrable sur la plupart des fonctionnalités proposées. De plus il s'adaptera à tout type de plateforme (tablette, smartphone...) et sur la majorité des navigateurs web.</p>
          <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <div id="troops" class="row">
        <div id="troop_1" class="col-lg-4 text-center" style="display: none;">
          <h2 class="text-left">En marche</h2>
          <p>Le célèbre groupe "En marche" fait parti de notre site, alors vous aussi, rejoignez Dælium !</p>
        </div><!-- /.col-lg-4 -->
        <div id="troop_2" class="col-lg-4 text-center" style="display: none;">
          <h2 class="text-left">Batoucada</h2>
          <p>La "Batoucada" soutient notre site. Elle fait partie de la grande communauté qui s'agrandit de jour en jour. Venez apporter votre contribution à celle-ci en y adhérant !</p>
        </div><!-- /.col-lg-4 -->
        <div id="troop_3" class="col-lg-4 text-center" style="display: none;">
          <h2 class="text-left">Berlondon</h2>
          <p>Le groupe "Berlino-Londonnien" est inscrit sur Dælium depuis sa création. Faites comme eux, incrivez-vous, ajoutez vos artistes ou vos évènements et envoyez les sur le devant de la scène !</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <div id="counters" class="row">
        <div id="counter_1" class="col-lg-4 text-center" style="display: none;">
          <div class="media">
            <div class="media-left media-middle">
              <div class="media-object img-circle large"><span class="counter" data-from="0" data-to="124" data-speed="1500">0</span><br/><span class="icon-img small icon-briefcase"></span></div>
            </div>
            <div class="media-body">
              <h2 class="media-heading">Organisateurs</h2>
            </div>
          </div>
        </div><!-- /.col-lg-4 -->
        <div id="counter_2" class="col-lg-4 text-center" style="display: none;">
          <div class="media">
            <div class="media-left media-middle">
              <div class="media-object img-circle large"><span class="counter" data-from="0" data-to="256" data-speed="1500">0</span><br/><span class="icon-img small icon-megaphone"></span></div>
            </div>
            <div class="media-body">
              <h2 class="media-heading">Bookers</h2>
            </div>
          </div>
        </div><!-- /.col-lg-4 -->
        <div id="counter_3" class="col-lg-4 text-center" style="display: none;">
          <div class="media">
            <div class="media-left media-middle">
              <div class="media-object img-circle large"><span class="counter" data-from="0" data-to="380" data-speed="1500">0</span><br/><span class="icon-img small icon-happy"></span></div>
            </div>
            <div class="media-body">
              <h2 class="media-heading">Utilisateurs</h2>
            </div>
          </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-lg-8">
          <h2>Rejoindre Dælium</h2>
          <p>Vous voulez nous rejoindre ?</p>
          <p>Vous souhaitez ajouter vos artistes pour qu'ils rejoignent notre grande communauté ?</p>
          <p>Vous voulez organiser un festival et vous ne trouvez pas d'artiste ?  </p>
          <p>Alors cliquez sur le bouton "Inscription" à coté ! C'est rapide et gratuit !</p>
          <p class="text-right"><a class="btn btn-warning btn-lg" href="../controler/inscription.ctrl.php" role="button">Inscription &raquo;</a><br/><a style="font-size: 10px;" href="../controler/connexion.ctrl.php" role="button">Connexion &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2>Contact</h2>
          <p>Des questions sur le fonctionnement du site ? Vous rencontrez des problèmes durant votre utilisation ?</p>
         <p>Des suggestions à faire pour nous améliorer ? Des critiques ? Envoyez-nous un mail à cette adresse : </p>
          <p>contact@daelium.fr</p>
          <!-- <p><a class="btn btn-default" href="#" role="button">Nous contacter &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>

    <?php include("../view/include/footer.view.php"); ?>
    <script src="../data/js/jQuery.min.js"></script>
    <script src="../data/js/bootstrap.min.js"></script>
    <script src="../data/js/jquery.scrollTo.min.js"></script>
    <script src="../data/js/nolog.js"></script>
  </body>
</html>
