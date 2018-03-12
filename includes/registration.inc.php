<h1>inscription</h1>
<?php

if(isset($_POST['frmRegistration'])) {
    $name = $_POST['name'] ?? "";
    $firstName = $_POST['firstName'] ?? "";
    $mail = $_POST['mail'] ?? "";
    $password = $_POST['password'] ?? "";


    $erreurs = array();

    if($name == "") array_push($erreurs, "Vuillez saisir un nom");
    if($firstName == "") array_push($erreurs, "Vuillez saisir un prenom");
    if($mail == "") array_push($erreurs, "Vuillez saisir un mail");
    if($password == "") array_push($erreurs, "Vuillez saisir un mot de passe");

  if(count($erreurs) > 0 ) {
      $message = "<ul>";
      for ($i =0; $i < count($erreurs); $i++) {
          $message .= "<li>";
          $message .= $erreurs[$i];
          $message .= "</li>";
      }
      $message .= "</ul>";
      echo $message;
      include "frmregistration.php";
  }


} else {

    include "frmregistration.php";
}

