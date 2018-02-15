<html lang="en" ng-app="myApp">


<head>
    <meta charset="UTF-8">
    
    <link href="styles/css/bootstrap.css" rel="stylesheet">   

    <script src="scripts/vendor/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.2.30/angular-route.min.js"></script>
    <script src="scripts/vendor/jquery-2.2.2.js"></script>
    <script src="scripts/vendor/bootstrap.js"></script>
    <script src="scripts/directives/app.js"></script>
    <script src="scripts/controllers/ctrl3.js"></script>
    <script src="scripts/controllers/ctrl1.js"></script>
    
</head>
<style type="text/css">
	table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
	}

	table {
	    border-collapse: collapse;
	    width: 100%;
	}

	th, td {
	    padding: 15px;
	}
	.slika{
		display: block;
		margin: auto;
		width: 80%;
  		
	}
	.slika1{
		display: block;
		margin: auto;
		width: 80%;
		margin-bottom: 70px;
  		
	}
	.slika2{
		display: block;
		margin: auto;
		width: 80%;
		text-align: center;
		font-size: 25px;
  		
	}
	.raspored{
		float: left;
		margin-left: 2%;
		width: 20%;
	}
	#reser{
    width: 50%;
    margin: auto;

	}
	#tabovi:hover{
		background-color: #dbecff;
		color: black;
	}
	#linkovi{
		font-weight: bold;
		font-size: 18px;
		color: white;
	}
	#linkovi:hover{
		color: black;
	}
</style>


<body ng-controller="myController as myCtrl">


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="myNavBar">
                <div>
                    <ul class="nav navbar-nav" style="color: white;">
                    	<li id="tabovi"><a href="index.php" ng-click="tab=11" id="linkovi">Reservation Form</a></li>
                        <li id="tabovi"><a href="index.php" ng-click="tab=22" id="linkovi">Vehicle Fleet</a></li>
                        <li id="tabovi"><a href="index.php" ng-click="tab=33" id="linkovi">About</a></li>
                        <li id="tabovi"><a href="index.php" id="linkovi">Price List</a></li>
                        <li id="tabovi"><a href="index.php" id="linkovi">Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <div class="container">
      
    	<div class="jumbotron" style="background-color: #dbecff; ">
            <h1>Welcome to Rent-a-carBH</h1>
            <p>Official site, with general information, vehicle fleet, reservations, and other services of our company.</p>
        </div>
    </div>

    <div  class="raspored">
    <b style="font-size: 25px;">Reserved:</b>
    <table  style="width: 100%; border: 2px;">
    	<tr>
    		<th style="text-align: center; background-color: #dbecff;">From</th>
    		<th style="text-align: center; background-color: #dbecff;">Until</th>
    	</tr>
    	<tr ng-repeat="reservation in reservations | filter: 'polo' | orderBy">
    		<th>{{reservation.pickup}}</th>
    		<th>{{reservation.returndate}}</th>
    	</tr>
    </table>
    </div>

    <div class="panel panel-default" id="reser">
    <div class="panel-body">

    <div style="margin-bottom: 15px;"><h3 ng-model="carname" style="width: 50%; margin: auto; text-align: center;">{{cars[2].name}}</h3></div>
    	<img src="{{cars[2].image}}" class="slika">
    	
    </div>
    


    <div>
    	<h4 style="padding-left: 10px;">REVIEWS</h4>

    	<div ng-controller="reviewController as reviewCtrl" >
    	
    	<blockquote ng-repeat="review in reviews3" style="background-color: #dbecff;">
    		<b style="padding-right: 30px; float: left;">Stars: {{review.stars}}</b>
    		<p style="margin-bottom: 15px;">Comment: {{review.textt}}</p>
    		<cite>{{review.email}}</cite>
    	</blockquote>
    	<div >
    	<b class="slika2">Average rating: {{avg3[0].avgg}}</b>
    	</div>
    	</div>
    	<div style="background-color: #dbecff; margin-top: 20px;">
    	<blockquote >
    		<b style="padding-right: 30px; float: left;">Stars: {{review.stars}}</b>
    		<p style="margin-bottom: 15px;">Comment: {{review.body}}</p>
    		<cite>{{review.author}}</cite>
    	</blockquote>


<?php
$host = "localhost";
    $user = "root";
    $psw = "";
    $dbname = "baza1";

    //open connection to mysql db
    $conn = new mysqli($host,$user,$psw,$dbname); // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST['save'])){
        $sql = "INSERT INTO ratings (id, stars, textt, email)
        VALUES (3,'".$_POST["stars"]."','".$_POST["textt"]."','".$_POST["email"]."')";
        $result = $conn->query($sql);
    }
 

    ?>

    	<form action="3.php" method="post" id="myform" name="reviewForm" class="form-group" style="width: 90%; margin: auto; padding-bottom: 55px;">
    	<label for="stars" style="margin-top: 10px">Rating:</label><br>
    	<select ng-model="review.stars" name="stars" style="width: 25%; margin: auto;">
    		<option value="1" class="form-control">1 star</option>
    		<option value="2" class="form-control">2 star</option>
    		<option value="3" class="form-control">3 star</option>
    		<option value="4" class="form-control">4 star</option>
    		<option value="5" class="form-control">5 star</option>
    	</select><br>
    	<label for="textt" style="margin-top: 10px">Comment:</label>
    	<textarea ng-model="review.body" name="textt" class="form-control" style="margin-top: 10px"></textarea>
    	<label for="email" style="margin-top: 10px">By:</label>
    	<input ng-model="review.author" type="email" name="email" class="form-control" style="margin-top: 10px"/>
    	<div style="margin-top: 40px">
    	<input value="Submit" name="save" type="submit" class="form-control" style="margin-top: 10px; width: 35%; margin: auto;"/>
    	</div>
    	</form>
    	</div>
    	</div>
    
    </div>

</body>
</html>