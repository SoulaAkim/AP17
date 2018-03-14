<?php
/**
 * Created by PhpStorm.
 * User: soula
 * Date: 14/03/2018
 * Time: 09:14
 */

class CallPage
{

   public function displayPage(){
        $page = $_GET['page'] ?? "";
        $page = "./includes/". $page . ".inc.php";
        $files = glob("./includes/*.inc.php");
        if (in_array($page, $files)) {
            include $page;
        } else {
            include "./includes/home.php";
        }
    }

}