var app = angular.module('myApp',['ngRoute']).constant('API', 'http://localhost:8080/QLNhaHang/public/admin');
	
	app.config(function($interpolateProvider) {
	    $interpolateProvider.startSymbol('%%');
	    $interpolateProvider.endSymbol('%%');
	  });
	