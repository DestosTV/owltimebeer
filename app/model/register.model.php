<?php

function getUserByUsername($pdo, $username) {
    $sql = "SELECT * FROM user WHERE username = :username LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user ?: null;
}

function insertUser($pdo, $userData) {
    $sql = "INSERT INTO user (username, lastname, firstname, email, password) VALUES (:username, :lastname, :firstname, :email, :password)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($userData);
}