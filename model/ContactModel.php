<?php
require_once 'DB.php';
class ContactModel
{

    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }



    public function inserer($nom, $dte, $regime, $sociale, $registre, $ninea, $web)
    {
        $queryPrepare = $this->db->ds->prepare("INSERT INTO contact(nom, dte, regime, sociale, registre, ninea, web) VALUES(?,?,?,?,?,?,?)");
        return $queryPrepare->execute(array($nom, $dte, $regime, $sociale, $registre, $ninea, $web));
    }

    public function modifier($nom, $dte, $regime, $sociale, $registre, $ninea, $web, $id)
    {
        $sql = $this->db->ds->prepare("UPDATE contact SET nom=?,dte=?,regime=? ,sociale=?,registre=?,ninea=?,web=? WHERE id=? ");
        return $sql->execute(array($nom, $dte, $regime, $sociale, $registre, $ninea, $web, $id));
    }

    public function supprimer($id)
    {
        $sql = $this->db->ds->prepare("DELETE FROM contact WHERE id=:idcontact");
        $sql->bindParam('idcontact', $id);
        return $sql->execute();
    }

    public function lister()
    {
        $query = $this->db->ds->prepare("SELECT * FROM contact ORDER BY id DESC");
        $query->execute();
        return $query->fetchAll();
    }

    public function findContactById($id)
    {
        $query = $this->db->ds->prepare("SELECT * FROM contact WHERE id=?");
        $query->execute(array($id));
        return $query->fetch();
    }
}
