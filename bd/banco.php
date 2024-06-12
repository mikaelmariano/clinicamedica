<pre>
<?php
$host = '162.241.62.252';
$db = 'mikade90_projetoPHP-ADS2024';
$user = 'mikade90_ads2024';
$pass = 'ads2024@';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
    exit;
}
?>
</pre>