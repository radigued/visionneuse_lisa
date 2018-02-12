<!DOCTYPE html>
<html>
<!-- Header and links -->
<?php   
    include("../views/Header.php");
    //include("./SQLConnection.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>

<body>
    <!-- Barre de menu + recherche -->
    <?php 
        include("./Menu.php");
    ?>

    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php 
            //    $_valid_Connexion = false;
            //while($_valid_Connexion != true)
            //{
            //?>
            <form method="post" action="./index.php">
                <h1>Connexion</h1>
                <hr>
                <p class="lead">Identifiant : </p>
                <input class="form-control mr-sm-4" type="text" name="Username" placeholder="Username" aria-label="Id">
                <br>
                <p class="lead">Mot de passe : </p>
                <input class="form-control mr-sm-4" type="password" name="Password" placeholder="Password" aria-label="Password">
                <br>
                <br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connect</button>
            </form>
            <?php
            //}
            //?>

        </div>
        <div class="col-md-4"></div>
    </div>

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>

</html>
