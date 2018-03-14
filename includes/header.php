<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=registration">Enregistrement</a>
            </li>

            <li class="nav-item">
                <?php
                if(isset($_SESSION['nom']) && !empty($_SESSION['prenom'])) {
                    echo '<a class="nav-link" href="index.php?page=myacc">mon compte</a>';
                }
                ?>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <?php
            if(isset($_SESSION['nom']) && !empty($_SESSION['prenom'])) {
                echo "<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\"><a href=\"index.php?page=disconnect\">Ce deconnecter</a></button>";
            } else {
                echo "<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\"><a href=\"index.php?page=login\">Ce connecter</a></button>";
            }

                ?>

        </form>
    </div>
</nav>