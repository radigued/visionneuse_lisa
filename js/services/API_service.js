//Service d'appel à l'api permettant de gerer la visionneuse

angular.module('visionneuseLisa').service('AppelWsSvc', function ($http) {
    //On initialise le préfix de l'addresse d'accès à l'api
    this.prefixUrl = "http://localhost:50993/api/";

    //config général

//    this.config = {
//
//        headers: {
//            'Content-Type': 'application/json;charset=utf-8;'
//        }
//
//    };
//
//    this.testConnection = function (login, password) {
//        var url = this.prefixUrl + "users?login=" + login + "&password=" + password;
//
//        return $http.get(url, this.config);
//    };

    this.getAllProducts = function() {
        return $http.get(this.prefixUrl + "products/");
    }

});
