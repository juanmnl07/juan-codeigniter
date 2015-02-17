//creamos el modulo app
var app = angular.module("app", []);

//damos configuración de ruteo a nuestro sistema de login
app.config(function($routeProvider){
    $routeProvider.when("/login", {
        controller : "loginController",
        templateUrl : "templates/login.html"
    })
    .when("/home", {
        controller : "homeController",
        templateUrl : "templates/home.html"
    })
});