<h1>Listes des Posts</h1>
<?php

if(isset($_REQUEST['frmArticle'])) {
    $article = $_REQUEST['articlearea'];
   echo htmlentities($article);

}


    if($_SESSION) {
        if ($_SESSION['grp'] !== "3") {
            echo '<form method="post"  action="#" >';
            echo "<div class=\"container\">
            <div class=\"row justify-content-center\">
             <div class=\"col-5\">
                <textarea name='articlearea'>
                </textarea>
            </div>
        </div>
        <label for='frmArticle'>Publier</label>
        <input type='submit' name='frmArticle'>
        </form>
";
        } else {
            echo "<h3>Vous n'avez pas les droits de poster un article</h3>";
        }
    } else
    {
        echo "<h5>Veuillez vous connecter pour lire et poster un aticle</h5>";
    }
?>

