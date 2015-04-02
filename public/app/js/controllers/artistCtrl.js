app.controller('artistController', function($scope, $http, Artist){
		$scope.artists = []
		$http.get('/artists').success(function(data,status,headers,config){
			$scope.artists = data;
		})
	})