<?php
include_once __DIR__ . "/../Conf/Database.php";
include_once __DIR__ . "/../View/error.php";
class Register_Model
{
    private $conn;
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->Database();
    }

    public function UserRegister($fullname, $username, $email, $password_hash)
    {
        $SQL_Query = "INSERT INTO Tm_users (FullName, UserName, Email, Password) VALUES ('$fullname', '$username', '$email', '$password_hash')";
        if (mysqli_query($this->conn, $SQL_Query)){
            return 20004;
        }

        return 20008;
    }
}
