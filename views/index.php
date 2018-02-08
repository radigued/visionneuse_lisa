<!DOCTYPE html>
<html>
<!-- Header and links -->

<?php include('./Header.php') ?>

<body ng-app="visionneuseLisa" ng-controller="indexCtrl">
    <!-- Barre de menu + recherche -->
    <?php include("./Menu.php") ?>

    <div class="col-md-3">
        <select class="col-xs-12" ng-model="selectedProduct" ng-options = "selectProduct = product.label for product in products">
            <option>{{selectedProduct.label}}</option>
        </select>
    </div>
    <div class="container">
        <div class="starter-template">
            <h1>LISA</h1>
            <p class="lead">Les Imprimés Sans Adresse</p>
            <div class="card" ng-repeat="product in value">
                <div class="item item-divider">
                  {{product.label}}
                </div>
                <div class="item item-text-wrap">
                  {{product.description}}
                </div>
            </div>
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
