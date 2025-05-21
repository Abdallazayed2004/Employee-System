<?php

  $db_server = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name= "customers";
  $conn = new mysqli($db_server , $db_user , $db_password , $db_name);

  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
if (isset($_POST["country"]) && isset($_POST["gender"]))
{
  $first_name = $_POST["first_name"];
  $second_name = $_POST["last_name"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];
  $telephone = $_POST["telephone"];

  $insert="INSERT INTO customer( first_name, last_name, email, telephone, age, country, gender,created_on , last_update)
  VALUES ('$first_name','$second_name','$email',$telephone,$age,'$country','$gender',NOW(),NOW())";
  $conn->query($insert);
  header("location:../index.php");
  exit();

}else{
  header("Location: adduser.php?error=1");
  exit();
}
?>