<h1>Inscription</h1>
<?php
if (isset($_POST['frmRegistration'])) {
    $name = $_POST['name'] ?? "";
    $firstName = $_POST['firstName'] ?? "";
    $mail = $_POST['mail'] ?? "";
    $password = $_POST['password'] ?? "";
    $erreurs = array();
    if ($name == "") array_push($erreurs, "Veuillez saisir un nom");
    if ($firstName == "") array_push($erreurs, "Veuillez saisir un prénom");
    if ($mail == "") array_push($erreurs, "Veuillez saisir un mail");
    if ($password == "") array_push($erreurs, "Veuillez saisir un mot de passe");
    if (count($erreurs) > 0) {
        $message = "<ul>";
        for ($i = 0 ; $i < count($erreurs) ; $i++) {
            $message .= "<li>";
            $message .= $erreurs[$i];
            $message .= "</li>";
        }
        $message .= "</ul>";
        echo $message;
        include "frmRegistration.php";
    }
    else {
        $rec = new Queries();
        $password = sha1($password);
        $token = uniqid(sha1(date('Y-m-d|H:m:s')), false);
        $sql = "INSERT INTO t_users
                (usenom, useprenom, usemail, usepassword, id_groupes, token)
                VALUES ('$name', '$firstName', '$mail', '$password', 3, '$token')";

        $rec -> insert($sql);
        echo "<p>Ich bin dans la base</p>";

        $message = "WunderBar !!";
        $message .= "Vous êtes inscrit";
        $message .= "<a href='http://localhost/AP17/index.php?page=home&token=$token'>Comfirmation</a>";

       if(mail($mail, 'Comfirmation compte', $message)) {
           echo "Bienvenue !";
       }


    }
}
else {
    include "frmRegistration.php";
}