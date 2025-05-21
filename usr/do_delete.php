<?php

  $db_server = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name= "customers";
  $conn = new mysqli($db_server , $db_user , $db_password , $db_name);

  $id = $_GET["id"];
  $del = "delete from customer where id = $id";
  $conn->query($del);
  header("location:../index.php");