//Service d'appel à l'api permettant de gerer la visionneuse

angular.module('LISA').service('AppelWsSvc', function ($http) {
    //On initialise le préfix de l'addresse d'accès à l'api
    this.prefixUrl = "http://localhost:50993/api/";

    //config général

    this.config = {

        headers: {
            'Content-Type': 'application/json;charset=utf-8;'
        }

    };

    this.testConnection = function (login, password) {
        var url = this.prefixUrl + "users?login=" + login + "&password=" + password;

        return $http.get(url, this.config);
    };



    this.getProducts = function (productsElt) {
        var productsElt = document.getElementById("products");
        ajaxGet(this.prefixUrl + "products", function (reponse) {
            // Transforme la réponse en un tableau d'articles
            var products = JSON.parse(reponse);
            products.forEach(function (product) {
                // Ajout du titre et du contenu de chaque article
                var titreElt = document.createElement("h3");
                titreElt.textContent = product.label;
                var contenuElt = document.createElement("p");
                contenuElt.textContent = product.description;
                productsElt.appendChild(titreElt);
                productsElt.appendChild(contenuElt);
            });
        });
        var tab[];
        angular.forEach(tab, url {
            return "<option>"item.Label"</option>";
        });
        return tab;
    }




    this.getProductsList = function ();

    this.getProductsLabel = function (item) {
        var url = this.prefixUrl + "products";
        return item.Label;
    }

});
