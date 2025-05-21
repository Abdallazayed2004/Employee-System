<?php

  $db_server = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name= "customers";
  $conn = new mysqli($db_server , $db_user , $db_password , $db_name);

  // echo"<pre>";
  // print_r($_POST);
  // echo"<pre>";


  $id = $_POST["id"];
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $telephone= $_POST["telephone"];
  $age= $_POST["age"];
  $gender= $_POST["gender"];
  $country= $_POST["country"];
  // $sel_created="select * from customer where id =$id";
  // $result_created=$conn->query($sel_created);
  // $result=$result_created->fetch_assoc();
  // $created=$result["created_on"];

  $update="UPDATE customer SET first_name='$first_name',last_name='$last_name',email='$email',telephone='$telephone',age=$age,
  country='$country',gender='$gender',last_update=NOW() WHERE id = $id";
  $conn->query($update);
  header("location:../index.php");