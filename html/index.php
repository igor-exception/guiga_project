<?php

$servername = "mariadb";
$dbname = "users";
$username = "root";
$password = "example_password";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta para recuperar todos os nomes dos usuários
    $sql = "SELECT name FROM names";
    $stmt = $conn->query($sql);
    
    // Exibindo os resultados
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['name'] . "<br>";
    }
} catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
