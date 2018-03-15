<?php
function iterate($item1, $item2, $recherche = false) {
    if($recherche !== false) {
        $recherche = trim($recherche);
        echo"<p>Affichage pour le resultat : </p>".$recherche;
        $sql = "select DISTINCT $item1, $item2 from t_articles where $item1 like '%$recherche%' or $item2 like '%$recherche%'";
    }else {
        echo"<p>Affichage de tout les resultats</p>";
        $sql = "select $item1, $item2 from t_articles";
    }

    $reqs = new Queries();
    $stmt = $reqs->db->prepare($sql);
    $stmt->execute();
    echo '<div class="row">';
    echo '<div class="col">';
    echo "<div class='list-group'>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">';
        echo '<div class="d-flex w-100 justify-content-between">';
        echo '<h5 class="mb-1">' . $row[$item2] . '</h5>';
        echo '</div>';
        echo  html_entity_decode($row[$item1]) ;
        echo '</a>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
}