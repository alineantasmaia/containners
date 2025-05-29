<?php
$host = 'db'; // PostgreSQL service name defined in docker-compose
$dbname = 'your_database_name';
$user = 'your_username';
$password = 'your_password';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Example query
    $stmt = $pdo->query('SELECT * FROM your_table_name');
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($results as $row) {
        echo 'Data: ' . htmlspecialchars($row['your_column_name']) . '<br>';
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>