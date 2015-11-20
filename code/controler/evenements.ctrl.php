<?php
  session_start();
  require_once("../model/utils.class.php");

  $data['alert'][] = newAlert("Site en cours de construction ... Risques d'erreurs ><'","danger","exclamation-sign");

  $data['page']="Evenements";

  if (isset($_SESSION['userType']))
    $data['type'] = $_SESSION['userType'];
  else
    $data['type'] = "Booker";

  include("../view/evenements.view.php");
?>
