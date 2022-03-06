<?php
include_once 'model/ContactModel.php';
class ContactController
{
    public function  __construct()
    {
        $this->ContactModel = new ContactModel;
    }


    public function viewManager()
    {
        $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
            case 'ajout':
                $this->includeView($view);
                break;

            case 'modification':
                $this->includeView($view);
                break;

            default:
                $contacts = $this->ContactModel->lister();
                $this->includeView();
                break;
        }

        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'add':
                if (isset($_POST['add'])) {
                    extract($_POST);
                    $this->ContactModel->inserer($nom, $dte, $regime, $sociale, $registre, $ninea, $web);
                }
                break;

            case 'supprimer':
                if ($action == 'supprimer') {
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $resultat = $this->ContactModel->supprimer($id);
                        if ($resultat) {
                            header("location:/index.php");
                        }
                    }
                }
                break;

            case 'modifier':
                if (isset($_POST['modif'])) {
                    extract($_POST);
                    $this->ContactModel->modifier($nom, $dte, $regime, $sociale, $registre, $ninea, $web, $id);
                }
                break;

            default:
                # code...
                break;
        }
    }

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
}
