<?php
$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="umpn";
//connect to database
$lidh = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Smund te behet lidhja me databazen!");
//get the data from table Data_ahome
$query = "SELECT shenim FROM umpn_edhenaadm";
//execute the query
$rezultati = mysqli_query($lidh, $query);
if(!$rezultati){ echo "Query nuk mund te ekzekutohet!"; die();}
else{
 //creates an empty array to hold data
 $data = array();
  while($rreshti = mysqli_fetch_assoc($rezultati)){
    $data[]=$rreshti;
  }
//  echo json_encode($data, JSON_PRETTY_PRINT);
//it will create file rezultatis.json with writing mode.
//you can read more about file handling in PHP here. 
$fp = fopen('test.json', 'w');
//json_enconde($array, $options(optional) is the method to convert array into JSON
fwrite($fp, json_encode($data, JSON_PRETTY_PRINT));
echo "Dosja u krijua";
//close the file
fclose($fp);
}
?>