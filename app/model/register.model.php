<?php
class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    /**
     * Get user data by username
     * 
     * @param string $username
     * @return array|null User data or null if not found
     */
    public function getUserByUsername($username) {
        $sql = "SELECT * FROM user WHERE username = :username LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    }

    /**
     * Insert a new user into the database
     * 
     * @param array $userData
     * @return bool True on success, false on failure
     */
    public function insertUser($userData) {
        $sql = "INSERT INTO user (username, lastname, firstname, email, age, password) VALUES (:username, :lastname, :firstname, :email, :age, :password)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($userData);
    }
}
?>
