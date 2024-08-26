<?php

namespace app\repositories;

use app\core\Database;
use app\models\User;
use PDO;

class UserRepository
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function show($id) {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function list() {
        $query = "SELECT * FROM users";
        $stmt = $this->conn->query($query);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(User $user)
    {
        $query = "INSERT INTO users (name, email, phone_number, birth_date, address, created_at, updated_at) 
            VALUES (:name, :email, :phone_number, :birth_date, :address, :created_at, :updated_at)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $user->getName());
        $stmt->bindParam(':email', $user->getEmail());
        $stmt->bindParam(':phone_number', $user->getPhoneNumber());
        $stmt->bindParam(':birth_date', $user->getBirthDate());
        $stmt->bindParam(':address', $user->getAddress());
        $stmt->bindParam(':created_at', $user->getCreatedAt());
        $stmt->bindParam(':updated_at', $user->getUpdatedAt());

        return $stmt->execute();
    }

    public function update($id, User $user) {
        $query = "UPDATE users 
            SET 
                name = :name, 
                email = :email, 
                phone_number = :phone_number, 
                birth_date = :birth_date,
                address = :address,
                created_at = :created_at,
                updated_at = :updated_at
            WHERE id = :id
        ";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $user->getName());
        $stmt->bindParam(':email', $user->getEmail());
        $stmt->bindParam(':phone_number', $user->getPhoneNumber());
        $stmt->bindParam(':birth_date', $user->getBirthDate());
        $stmt->bindParam(':address', $user->getAddress());
        $stmt->bindParam(':created_at', $user->getCreatedAt());
        $stmt->bindParam(':updated_at', $user->getUpdatedAt());
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    public function destroy($id) {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}
