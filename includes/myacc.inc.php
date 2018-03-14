<?php  $prenom = $_SESSION['prenom'] ;
       $nom = $_SESSION['nom'];
       $mail = $_SESSION['mail'];
       $mail  = $_SESSION['grp'] ;
?>
<h1>Mon compte</h1>
<div class="card" style="width: 20rem;">
    <img class="card-img-top" src="https://image.flaticon.com/icons/svg/17/17004.svg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><span>Prenom :</span><?php echo $prenom ?></h5>
        <h5 class="card-title"><span>Nom :</span><?php echo $nom ?></h5>
        <h5 class="card-title"><span>Email :</span><?php echo $mail ?></h5>
    </div>
</div>