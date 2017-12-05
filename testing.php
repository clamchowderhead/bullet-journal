
<?php
    
    $con=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($con,'my_database');
    
    if($con){
        echo "Connection is successful to the database you are now connected to my_database". "<br>";
        
    }else{
        die('Error.');
    }
    
    if($db){
        echo "The requested DB exists". "<br>";
        
    
    }else{
        die('You do not know the fucking DB that you want to connect to eh?');
    }

?>

<?php
    echo "Begining first query...";
    $post_date = file_get_contents("php://input");
    echo "Got file_get_contents";
    $data = json_decode($post_date);
    echo "Decoding the JSON...";
    print $data->add;
    echo "Getting the variable...";
    $query1="INSERT INTO `data` (`id`, `name`) VALUES (NULL, $data->add)";        
    $result=mysqli_query($con,$query1);


?>



<?php
        $query2="SELECT * FROM data";
        $result=mysqli_query($con,$query2);
        
        if(mysqli_num_rows($result)>0){
            
            while($row = mysqli_fetch_assoc($result)){
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
            }
        }else{
            echo "Fuck man we stuck here!";
        }
?>
