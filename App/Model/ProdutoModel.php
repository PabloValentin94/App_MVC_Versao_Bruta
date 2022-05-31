<?php

class ProdutoModel
{

  public $id, $nome, $cadastro;

  public $rows;

  public function Save()
  {

    include "DAO/ProdutoDAO.php";

    $dao = new ProdutoDAO();

    if(empty($this->id))
    {

      $dao->Insert($this);

    }

    else
    {

      $dao->Update($this);

    }

  }

  public function Delete(int $id)
  {

    include "DAO/ProdutoDAO.php";

    $dao = new ProdutoDAO();

    $dao->Delete($id);

  }

  public function GetAllRows()
  {

    include "DAO/ProdutoDAO.php";

    $dao = new ProdutoDAO();

    $this->rows = $dao->Select();

  }

  public function GetById(int $id)
  {

    include "DAO/ProdutoDAO.php";

    $dao = new ProdutoDAO();

    $obj = $dao->SelectById($id);

    return ($obj) ? $obj : new ProdutoModel();

    /* if($obj)
    {

      return $obj;

    }

    else
    {

      return new ProdutoModel();

    } */

  }

}

?>