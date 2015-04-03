'use strict';

console.log('ran');

var app = angular.module('artistsApp', ['ngRoute']);
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
	$routeProvider.
		when('/', {
			templateUrl: 'app/js/views/list.php',
			controller: 'artistController'
		}).
		otherwise({
			redirectTo: '/'
		});
	$locationProvider.html5Mode(true);

}]);