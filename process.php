<?php
include 'config.php';

//echo "Connected Successfully";

?>





<?php


    if (isset($_POST['submit'])){
        
        $firstname = strtoupper($_POST['firstname']);
        $lastname = strtoupper($_POST['lastname']);
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $psw = $_POST['psw'];

mysqli_query($conn, "INSERT INTO user VALUES('','$firstname', '$lastname', '$email', '$phonenumber', '$psw')");



         echo "<p class = 'welcome'> Welcome ".  $firstname ." ". $lastname ." ". "Thank you for successfully registering";   
    
}

?>