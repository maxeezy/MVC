<?php
function proverka($que)
{
    $sql = (new Connection())->createSql();
    if ($result = $sql->query($que)) {
        $row = $result->num_rows;
    }
    return $row;
}


class  Model_reg extends model{
    public $mail;
    public $login;
    public $password;
    function registrate(string $login,string $mail, string $password){
        $sql = (new Connection())->createSql();
        $passwordTok = password_hash($password,PASSWORD_BCRYPT);
        $sql->query("INSERT INTO `users` (`id`, `login`, `mail`, `password`) VALUES (NULL, '$login', '$mail', '$passwordTok')");
    }

    function check_err(){
        $err= array();
        if (proverka("SELECT * FROM `users` WHERE `login`=" . "\"" . $this->login . "\"")>0){
            array_push($err,"<div style='color: red'>Пользователь с таким логином уже существует</div>");
        }
        if (proverka("SELECT * FROM `users` WHERE `mail`=" . "\"" . $this->mail . "\"")>0){
            array_push($err,"<div style='color: red'>Пользователь с таким мэйлом уже существует</div>");
        }
        if(preg_match('/@/',$this->mail)!=1){
            array_push($err,"<div style='color: red'>Отсутствует @ в поле мэйла</div>");
        }
        if(strlen($this->mail)<6||strlen($this->login)<6||strlen($this->password)<6||strlen($this->mail)>64||strlen($this->login)>64||strlen($this->password)>64){
            array_push($err,"<div style='color: red'>Поля должны содержать от 6 до 64 знаков</div>");
        }
        if (empty($err)){
            $this->registrate($this->login,$this->mail,$this->password);
             $good = "<div style='color: green'>Вы успешно зарегистрированы</div>";
             return array($good);
        }
        else{
            return $err;
        }
    }
}