<?php

function authentification(string $login, string $mdp): ?array {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT id_user, username, password FROM user WHERE username=:login";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':login' => $login]);

    $user = $stmt->fetch();

    $valid = false;
    $dummyHash = '$2y$10unfauxmotdepasseVCD8wY.qiQFOxv4O.tq33sKXT2Dyj5t6G4bte6';

    if ($user) {
        $valid = password_verify($mdp, $user['password']);
    } else {
        password_verify($mdp, $dummyHash); // inutile mais permet d'équilibrer le temps d'éxecution
    }

    if ($valid) {
        unset($user['password']);
        return $user;
    }

    return null;
}