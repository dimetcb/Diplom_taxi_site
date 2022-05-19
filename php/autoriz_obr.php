<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "oiujmjkg_taxi", "Zxcvbn11523455", "oiujmjkg_taxi");
if ($mysqli == false) {
  print("error");
} else {

  $email = trim(mb_strtolower($_POST['email']));
  $pass = trim($_POST['password']);

  $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
  
  $result = $result->fetch_assoc();

  if (password_verify($pass, $result['password'])) {
    print("ok");
    $_SESSION['name'] = $result['name'];
    $_SESSION['lastname'] = $result['lastname'];
    $_SESSION['patronymic'] = $result['patronymic'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['id'] = $result['id'];
  } else {
    print("error");
  }
}

