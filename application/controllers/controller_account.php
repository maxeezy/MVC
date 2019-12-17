<?php

class Controller_account extends controller
{
    function action_index()
    {
        $this->view->generate("account_view.php", 'template_view.php');
    }


    function action_registration()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model = new Model_reg();
            if (isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['password'])) {
                $this->model->login = $_POST['login'];
                $this->model->mail = $_POST['mail'];
                $this->model->password = $_POST['password'];
            }

            $data = $this->model->check_err();
            $this->view->generate('registration_view.php', 'template_view.php', $data);
        } else {
            $this->view->generate('registration_view.php', 'template_view.php');
        }

    }
}