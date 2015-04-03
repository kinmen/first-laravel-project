<form ng-submit = "addArtist()">
	<div class = "form-group">
		<input type = "text" class = "form-control input-sm" name = "name" ng-model = "newArtist.name" placeholder = "Artist Name" required />
	</div>

	<div>
		<button type = "submit" class = "btn btn-primary btn-lg">Add</button>
	</div>
</form>
