<?php
// getCityState.php
//  Gets the form value from the "zip" widget, looks up the
//  city and state for that zip code, and prints it for the
//  form

  $cityState = array("81611" => "Aspen, Colorado",
                     "81411" => "Bedrock, Colorado",
                     "80908" => "Black Forest, Colorado",
                     "80301" => "Boulder, Colorado",
                     "81127" => "Chimney Rock, Colorado",
                     "80901" => "Colorado Springs, Colorado",
                     "81223" => "Cotopaxi, Colorado",
                     "80201" => "Denver, Colorado",
                     "81657" => "Vail, Colorado",
                     "80435" => "Keystone, Colorado",
                     "80536" => "Virginia Dale, Colorado",
                     "22030" => "Fairfax, Virginia",
                     "22032" => "Burke, Virginia",
                     "22911" => "Charlottesville, Virginia",
                     "06066" => "Storrs, Connecticut"
                     );

/* -------------------------------------- */
// if the request from ng-app is a get request (url attached with param-value),
// we can retrieve a specific param from the $_GET object directly
// (uncomment the following code and make sure the ng-app sends a "get" request)
  
//   $zip = $_GET["zip"];            
//   if (array_key_exists($zip, $cityState))
//     print $cityState[$zip];
//   else
//     print " , ";
  
/* -------------------------------------- */
// if the request from ng-app is a post request
// ng-app passes data as a json object 
// that is {key1:value1, key2:value2, ...}
// 
// To read the json data, in php, we need to decode the json data such that 
// a json data is transformed into an associative array. 
// Then, php code an make use of the array 
//
// let's see what json data received from ng-app, using var_dump()  
//   var_dump( file_get_contents('php://input'));
   
// file_get_contents allows us to access input/output stream
// php://input is a read-only stream that allows us to read raw data from the request body 

  $post_date = file_get_contents("php://input");
  $data = json_decode($post_date);      // json_decode returns an associative array
//  print $data->zip;                     // print a value of param named "zip" received from the request    
  print $cityState[$data->zip];         // maps the zip's value to retrieve its associated value from $cityState array
?>