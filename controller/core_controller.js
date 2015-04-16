/**
 * Created by THARANGA-PC on 4/16/2015.
 */
// create the module and name it ajf
// also include ngRoute for all our routing needs
var ajf = angular.module('ajf', ['ngRoute']);

// configure our routes
ajf.config(function($routeProvider) {

    $routeProvider
        // route for the index page
        .when('/', {
            templateUrl : 'view/base.html',
            controller  : 'mainCtrl'
        })

        // route for the FAQ page
        .when('/faq', {
            templateUrl : 'view/faq.html',
            controller  : 'faqCtrl'
        })

        // route for the contact page
        .when('/contact', {
            templateUrl : 'view/contact.html',
            controller  : 'contactCtrl'
        })

        // route for the contact page
        .when('/member', {
            templateUrl : 'view/member.html',
            controller  : 'memberCtrl'
        });
});

// create the controller and inject Angular's $scope
ajf.controller('mainCtrl', function($scope) {
    // create a message to display in our view
    $scope.heading = 'Welcome to AJF';
    $scope.message = 'Here you will find the meaning of life.';
});

ajf.controller('faqCtrl', function($scope) {
    $scope.heading = 'AJF FAQ';
    $scope.message = 'This is where you will find the accumulated knowledge of the world.';
});

ajf.controller('contactCtrl', function($scope) {
    $scope.heading = 'Contact AJF.com';
    $scope.message = 'Contact Nalin Tharanga Jayasinghe:';
});

ajf.controller('memberCtrl', function($scope,$http) {
    $scope.heading = 'AJF Team';
    $scope.message = 'AJF Team Information.';
    //$http.get("http://www.w3schools.com/angular/customers.php")
    $http.get("http://localhost/ajf/api.php/get_list")

        .success(function (response) {
           // console.log(response[0]);
            $scope.userList = response;
        });
});

