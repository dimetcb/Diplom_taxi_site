<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$mysqli = mysqli_connect("localhost", "oiujmjkg_taxi", "Zxcvbn11523455", "oiujmjkg_taxi");
if ($mysqli == false) {
  print("error");
} else {
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];
  $name = $_SESSION['lastname'];
  $name = $_SESSION['patronymic'];
}
class User
{
  private $name;
  private $lastname;
  private $email;
  private $id;
  private $patronymic;

  function __construct($id, $name, $lastname, $email, $patronymic)
  {
    $this->id = $id;
    $this->name = $name;
    $this->lastname = $lastname;
    $this->email = $email;
  }

  function getId()
  {
    return $this->id;
  }
  function getName()
  {
    return $this->name;
  }
  function getLastname()
  {
    return $this->lastname;
  }
  function getEmail()
  {
    return $this->email;
  }
  function getPatronymic()
  {
    return $this->patronymic;
  }
  static function getUser($userId)
  {
    global $mysqli;
    $result = $mysqli->query("SELECT * FROM `users` WHERE `id` = '$userId'");
    $result = $result->fetch_assoc();
    return json_encode($result);
  }
}
