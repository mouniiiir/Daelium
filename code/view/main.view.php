<?php
   if (!isset($data))
      header("Location:"."../");
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("../view/include/includes.view.php"); ?>
    <link rel="stylesheet" href="../data/css/main.css">
    <title>Dælium</title>
  </head>
  <body onload="onLoad()">
    <?php include("../view/include/header.view.php"); ?>
    <section id="welcome" class="container-fluid" style="padding:0px;">
      <div id="carousel-welcome" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-welcome" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-welcome" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="slide-full item active">
            <!-- trouver image -->
            <img src="https://cdn2.artstation.com/p/assets/images/images/001/023/866/large/samma-van-klaarbergen-patrick-watson2.jpg?1438415706" alt="Erreur chargement image" style="position: relative; bottom: 80%;" />
            <div class="carousel-caption">
              <h1>Bienvenue !</h1>
              <p>Bienvenue sur Dælium, le site est actuellement en construction ...</p>
            </div>
          </div>
          <div class="slide-full item">
            <img src="https://s1.qwant.com/thumbr/?u=http%3A%2F%2Fwww.listofimages.com%2Fwp-content%2Fuploads%2F2012%2F05%2Fscene-light-hands-concertmusic.jpg" alt="Erreur chargement image" style="position: relative; bottom: 70%;"/>
            <div class="carousel-caption">
              <h1>Slide 2</h1>
              <p>Bienvenue sur Dælium, le site est actuellement en construction ...</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="sliderPlace"></div>
    <section class="container-fluid full page-content">
      <article class="col-lg-8 col-lg-offset-1">
        <!-- Alertes et information pour l'utilisateur -->
        <div class="well media">
          <div class="media-left">
          <img src="http://www.ac-grenoble.fr/ien.vienne1-2/spip/IMG/bmp_Image004.bmp" alt="Mountain View" style="height:100px;">
        </div>
        <div class="media-body">
          <p>Patrick Lopez à rendu libre les inscription pour son évènement "Mariage de Sandra et Kévin". Vous pouvez maintenant rentrer en contact avec lui afin d'y inscrire un Groupe .</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </div>
        <div class="well">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed  do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="well media">
          <div class="media-left">
          <img src="http://www.ac-grenoble.fr/ien.vienne1-2/spip/IMG/bmp_Image004.bmp" alt="Mountain View" style="height:100px;">
        </div>
        <div class="media-body">
          <p>Patrick Lopez à rendu libre les inscription pour son évènement "Mariage de Sandra et Kévin". Vous pouvez maintenant rentrer en contact avec lui afin d'y inscrire un Groupe .</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
          </div>
        <div class="well">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </article>
      <aside class="col-lg-2">
        <!-- Sugestion pour l'utilisateur (evt & art pour booker) (art pour orga )-->
        <div class="well">
          <img src="http://www.ac-grenoble.fr/ien.vienne1-2/spip/IMG/bmp_Image004.bmp" alt="Mountain View" style="height:100px;">
          <p>L'evenement Concert pour la lutte contre le SIDA pourrait vous interesser.</p>
        </div>
          <div class="well">

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </aside>
    </section>
    <?php include("../view/include/footer.view.php"); ?>
  </body>
</html>
