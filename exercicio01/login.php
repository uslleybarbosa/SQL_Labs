<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$db = new SQLite3('db.sqlite');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $db->query($query);

if ($result && $result->fetchArray()) {
    echo "Login Bem-Sucedido";
} else {
    echo "Credenciais Inválidas";
}
?>
