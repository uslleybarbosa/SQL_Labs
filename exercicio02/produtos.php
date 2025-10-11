<?php

$db = new PDO('sqlite:db.sqlite');

$categoria = $_GET['categoria'];


$query = "SELECT * FROM produtos WHERE categoria = '$categoria' AND released = 1";


$resultado = $db->query($query);


foreach ($resultado as $linha) {
    echo "🛒 Produto: " . $linha['name'] . "<br>";
}
?>
