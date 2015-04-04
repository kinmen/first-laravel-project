<div class = "container-fluid">
	<table class = "flatTable">
		<tr class = "titleTr">
			<td class = "titleTd" colspan = "2">Artists</td>
			<td class = "plusTd button" ng-click = "goToCreateView()"> 
			</td>
		</tr>
		<tr ng-repeat = "artist in artistService.allArtists">
			<td>{{artist.name}}</td>
			<td class = "edit button" ng-click = "viewArtist(artist)"></td>
			<td class = "del button" ng-click = "deleteArtist(artist)"></td>
		</tr>
	</table>
</div>	