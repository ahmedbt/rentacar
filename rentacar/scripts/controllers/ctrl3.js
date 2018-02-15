(function () {
	angular.module('myApp').controller('reviewController', function($scope, $http) {
  		$http.get("/rentacar/scripts/json/reviews.php")
  		.success(function(response) {
     		 $scope.reviews = response;
 		 });

  		$http.get("/rentacar/scripts/json/reviews2.php")
  		.success(function(response) {
     		 $scope.reviews2 = response;
 		 });

  		$http.get("/rentacar/scripts/json/reviews3.php")
  		.success(function(response) {
     		 $scope.reviews3 = response;
 		 });

  		$http.get("/rentacar/scripts/json/reviews4.php")
  		.success(function(response) {
     		 $scope.reviews4 = response;
 		 });

  		$http.get("/rentacar/scripts/json/reviews5.php")
  		.success(function(response) {
     		 $scope.reviews5 = response;
 		 });

  		$http.get("/rentacar/scripts/json/reviews6.php")
  		.success(function(response) {
     		 $scope.reviews6 = response;
 		 });
  		
  		$http.get("/rentacar/scripts/json/avg.php")
  		.success(function(response) {
     		 $scope.avg = response;
 		 });

  		$http.get("/rentacar/scripts/json/avg2.php")
  		.success(function(response) {
     		 $scope.avg2 = response;
 		 });

  		$http.get("/rentacar/scripts/json/avg3.php")
  		.success(function(response) {
     		 $scope.avg3 = response;
 		 });

  		$http.get("/rentacar/scripts/json/avg4.php")
  		.success(function(response) {
     		 $scope.avg4 = response;
 		 });

  		$http.get("/rentacar/scripts/json/avg5.php")
  		.success(function(response) {
     		 $scope.avg5 = response;
 		 });

  		$http.get("/rentacar/scripts/json/avg6.php")
  		.success(function(response) {
     		 $scope.avg6 = response;
 		 });

  		});
		}) ();