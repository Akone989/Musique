<?php
require "../vendor/autoload.php";

// Charger les variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

// Informations de la base de données
$dbHost = $_ENV['DB_HOST'];
$dbPort = $_ENV['DB_PORT'];
$dbName = $_ENV['DB_NAME'];
$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASSWORD'];
$dbCharset = $_ENV['DB_CHARSET'];



// Chaîne de connexion PDO
$dsn = "mysql:host=$dbHost:$dbPort;dbname=$dbName;charset=$dbCharset";

try {
    // Créer une instance de PDO
    $pdo = new PDO($dsn, $dbUser, $dbPassword);

    // Configurer PDO pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Utiliser la connexion PDO ici...

    // Exemple : exécuter une requête
    $stmt = $pdo->query("SELECT * FROM artiste");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        
    }

    // Fermer la connexion
    $pdo = null;
} catch (PDOException $e) {
    // Gérer les erreurs de connexion
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}
