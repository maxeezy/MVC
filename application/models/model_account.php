<?php



class  Model_reg extends model{
    public $mail;
    public $login;
    public $password;
    function registrate(){
        $sql = (new Connection())->createSql();
        $passwordTok = password_hash($this->password,PASSWORD_BCRYPT);
        $sql->query("INSERT INTO `users` (`id`, `login`, `mail`, `password`) VALUES (NULL, '$this->login', '$this->mail', '$passwordTok')");
    }

    function check_err(){
        $sql = new Connection();
        $err= array();

        if ($sql->proverka("SELECT * FROM `users` WHERE `login`=" . "\"" . $this->login . "\"")>0){
            array_push($err,"Пользователь с таким логином уже существует");
        }
        if ($sql->proverka("SELECT * FROM `users` WHERE `mail`=" . "\"" . $this->mail . "\"")>0){
            array_push($err,"Пользователь с таким мэйлом уже существует");
        }
        if(preg_match('/@/',$this->mail)!=1){
            array_push($err,"Отсутствует @ в поле мэйла");
        }
        if(strlen($this->password)<6 || strlen($this->password)>64){
            array_push($err,"Поле пароль должно содержать от 6 до 64 знаков");
        }
        if(strlen($this->login)<6 || strlen($this->login)>64){
            array_push($err,"Поле логин должно содержать от 6 до 64 знаков");
        }
        if(strlen($this->mail)<6 || strlen($this->mail)>64){
            array_push($err,"Поле мэйл должно содержать от 6 до 64 знаков");
        }
        return $err;
    }
    function done(){
        $err = $this->check_err();
        if (empty($err)){
            $this->registrate();
            $good = "Вы успешно зарегистрированы";
            return array($good);
        }
        else{
            return $err;
        }
    }

}