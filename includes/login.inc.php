
<h1>Login</h1>

<?php


if (isset($_REQUEST['frmLogin'])) {
    $email = $_REQUEST['email'];
    $psw = sha1($_REQUEST['password']);
    $check = new Queries();
    $sql = "select usenom,useprenom,usemail,id_groupes from t_users where usemail = '$email' and usepassword='$psw'";

    if($result = $check->check($sql)) {
         $_SESSION['nom'] = $result[0]->usenom;
         $_SESSION['prenom'] = $result[0]->useprenom;
         $_SESSION['mail'] = $result[0]->usemail;
         $_SESSION['grp'] = $result[0]->id_groupes;
         header("location:http://localhost/AP17/index.php?page=home");
    }

} else {
    include("frmLogin.php");
}


?>