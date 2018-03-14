<?php
function checkToken ($token) {

    $sql = "update t_users set usemailvalid = 1 where token = '$token'";
    $req = new Queries();
    if($req->insert($sql)) {
        echo "Vous êtes correctement enregistré";
    }

}