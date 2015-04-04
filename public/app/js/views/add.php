<table class = "flatTable">
	<tr class = "titleTr">
		<td class = "home button" ng-click="home()">Home</td>
		<td class = "titleTd" colspan = "2">Add an Artist</td>
	</tr>
	<tr>
		<td class = "form-group" colspan = "2">
			<form id = "add_form" ng-submit = "addArtist()"></form>
			<input type = "text" class = "form-control input-sm" name = "name" ng-model = "newArtist.name" placeholder = "Artist Name" form = "add_form" required />
		</td>

		<td>
			<button type = "submit" class = "add" form = "add_form">Add</button>
		</td>
	</tr>
</table>
