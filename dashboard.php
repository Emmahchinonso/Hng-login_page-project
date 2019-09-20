
<?php
require('config.php');


if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $psw = $_POST['psw'];

    if(empty($email || $psw)){
        echo ("empty");
    }
    else{

$res =mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND psw = '$psw' ");
$query_return = mysqli_fetch_array($res, MYSQLI_ASSOC);
echo "Welcome " . $query_return['firstname'] ." ". $query_return['lastname'] ; 
if(!$res){
    printf("Error: %s\n", mysqli_error($conn));
    
}

if(mysqli_num_rows($res)== 1){


    $_SESSION['firstname'] = $query_return['firstname'];
    $_SESSION['lastname'] = $query_return['lastname'];
    $_SESSION['email'] = $query_return['email'];
  

    
}
}

}




?>
<?php

session_start();
if (isset($_SESSION['email'])){
    header('location:dashboard.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard | Portal </title>
</head>

<body>


</body>
</html>

    