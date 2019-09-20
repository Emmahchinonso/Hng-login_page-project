<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hng');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
//  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM signup WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "Name already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO signup (name, email, password) 
  			  VALUES('$name', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

//LOGIN
if (isset($_POST['login'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
if (empty($name)) {
    array_push($errors, "Username is required");
    }
if (empty($password)) {
    array_push($errors, "Password is Required");
    }
    
if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM signup WHERE name = '$name' AND password = '$password'";
    $results = mysqli_query ($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $_SESSION ['name'] = $name;
        $_SESSION ['success'] = "You are now logged in";
        header('location: index.php');
    }
    else {
        array_push($errors, "Wrong Username/Password Combination");
    }
    }
    
}

?>
