'use strict';
// angular.module('artistCtrl', [])

app.controller('artistController', function($scope, $http, $location, artistService){
		console.log('ran controller');
		$scope.artistService = artistService;
		if ($location.path() == '/') {
			artistService.getAllArtists();
		}

		$scope.home = function() {
			artistService.clearCurr();
			$location.path('/');
		};

		$scope.goToCreateView = function() {
			console.log("change to create");
			$location.path('/add');
		}
		$scope.newArtist = {name:""};

		$scope.addArtist = function() {
			artistService.addArtist($scope.newArtist)
			$scope.newArtist = {name:""};
			$location.path('/');
		}

		$scope.viewArtist = function(artist) {
			artistService.getArtist(artist.id);
			$location.path('/' + artist.id);
		}

		$scope.editArtist = function(newname) {
			artistService.editArtistTo(newname)
			$location.path('/');
		}

		$scope.deleteArtist = function(artist) {
			artistService.deleteArtist(artist.id);
		}
	});