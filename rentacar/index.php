<html lang="en" ng-app="myApp">


<head>
    <meta charset="UTF-8">
    
    <link href="styles/css/bootstrap.css" rel="stylesheet">   

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="scripts/vendor/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.2.30/angular-route.min.js"></script>
    <script src="scripts/vendor/jquery-2.2.2.js"></script>
    <script src="scripts/vendor/bootstrap.js"></script>
    <script src="scripts/directives/app.js"></script>
    <script src="scripts/controllers/ctrl1.js"></script>
    
    <style>
.slika{
    height: 300px;
    width: 600px;
    padding: 30px;
    float: left;
}
.naslov{
    padding-left: 5cm;
    width: 100%;
}
#tabela{
    display: inline-block;
    width: 50%;
    height: 300px;
    padding: 30px;
    float: left;
}
.tabela2{
   width: 50%;
  margin: 0 auto;
}
#paragraf{
    padding:50px;
}
.newspaper{
    column-count: 3;
    column-gap: 45px;
}
.srch{
     width: 130px;
     margin-left: 30px;
     margin-right: : 30px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('pictures/searchicon2.jpg');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
} 
.srch:focus{
    width: 50%;
}
#reser{
    width: 50%;
    margin: auto;
}
.batoni{
    width: 20%;
    float: right;

}
.batoni button{
background-color: #dbecff; /* Green background */
    border: 1px black; /* Green border */
    color: black; /* White text */
    padding: 10px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    width: 70%; /* Set a width if needed */
    display: block;
    margin-top: 3px;
}
.batoni button:hover{
    background-color: #bbd8f7;
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
select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
}
th:nth-child(even) {background: #dbecff}

tr:hover{background-color:#f5f5f5}
</style>
</head>



<body ng-controller="myController as myCtrl" ng-init="vozilo=0">


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="myNavBar">
                <div>
                    <ul class="nav navbar-nav">
                        <li id="tabovi"><a href ng-click="tab=11" id="linkovi">Reservation Form</a></li>
                        <li id="tabovi"><a href ng-click="tab=22" id="linkovi">Vehicle Fleet</a></li>
                        <li id="tabovi"><a href ng-click="tab=33" id="linkovi">About</a></li>
                        <li id="tabovi"><a href ng-click="tab=44" id="linkovi">Price List</a></li>
                        <li id="tabovi"><a href ng-click="tab=55" id="linkovi">Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <div class="container">
      
    	<div class="jumbotron" style="background-color: #dbecff">
            <h1>Welcome to Rent-a-carBH</h1>
            <p>Official site, with general information, vehicle fleet, reservations, and other services of our company.</p>
        </div>
    </div>

    <div ng-show="tab===22" >
   
   
        <input ng-model="searchKeyword" class="srch" />          
        
    </table>
    <div ng-repeat="car in cars | filter:searchKeyword">
        <a ng-href="{{car.id}}.php"><img class="slika" ng-src="{{car.image}}"></a>
        <table class="table table-hover" id="tabela" >
  <tr>
    <th>NAME</th>
    <th>{{car.name}}</th>
    <th>DOOR NUMBER</th>
    <th>{{car.door_number}}</th> 
  </tr>
  <tr>
    <th>AIRBAGS</th>
    <th>{{car.airbag}}</th> 
    <th>MUSIC</th>
    <th>{{car.music}}</th>
  </tr>
  <tr>
    <th>AIRCONDITIONING</th>
    <th>{{car.air_conditioning}}</th> 
    <th>CENTRAL LOCK</th>
    <th>{{car.central_lock}}</th>
  </tr>
  <tr>
    <th>SEATS</th>
    <th>{{car.seats}}</th> 
    <th>TRANSMISSION</th>
    <th>{{car.transmission}}</th>
  </tr>
  <tr>
    <th>FUEL</th>
    <th>{{car.fuel}}</th> 
    <th>SERVO</th>
    <th>{{car.servo}}</th>
    </tr>
</table>
    </div>
    </div>
    
    <div ng-show="tab===33">
     <p class="text-justify lead newspaper" id="paragraf">Our experience and satisfied customers are the best guarantee of quality service and vehicles that we provide. We deliver additional value and loyalty to our customers. We are comitted to our customers and we promise to deliver the best car rental experience through excellent customer service and high quality vehicles. We also ensured vehicle equipment, GPS, Car seats, Thule, etc. Trying to know your needs, accordingly we enrich our offer. Time car rental strive to provide the best service to its customers. As a company we conform to current European health and Safety standards. We strive to be even better…</p>   
    </div>

    <div class="panel panel-default" ng-show="tab===11" id="reser">
    <div class="panel-body" style="background-color: #dbecff">
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
        $sql = "INSERT INTO reservations (name, pickup, returndate, firstname, lastname, email, phone)
        VALUES ('".$_POST["name"]."', '".$_POST["pickup"]."', '".$_POST["returndate"]."', '".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["phone"]."')";
        $result = $conn->query($sql);
    }
   /*
    $msg = "First line of text\nSecond line of text";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("someone@example.com","My subject",$msg);*/

    ?>
        <div style="margin-bottom: 15px">
        <h4 style="width: 50%; margin: auto; text-align: center;"><b>Reservation form</b></h4>
        </div>
        <form action="index.php" method="post" id="myform" name="reviewForm" class="form-group">
        <select name="name">
            <option ng-value="{{car.name}}" ng-repeat="car in cars" class="form-control" style="background-color: #dbecff">{{car.name}}</option> 
        </select>
            <label for="pickup" style="margin-top: 10px">Pick up date:</label>
            <input type="date" name="pickup" class="form-control" style="margin-top: 10px">
            <label for="returndate" style="margin-top: 10px">Return date:</label>
            <input type="date" name="returndate" class="form-control" style="margin-top: 10px">
            <label for="firstname" style="margin-top: 10px">First name:</label>
            <input type="text" name="firstname" class="form-control" placeholder="Enter first name" style="margin-top: 10px">
            <label for="firstname" style="margin-top: 10px">Last name:</label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter last name" style="margin-top: 10px">
            <label for="email" style="margin-top: 10px">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" style="margin-top: 10px">
            <label for="phone" style="margin-top: 10px">Phone number:</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter phone number" style="margin-top: 10px">
            <div style="margin-top: 40px">
            <input value="Submit" name="save" type="submit" class="form-control" style="margin-top: 10px; width: 35%; margin: auto;" />
            </div>
            </form>
    </div>
    </div>

    <div ng-show="tab===44" >
    <table class="tabela2">
        <tr>
            <th></th>
            <th>1-2 days</th>
            <th>3-5 days</th>
            <th>>5 days</th>
        </tr>
        <tr ng-repeat="car in cars">
         <th>{{car.name}}</th>
         <th>{{car.price}}</th>
         <th>{{car.price-20}}</th>
         <th>{{car.price-40}}</th>   
        </tr>
    </table>
    <div id="reser">
    <h3><b>* Prices are shown in KM (konvertibilna marka), daily</b></h3>
    </div>
    </div>

	<div ng-show="tab===55">
    <div class="batoni">

    <button id="baton" ng-repeat="x in cars" ng-click='myMap(x.gpslatitude, x.gpslongitude, x.name, x.image)'>{{x.name}}</button>
    </div>
     <div  id="map" style="width:70%;height:700px;margin:30px"></div>
 
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEwttTez1wQlhBoMNg9lSovEXGflkzwKc&callback=initMap" async defer></script> 

    </div>

</body>
</html>





