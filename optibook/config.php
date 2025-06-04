<?php
$host = 'localhost';
$db   = 'optibook';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo "<style>
        body { background: #1a0000; color: #fff; font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .error { background: #330000; padding: 30px; border-radius: 10px; box-shadow: 0 0 15px red; }
    </style>";
    echo "<div class='error'><strong>Erreur de connexion :</strong><br>" . $e->getMessage() . "</div>";
    exit;
}
?>
