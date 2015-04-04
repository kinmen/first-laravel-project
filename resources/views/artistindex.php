<!DOCTYPE html>
<html>
	<head>
		<!--Angular -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.js"></script>
		<script src="app/js/app.js"></script>
		<script src="app/js/controllers/artistCtrl.js"></script>
		<script src="app/js/services/artistService.js"></script>
		<base href="/">
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
		<link href="css/artist.css" rel = 'stylesheet'>


	</head>

	<body ng-app = "artistsApp" ng-controller = "artistController">

		<div id = 'main'>
			<div ng-view></div>
		</div>
	</body>
</html>
