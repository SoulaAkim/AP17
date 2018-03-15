<h1>Listes des Posts</h1>
<form method="post" action="http://localhost/AP17/index.php?page=home">
    <label for="recherche">Recherche:</label>
    <input type="text" name="recherche">
    <input type="submit" value="rechercher" name="frmRecherche">
</form>
<?php
include_once "./functions/iterateitem.php";
if(isset($_REQUEST['frmRecherche'])) {
    $recherche = $_REQUEST['recherche'];
    iterate("artcontenu","arttitre",$recherche);
} else {
    iterate("artcontenu","arttitre",false);
}

if ($_SESSION) {
    if ($_SESSION['grp'] !== "3") {
        echo '<form method="post"  action="http://localhost/AP17/index.php?page=validArticle">';
        echo "<div class=\"container\">
            <div class=\"row justify-content-center\">
             <div class=\"col-5\">
             <label>Titre</label>
             <input type='text' placeholder='votre titre' name='titreart'>
                <textarea name='articlearea'>
                </textarea>
            </div>
        </div>
        <input type='submit' name='frmArticle'>
        </form>
";
    } else {
        echo "<h3>Vous n'avez pas les droits de poster un article</h3>";
    }
} else {
    echo "<h5>Veuillez vous connecter pour lire et poster un aticle</h5>";
}
?>

