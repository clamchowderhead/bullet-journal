<!DOCTYPE html>
<html>
<head>
    <title>Bullets</title>
    <style>
        body {
            margin: 0 auto;
            font-family: Tahoma, Verdana, Arial, sans-serif, 'Glyphicons-Halflings';
        }
    </style>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:700' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="bulletjournal.css">

    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    
</head>
<body>
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
                    <li class= 'navi sign'><a href='bulletjournalsignin.php'>Sign-In</a></li>
                    <li class= 'navi quickadd'> <input type='text' placeholder= 'Quickadd'/>&nbsp;<input type='submit'/> </li>
                    
                </ul>
            </div>
        </nav>
        
        <div class='today'> 
            <p>Today's Bullets</p>
            <ul id='firstbull'>
            </ul>
        </div>
        
        
        <container class= 'homePane2'>
            <div class='monthView'><a href='bulletjournalmonth.html'>Month </a></div>
            <div class='dayView'><a href='bulletjournalday.html'>Day </a></div>
            <div class='addBulletView'><a href='bulletjournaladdbull.html'>Add Bullet </a></div>
        </container>
        
        <container class='login'> 
            <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
                <p>Sign-In</p>
                <div class='user'>Username: <input type='text' name='username'/></div>
                <div class='pass' data-toggle='tooltip' title='Must be more than 6 characters'>Password: <input type='password' name= 'password' /></div>
                <div class='sub'> <input name='submit' type='submit'/></div>
                <div class='res'> <input type='reset'/></div>
            </form>
            
            <?php
                    if (isset($_POST['submit'] )) //If form submitted...
                        {   global $password;
                            $password= trim($_POST['password']);  //Set the $password variable to the password value entered
                            if(pwdSize($password)){ // Do function pwdSize and if $password less than 6 characters, set to NULL
                                $password= NULL;
                            };
                        }

                    function pwdSize($x){
                        if(!isset($x[5])){ 
                        echo "<br/><br/>Password must be at least 6 characters."; //If variable $x is not at least 6 characters, then echo the statement 
                        return true; 
                        }
                        else{
                            return false;
                        }
                    }
            ?>
        
        </container>
        
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src='bulletjournalhome.js'></script>
</body>
</html>