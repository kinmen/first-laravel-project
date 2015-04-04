<!-- <h1></h1>
<h3>Change Artist Name To...</h3>
<form ng-submit = 'editArtist(newname)'>
	<input type = "text" name = 'newname' ng-model = 'newname' required />
	<button type = "submit">Save</button>
</form> -->
<table class = "flatTable">
	<tr class = "titleTr">
		<td class = "home button" ng-click="home()">Home</td>
		<td class = "titleTd" colspan = "2">{{artistService.currArtist.name}}</td>
	</tr>
	<tr>
		<td colspan = "2">
			Change {{artistService.currArtist.name}}'s Name To...
			<form id = "edit_form" ng-submit = 'editArtist(newname)'></form>
			<input type = "text" class = "form-control input-sm" name = "newname" ng-model = "newname" placeholder = "New Artist Name" form = "edit_form" required />
		</td>
		<td>
			<button type = "submit" class = "add" form = "edit_form">Save</button>
		</td>
	</tr>
</table>
