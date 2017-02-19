'use strict';

var DemoApp = angular.module('DemoApp', ['ngRoute', 'controller'])

demoApp.config(function ($routeProvider) {
    $routeProvider
	.when('/',
    {
        templateUrl: 'templates/about.html'
    })
	.when('/home',
    {
        templateUrl: 'templates/home.html',
        controller: 'PatientCtrl'
    })
	.otherwise({ redirectTo: '/' });
});