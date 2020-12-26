<?php
class Database
{
    // DB Params..
    private $host = 'localhost';
    private $db_name = 'myblog';
    private $username = 'root';
    private $password = '';

    private $conn; // its represent connection

    // DB Connection

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname =' . $this->db_name, $this->username, $this->password); // create object of pdo class ..
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error" . $e->getMessage(); // for getting actual error message ..
        }

        return $this->conn;
    }

}
