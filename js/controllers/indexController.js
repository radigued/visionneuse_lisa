angular.module('visionneuseLisa').controller('indexCtrl', ['$scope', 'AppelWsSvc', function ($scope, AppelWsSvc) {

    $scope.getProduct = function () {
        AppelWsSvc.getAllProducts().then(function (value) {
            console.log(value);
        })
    }

    //this.getProducts = function (productsElt) {
    //    var productsElt = document.getElementById("products");
    //    ajaxGet(this.prefixUrl + "products", function (reponse) {
    //        // Transforme la réponse en un tableau d'articles
    //        var products = JSON.parse(reponse);
    //        products.forEach(function (product) {
    //            // Ajout du titre et du contenu de chaque article
    //            var titreElt = document.createElement("h3");
    //            titreElt.textContent = product.label;
    //            var contenuElt = document.createElement("p");
    //            contenuElt.textContent = product.description;
    //            productsElt.appendChild(titreElt);
    //            productsElt.appendChild(contenuElt);
    //        });
    //    });
    //    var tab[];
    //    angular.forEach(tab, url {
    //        return "<option>"item.Label"</option>";
    //    });
    //    return tab;
    //}




    //this.getProductsList = function ();
    //       this.getProductsLabel = function (item) {
    //       var url = this.prefixUrl + "products";
    //       return item.Label;
    //   }
}]);
