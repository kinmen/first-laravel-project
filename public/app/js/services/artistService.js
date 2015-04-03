'use strict';

// angular.module('artistServ', [])
app.factory("artistService", function($http) {
	console.log('ran service');
	var service = {};
	service.allArtists = [];
	service.currArtist = {};

	service.getAllArtists = function() {
		console.log('ran getall');
		return $http.get('/artists').success(function(artists){
			console.log("found artists: " + artists);
			service.allArtists = artists;
			return artists;
			});
		};

	service.addArtist = function(artist) {
		return $http.post('/artists', artist)
		.success(function(data) {
			service.allArtists.push(data);
		})
	}

	service.getArtist = function(artistid) {
		return $http.get('/artists/' + artistid)
		.success(function(data) {
			service.currArtist = data;
		})
	}

	service.editArtistTo = function(newname) {
		console.log(newname);
		return $http.put('/artists/' + service.currArtist.id, {"name": newname})
		.success(function(data) {
			service.currArtist = data;
		})
	}

	service.deleteArtist = function(artistid) {
		return $http.delete('/artists/' + artistid)
		.success(function(data){
			service.getAllArtists();
		})
	};

	return service;
});