'use strict';
// angular.module('artistCtrl', [])

app.controller('artistController', function($scope, $http, artistService){
		console.log('ran controller');
		$scope.artistService = artistService;
		artistService.getAllArtists();


	});