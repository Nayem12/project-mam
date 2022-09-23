<?php

if(isset($_POST['Name']) &&
isset($_POST['Number']) &&
isset($_POST['Address']) &&
isset($_POST['area'])
){
include 'db_conn.php';

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
 $Name = validate($_POST['Name']);
 $Number = validate($_POST['Number']);
 $Address = validate($_POST['Address']);
 $Area = validate($_POST['Area']);

 if(empty($Name)|| empty($Number)){
    header("Location: index.html");
 }else{
    $sql = "INSERT INTO test(Name, Number, Address, Area) VALUES('$Name','$Number','$Address', '$Area')";
    $res = mysqli_query($conn, $sql);
    if($res){
      echo "Thank You! Your order has been successful";
   }else{
      echo "Please provide valid information";
   }
   };


 
 

}else{
    header("Location: index.html");
}