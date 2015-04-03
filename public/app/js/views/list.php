<div class = "container-fluid">
	<h1>Artists</h1>
	<button ng-click = "goToCreateView()">Add an Artist</button>
	<ul>
		<li ng-repeat = "artist in artistService.allArtists">
			<button ng-click = "viewArtist(artist)">Change Name</button>
			{{artist.name}}
			<button ng-click = "deleteArtist(artist)" class = "delete-btn">Delete</button>
		</li>
	</ul>
</div>