<?php

class Controller_account extends controller
{
    function action_index()
    {
        $this->view->generate("account_view.php", 'template_view.php');
    }


    function action_registration()
    {
        $this->model = new Model_reg();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['password'])) {
                $this->model->login = $_POST['login'];
                $this->model->mail = $_POST['mail'];
                $this->model->password = $_POST['password'];
            }
            $this->model->done();
        }

        $this->view->generate('registration_view.php', 'template_view.php', ['model' => $this->model]);
    }

    public function getPost($name)
    {
        return isset($_POST[$name]) ? $_POST[$name] : null;
    }
}