<?php
include_once __DIR__ . "/../model/Register_Model.php";


class Register_Conrroller
{
    public function register($data)
    {
        $fullname = trim($data['fullname'] ?? '');
        $username = trim($data['username'] ?? '');
        $email = trim($data['email'] ?? '');
        $password = trim($data['password'] ?? '');
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        if ($fullname === '' || $username === '' || $email === '' || $password === '') {
            return 20001;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 20002;
        }

        if (strlen($password_hash) < 6) {
            return 20003;
        }

        $model = new Register_Model();
        $result = $model->UserRegister($fullname, $username, $email, $password_hash);
    }
}
