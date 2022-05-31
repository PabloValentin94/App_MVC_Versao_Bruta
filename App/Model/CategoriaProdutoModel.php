<?php

class CategoriaProdutoModel
{

  public $id, $descricao;

  public $rows;

  public function Save()
  {

    include "DAO/CategoriaProdutoDAO.php";

    $dao = new CategoriaProdutoDAO();

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

    include "DAO/CategoriaProdutoDAO.php";

    $dao = new CategoriaProdutoDAO();

    $dao->Delete($id);

  }

  public function GetAllRows()
  {

    include "DAO/CategoriaProdutoDAO.php";

    $dao = new CategoriaProdutoDAO();

    $this->rows = $dao->Select();

  }

  public function GetById(int $id)
  {

    include "DAO/CategoriaProdutoDAO.php";

    $dao = new CategoriaProdutoDAO();

    $obj = $dao->SelectById($id);

    return ($obj) ? $obj : new CategoriaProdutoDAO();

    /* if($obj)
    {

      return $obj;

    }

    else
    {

      return new CategoriaProdutoModel();

    } */

  }

}

?>