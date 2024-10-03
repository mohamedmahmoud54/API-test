<?php
class Database {
    // Database credentials
    private $host = "localhost";
    private $db_name = "msa_db"; // Replace with your database name
    private $username = "root"; // Replace if your MySQL user is different
    private $password = ""; // Add your MySQL password if necessary
    public $conn;

    // Get the database connection
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8"); // To handle UTF-8 encoding
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
