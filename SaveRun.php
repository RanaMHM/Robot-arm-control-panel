<?php

$motor1= $_POST['m1'];
$motor2= $_POST['m2'];
$motor3= $_POST['m3'];
$motor4= $_POST['m4'];
$motor5= $_POST['m5'];
$motor6= $_POST['m6'];

  //database connection
  $connection = new mysqli('localhost' ,'root','','robotarm');
  if($connection->connect_error){
      die('Connection Faild :' .$connection->connect_error);
  }else{
   
    //save button
  if(isset($_POST['save']) ){  
     
     $sql= "INSERT INTO `motors`(`Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`, `Motor6`, `S`) VALUES ('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6','1')";

      if (mysqli_query($connection, $sql)) {
        echo "The data sent successfuly" . "<br>";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection) . "<br>";
        }
        $sav1 = "INSERT INTO `offon`(`Off`, `On`) VALUES ('1','')";
       if (mysqli_query($connection, $sav1)) { }

       
      }
     
     
//run button
if (isset($_POST['run']) ){ 
  
  $run = "INSERT INTO `offon`(`Off`, `On`) VALUES ('','1')";
  if (mysqli_query($connection, $run)) { }
    $getdata = "SELECT * FROM motors ORDER BY S DESC LIMIT 1 ";
    $getdata = mysqli_query($connection, $getdata);


}
header("Location: http://localhost/RobotArm/index.html");
       exit();

}  


  
mysqli_close($connection); //close connection
  ?> 
