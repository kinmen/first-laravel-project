var app = angular.module('artistsApp', []);
app.config(['$routeProvider', function($routeProvider) {
	$routeProvider.
		when('/artists', {
			templateUrl: 'js/view/index.html',
			controllers: 'artistController'
		})
}])