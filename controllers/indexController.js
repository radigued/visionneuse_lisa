angular.module('visionneuse_lisa').controller('indexCtrl', ["$scope", "AppelWsSvc", function($scope, AppelWsSvc){


    $scope.productId = 1;

    $scope.getProduct = function(){
        AppelWsSvc.getProducts($scope.productId).then(function(value){
            product = value.data;
        })
    }
}]);
