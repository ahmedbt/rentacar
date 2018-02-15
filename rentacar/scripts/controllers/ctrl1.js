(function () {
	angular.module('myApp').controller('myController', function($scope, $http) {
  	$http.get("/rentacar/scripts/json/nn.php")
  		.success(function(response) {
     		 $scope.cars = response;
 		 });


  	$http.get("/rentacar/scripts/json/raspored.php")
  		.success(function(response) {
     		 $scope.reservations = response;
 		 });	

  		 $scope.myMap=function(x,y,z,w) {
  var myCenter = new google.maps.LatLng(x,y);		
  var mapCanvas = document.getElementById("map");
  var mapOptions = { 
    center: myCenter, 
    zoom: 17
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
  
  var infowindow = new google.maps.InfoWindow({
          content: "Car: " + z + "<br>><img  src=\"" + w + "\" ></div>"
          
        });

  marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

};

  		});
		}) ();