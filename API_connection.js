< script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" > < /script> 
< script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js" > < /script>

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
    
    
    
    this.getProducts = function () {
        var url = this.prefixUrl + "products";
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
