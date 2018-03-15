<?php
$article = addslashes(htmlentities($_REQUEST['articlearea']));
$titre = addslashes($_REQUEST['titreart']);
     if(isset($article)){
         $req = new Queries();
         $sql = "insert into t_articles (arttitre,artcontenu) values ('$titre','$article')";
         $req->insert($sql);
         header('location:http://localhost/AP17/index.php?page=home');
     }


