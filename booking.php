<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "booking";
$conn = new mysqli($servername,$username,$dbname);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}

if($_SERVER["Request_Method"] == "Post"){
    $WhereTo = $_POST["where to"];
    $HowMany = $_POST["how many"];
    $Arrivals = $_POST["arrivals"];
    $Leaving = $_POST["leaving"];
    $Name = $_POST["name"];
    $Email =$_POST["email"];
    $Phone = $_POST["phone"];


    $sql = "INSERT INTO `booking`(`WhereTo`, `HowMany`, `Arrivals`, `Leaving`, `Name`, `Email`, `Phone`) 
    VALUES ('$WhereTo','$HowMany]','$Arrivals','$Leaving','$Name','$Email','$Phone')";
    if($conn->query($sql) == TRUE){
        echo "booking successfully";
    }else{
        echo "error:" .$sql . "<br>" .$conn->error;
    }
}
$conn->close();
?>