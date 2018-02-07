<!DOCTYPE html>
<html>
    
    <!-- Header and links -->
    <?php include("../views/Header.php") ?>
    <script type="text/javascript" src="../API_connection.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>
    <body ng-app="LISA" ng-controller="LISA_COntroller" ng-module="LISA">
        <!-- Barre de menu + recherche -->
        <?php include("./Menu.php") ?>
    
        <div class="col-md-3">
            <select class="col-xs-12">
                <option>-- Choisissez un article --</option>
                <script src="../API_connection.js"> 

                </script>
            </select>
        </div>
        <div class="container">
            <div class="starter-template">
                <h1>LISA</h1>
                <p class="lead">Les Imprimés Sans Adresse</p>
            </div>
        </div>
        <!-- /.container -->
        
        <div class="bootstrap_core">
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        </div>
    </body>
</html>
