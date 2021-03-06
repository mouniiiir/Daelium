<?php
  require_once("../model/DAO.class.php");
  /***************
   *    Utils    *
   ***************/

   function initPage($page,$alerts=null) {
     if (isset($_GET['ajax'])) {
       return Array();
     }

     $data['page']=$page;
     $data['notifs-menu'] = getNotifs();
     $data['alerts']=array();
     if ($alerts!=null)
       $data['alerts'] = array_merge($data['alerts'],$alerts);

     $data['user-type'] = $_SESSION['user']['type'];


     return $data;
   }

   function getNotifs() {
      $dao = new DAO();

      $listenotif = array();
      $listenotif = $dao->readListeNotificationUseridNoRead( $_SESSION["user"]["ID"]);

      $notifs["list"] = array();
      foreach ($listenotif as $key => $value) {
        $notifs["list"][$key]['id'] = $value->getIdNotification();
        switch ($value->getType()) {
         case 0: // Message
           $notifs["list"][$key]['icon'] = "envelope";
           break;
         case 1: // Demande de groupe ?!
           $notifs["list"][$key]['icon'] = "child";
           break;
         case 2: // Participation a un event
           $notifs["list"][$key]['icon'] = "question";
           break;
        }
        $notifs["list"][$key]['titre'] = $value->getTypeEcrit();
      }
      $notifs["count"] = count($notifs['list']);
      return $notifs;
   }

   function randomId($n = 20) {
     // $n : longueur de la chaine d'ID.
     $chars = str_split("abcdefghijqlmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"); // les differents charactères possibles
     shuffle($chars);
     for ($i=0; $i<$n; $i++) {
       $res[] = $chars[rand(0,count($chars)-1)];
     }
     return implode('',$res);
   }

   function calendar($timestamp=null) {
     $timestamp = ($timestamp!=null?$timestamp:mktime(0,0,0,date("n"),1,date("Y")));
     $date = getdate($timestamp);
     $length=getMonthLength($date['mon'],$date['year']);
     $wday = fr_wday($date['wday']); // conversion des jours de la semaine en FR
     $i=0;
     for ($l=0; $i<($length+$wday); $l++) {
       $res[$l]['id'] = date("W",$timestamp)+$l;
       for ($c=0; $c<7; $c++) {
         $n = $i-$wday+1; // jour actuel
         $res[$l]['days'][$c] = (($n<1) || ($n>$length)?0:$n);
         $i++;
       }
     }

     return $res;
   }

   function fr_wday($wday) {
     // wday par défaut : de 0(Dimanche) à 6(Samedi)
     $wday = $wday-1; // on décale : de -1(Dimanche) à 5(Samedi)
     $wday = ($wday<0?6:$wday); // si c'est un dimanche (-1) alors 6 sinon on change pas
     return $wday;
   }

   function getMonthLength($month,$year) {
     if ($month==2) {
       $bi = (($year%4 == 0 && $year%100 != 0) || ($year%400 == 0));
       $length = ( $bi ? 29 : 28 ); // annee bisextile si :    divisible par 4 et non par 100   /OU/   divisible par 400
     } else if($month%2 == 0) {
       $length = 31;
     } else {
       $length = 30;
     }
     return $length;
   }

   function newAlert($message,$type="info",$icon="") {
     $data['type'] = $type;
     $data['icon'] = $icon;
     $data['message'] = $message;
     return $data;
   }

  function human_filesize($bytes, $decimals = 2) {
    $sz = 'BKMGTP';
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor] . (@$sz[$factor]!='B'?"o":"");
  }

  function recursive_remove($path, $inDB = false) {
    if ($inDB) {$dao = new DAO();}
    if (is_file($path)) { // Si c'est un fichier on le supprime
      if ($inDB) {
        try {$dao->deleteAccesDocumentByDoc($path);} catch (Exception $e) {}
      }
      return unlink($path);
    } else if (is_dir($path)) { // Si c'est un dossier on supprime tout son contenu puis on le supprime
      foreach (scandir($path) as $item) {
        if ($item!="." && $item!="..") {
          recursive_remove($path.'/'.$item,$inDB);
        }
      }
      return rmdir($path);
    } else { // Ni un fichier, ni un dossier, erreur !
      return false;
    }
  }
?>
