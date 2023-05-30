<?php
  $mysqli = mysqli_connect("localhost", "gafcrxug_0970", "123456", "gafcrxug_0970");

  if ($mysqli == false){
    print("error");
  } 
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = trim(mb_strtolower($_POST["email"]));
  $city = $_POST["city"];
  $direction = $_POST["direction"];
  $message = $_POST["message"];
  $connection = $_POST["connection"];
  $mysqli->query("INSERT INTO `clients`(`name`, `phone`, `email`, `city`, `direction`, `message`, `connection`) VALUES ( '$name', '$phone', '$email', '$city', '$direction', '$message', '$connection')");
  print("ok");