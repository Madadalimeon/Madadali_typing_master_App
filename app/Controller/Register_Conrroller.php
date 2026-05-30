<?php
include_once __DIR__ . "/../model/Register_Model.php";
include_once __DIR__ . "/../View/error.php";


class Register_Conrroller
{
    public function register($data)
    {
        $fullname = trim($data['fullname'] ?? '');
        $username = trim($data['username'] ?? '');
        $email = trim($data['email'] ?? '');
        $password = trim($data['password'] ?? '');

        if (empty($fullname)) {
            return 20001;
        }

        if (empty($username)) {
            return 20005;
        }

        if (empty($email)) {
            return 20006;
        }

        if (empty($password)) {
            return 20007;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 20002;
        }

        if (strlen(trim($password)) < 6) {
            return 20003;
        }
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $model = new Register_Model();
        return $model->UserRegister($fullname, $username, $email, $password_hash);
    }
}
