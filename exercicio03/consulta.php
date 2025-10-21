<?php

$db = new SQLite3('db.sqlite');

$categoria = $_GET['categoria'] ?? '';
$query = "SELECT nome, descricao FROM produtos WHERE categoria = '$categoria'";

$result = $db->query($query);


echo "<h2>Resultado da consulta:</h2>";

$encontrou = false;
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $encontrou = true;
    echo "Nome: " . htmlspecialchars($row['nome']) . "<br>";
    echo "Descrição: " . htmlspecialchars($row['descricao']) . "<br><hr>";
}Categoria A

if (!$encontrou) {
    echo "Nenhum produto encontrado para a categoria informada.";
}
?>
