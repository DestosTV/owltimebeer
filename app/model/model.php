<?php

/**
 * Retourne un objet PDO qui correspond à une connexion à la base de données 
 * dont la configuration est donnée dans le fichier config.php.
 *
 * @return PDO
 */
function getDatabaseConnexion(): PDO
{

    try {

        $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // TODO: améliorer la gestion de l'erreur
        echo $e->getMessage();
        exit;
    }
    return $pdo;
}

function getAllBeer(): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM beer");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getBeerById(int $id): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM beer WHERE id_beer=:id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

function getAllPerson(): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM trombinoscope");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getPersonById(int $id): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM trombinoscope WHERE id_trombi = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch() ?: [];
}