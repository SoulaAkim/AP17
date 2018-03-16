<div class="container">
    <div class="row">
        <div class="col-4">



<div class="form-group">
<form action="#" method="post">
    <div>
        <label for="name">Nom : </label>
        <input  class="form-control" type="text" id="name" name="name" value ="<?php if(isset($name)) echo $name ; ?>" />
    </div>
    <div>
        <label for="firstName">Prénom : </label>
        <input class="form-control" type="text" id="firstName" name="firstName" value ="<?php if(isset($firstName)) echo $firstName ; ?>"/>
    </div>
    <div>
        <label for="mail">e-mail : </label>
        <input  class="form-control" type="email" id="mail" name="mail" value ="<?php if(isset($mail)) echo $mail ; ?>" />
    </div>
    <div>
        <label for="password">Mot de passe : </label>
        <input class="form-control" type="password" id="password" name="password" />
    </div>
    <div>
        <input class="btn btn-secondary" type="reset" value="Effacer" />
        <input class="btn btn-primary" type="submit" value="Envoyer" name="frmRegistration" />
    </div>
</form>
</div>
</div>
</div>

</div>
