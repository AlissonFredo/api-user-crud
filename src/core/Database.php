<?php

namespace app\core;

use PDO;
use PDOException;

class Database
{
    private $host = 'localhost';
    private $dbName = 'api_user_crud';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->dbName}",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            // TODO - Fazer esse erro ser imprimido no arquivo de log.
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
