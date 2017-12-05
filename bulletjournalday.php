<!DOCTYPE html>
<html>
<head>
    <title>My Bullet Journal</title>
    <style>
        body {
            margin: 0 auto;
            font-family: Tahoma, Verdana, Arial, sans-serif, 'Glyphicons-Halflings';
        }
    </style>
    <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:700' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700' /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="bulletjournal.css">
    <link rel="stylesheet" href="bulletjournalday.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>

    <!-- <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'> -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    
</head>
<body data-ng-app ="myApp">
    <main>
        <div class='header'>
            
            <h1 class='title'>Bullets</h1>
            
        </div>
        
        <nav class='navbar navbar-inverse' >
            <div class='container-fluid '>
                <ul class='nav navbar-nav navbar-btn'>
                    <li class='navi home'><a href='bulletjournal.php' >Home</a></li>
                    <li class='navi month'><a href='bulletjournalmonth.html'>Month</a></li>
                    <li class='navi day'><a href='bulletjournalday.html'>Day</a></li>
                    <li class='navi add'><a href='bulletjournaladdbull.html' >Add Bullet</a></li>
                    <li class= 'navi sign'><a href='bulletjournalsignin.html'>Sign-In</a></li>
                    <li class= 'navi quickadd'> <input type='text' placeholder= 'Quickadd'/>&nbsp;<input type='submit'/> </li>
                    
                </ul>
            </div>
        </nav>
        
    

<div data-ng-controller="myController">
    <p>
      {{msg}}
      <br/>
      
      <form>      
      Add: <input type="text" data-ng-model="add" /> 
      <input type = "submit"  value = "submit" ng-click="sendData()"  />
      <input type = "reset"  value = "reset" data-ng-click="resetFunction()" /><br/>
      Confirm Add: {{add}}<br/>
      Error: {{error}}
      </form>
      </p>
</div>

   
   <script>
      var myApp = angular.module("myApp", []);
      myApp.controller("myController", function ($scope,$http) 
      {

        //All of the relevant datbase stuff

    	 
    	  $scope.msg= "Enter a bullet description in order to add it to the list. ";
    	  
    	  //Package the add variable and send it to the other php file
        $scope.sendData = function() {
          $http.post('http://localhost/bullet-journal/testing.php', {"add":$scope.add});
        }
        
        $scope.resetFunction = function() {
            $scope.add = "";  	   
        }

        //Send the information into a database



    });
    </script>

    

    
    <div class='container'>  
        <span class="glyphicon glyphicon-arrow-left"></span>
        <div id='content'></div>
        <span class="glyphicon glyphicon-arrow-right"></span>
    </div>   
        
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script src='bulletjournalday.js'></script>  -->
    
</body>
</html>
