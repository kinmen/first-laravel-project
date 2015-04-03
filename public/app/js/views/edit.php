<h1>{{artistService.currArtist.name}}</h1>
<h3>Change Artist Name To...</h3>
<form ng-submit = 'editArtist(newname)'>
	<input type = "text" name = 'newname' ng-model = 'newname' required />
	<button type = "submit">Save</button>
</form>
