	// Create the routeApp Module
	var routeApp = angular.module('routeApp', ['ngRoute']);

	// configure our routes
	routeApp.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'includes/home.html',
				controller  : 'mainController'
			})

			// route for the about page
			.when('/about', {
				templateUrl : 'includes/events.html',
				controller  : 'aboutController'
			})

			// route for the contact page
			.when('/contact', {
				templateUrl : 'pages/contact.html',
				controller  : 'contactController'
			});
	});

	// create the controller and inject Angular's $scope
	routeApp.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.message = 'Injecting Home page';
	});

	routeApp.controller('aboutController', function($scope) {
		$scope.message = 'Injecting About page';
	});

	routeApp.controller('contactController', function($scope) {
		$scope.message = 'Injecting Contact page';
	});