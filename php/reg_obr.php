<?php
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "oiujmjkg_taxi", "Zxcvbn11523455", "oiujmjkg_taxi");
if ($mysqli == false){
print("error");
}else{
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = trim(mb_strtolower($_POST['email']));
$pass = trim($_POST['pass']);
$pass = password_hash($pass, PASSWORD_DEFAULT);


// echo "Имя: $name<br>
// Фамилия: $lastname<br>
// Имейл: $email<br>
// Пароль: $pass";
$result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
if ($result->num_rows != 0) {
//var_dump($result->num_rows);
print("exist");
} else {
$mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `password`) VALUES ('$name','$lastname','$email','$pass')");
print("ok");
}
}
?>