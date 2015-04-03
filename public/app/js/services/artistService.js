'use strict';

// angular.module('artistServ', [])
app.factory("artistService", function($http) {
	console.log('ran service');
	var service = {};
	service.allArtists = [];
	service.currArtist = {};

	service.getAllArtists = function() {
		console.log('ran getall');
		return $http.get('laravel/myproject/public/index.php/artists').success(function(artists){
			console.log("found artists: " + artists);
			service.allArtists = artists;
			return artists;
			});
		};
	return service;
});