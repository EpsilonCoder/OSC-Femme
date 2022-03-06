<?php

class HomeController
{
    public $model;

    public function indexAction()
    {
        if (isset($_GET['logout'])) {
            unset($_SESSION['userLogStatus']);
        }
        if (isset($_POST['LoginSubmit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $checkUserLogin = $this->model->CheckUserLogin($username, md5($password));

            if ($checkUserLogin == 1) {
                $_SESSION['userLogStatus'] = 1;
            }
        }

        if (isset($_POST['registerSubmit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->model->UserRegister($username, md5($password));
            $_SESSION['userLogInStatus'] = 1;
        }
        $this->routeManager();
    }


    public function routeManager()
    {
        if (isset($_SESSION['userLogStatus'])) {
            header('location:index.php?');
            return require_once 'views/contact/liste.php';
        }

        if (isset($_GET['register'])) {
            return require_once 'views/register.php';
        }

        if (isset($_GET['login']) || isset($_GET['logout'])) {
            return require_once 'views/login.php';
        }

        return require_once('views/login.php');
    }
}
