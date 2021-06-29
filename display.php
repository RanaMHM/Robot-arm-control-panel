
<?php
$connection = new mysqli('localhost' ,'root','','robotarm');
if($connection->connect_error){
    die('Connection Faild :' .$connection->connect_error);
}else{
$getdata = "SELECT * FROM motors ORDER BY S DESC LIMIT 1 ";
$getdata = mysqli_query($connection, $getdata);


while ($row = mysqli_fetch_array($getdata)) {
echo "<table  id=r1><tr><th id=h55>Motor1&nbsp</th><th id=h55>Motor2&nbsp</th>
<th id=h55>Motor3&nbsp</th><th id=h55>Motor4&nbsp</th><th id=h55>Motor5&nbsp</th>
<th id=h55>Motor6&nbsp</th></tr>";

$s1= $row["Motor1"];    $s2= $row["Motor2"];
$s3= $row["Motor3"];    $s4= $row["Motor4"];
$s5= $row["Motor5"];    $s6= $row["Motor6"];

echo"<tr id=t56><td id=t55>$s1</td><td id=t55>$s2</td><td id=t55>$s3</td><td id=t55>$s4</td>
<td id=t55>$s5</td><td id=t55>$s6</td></tr>";


}
}

mysqli_close($connection); //close connection
 

?>
