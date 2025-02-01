<?php
$db= mysqli_connect("localhost","root","","trafficlb") or die(mysqli_error());
if($db->connect_error){
    echo"erro";
}
?>