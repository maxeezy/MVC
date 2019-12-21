<?php

class  Model_reg extends model
{
    public $mail;
    public $login;
    public $password;
    private $errors = [];


    public function gerErrors()
    {
        return $this->errors;
    }

    function registrate()
    {
        $sql = (new Connection())->createSql();
        $passwordTok = password_hash($this->password, PASSWORD_BCRYPT);
        $sql->query("INSERT INTO `users` (`id`, `login`, `mail`, `password`) VALUES (NULL, '$this->login', '$this->mail', '$passwordTok')");
    }

    function check_err()
    {
        $sql = new Connection();

        if ($sql->proverka("SELECT * FROM `users` WHERE `login`=" . "\"" . $this->login . "\"") > 0) {
            $this->errors['login'][] = "Пользователь с таким логином уже существует";
        }
        if ($sql->proverka("SELECT * FROM `users` WHERE `mail`=" . "\"" . $this->mail . "\"") > 0) {
            $this->errors['mail'][] = "Пользователь с таким мэйлом уже существует";
        }
        if (preg_match('/@/', $this->mail) != 1) {
            $this->errors['mail'][] = "Отсутствует @ в поле мэйла";
        }
        if (strlen($this->password) < 6 || strlen($this->password) > 64) {
            $this->errors['password'][] = "Поле пароль должно содержать от 6 до 64 знаков";
        }
        if (strlen($this->login) < 6 || strlen($this->login) > 64) {
            $this->errors['login'][] = "Поле логин должно содержать от 6 до 64 знаков";
        }
        if (strlen($this->mail) < 6 || strlen($this->mail) > 64) {
            $this->errors['mail'][] = "Поле мэйл должно содержать от 6 до 64 знаков";
        }
        return $this->errors;
    }

    function done()
    {
        if (empty($this->check_err())) {
            $this->registrate();
            return true;
        }

        return false;
    }

}