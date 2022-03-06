<?php

class Router
{
    public function includeView($page = "liste")
    {
        if ($page == "liste") {
            $contacts = $this->ContactModel->lister();
            include 'views/contact/' . $page . '.php';
        } else {
            if ($page == "modification" && isset($_GET[('id')])) {
                $contact = $this->ContactModel->findContactById($_GET['id']);
                include 'views/contact/' . $page . '.php';
            } else {
                include 'views/contact/' . $page . '.php';
            }
        }
    }



    public function routeManger()
    {
        if (isset($_SESSION['userLoginStatus'])) {
            return require_once('views/contact/liste.php');
        }
        if (isset($_GET['register'])) {
            return require_once('views/register.php');
        }
        if (isset($_GET['login'])) {
            return require_once('views/login.php');
        }

        return require_once('views/login.php');
    }
}
