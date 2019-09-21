<?php
if (isset($_POST['submit'])) {
  session_start();

// initializing variables
$firstname = "";
$lastname = "";
$email    = "";
$phonenumber = "";
$password = "";
$repeatpassword = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root','','leodb');

// REGISTER USER

  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastnamename = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  

 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($lastname)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phonenumber)) { array_push($errors, "Phone Number is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM signup WHERE First_Name='$firstname' || Last_Name='$lastname' || Email='$email' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['firstname'] === $firstname) {
      array_push($errors, "First Name already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO signup (First_Name,Last_Name,Email,Phonenumber,Password) 
  			  VALUES('$firstname','lastname', '$email','$phonenumber', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['firstname'] = $firstname;
    $_SESSION['success'] = "Welcome,You have just signed in";
  	header('location: index.php');
  }
}

//LOGIN
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
if (empty($email)) {
    array_push($errors, "Email is required");
    }
if (empty($password)) {
    array_push($errors, "Password is Required");
    }
    
if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
    $results = mysqli_query ($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $_SESSION ['email'] = $email;
        $_SESSION ['success'] = "You are now logged in";
        header('location: index.php');
    }
    else {
        array_push($errors, "Wrong Email/Password Combination");
    }
    }
    
}

?>
