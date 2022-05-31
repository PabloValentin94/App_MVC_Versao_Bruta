<?php

class FuncionarioModel
{

  public $id, $nome, $cadastro, $cpf;

  public $rows;

  public function Save()
  {

    include "DAO/FuncionarioDAO.php";

    $dao = new FuncionarioDAO();

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

    include "DAO/FuncionarioDAO.php";

    $dao = new FuncionarioDAO();

    $dao->Delete($id);

  }

  public function GetAllRows()
  {

    include "DAO/FuncionarioDAO.php";

    $dao = new FuncionarioDAO();

    $this->rows = $dao->Select();

  }

  public function GetById(int $id)
  {

    include "DAO/FuncionarioDAO.php";

    $dao = new FuncionarioDAO();

    $obj = $dao->SelectById($id);

    return ($obj) ? $obj : new FuncionarioDAO();

    /* if($obj)
    {

      return $obj;

    }

    else
    {

      return new FuncionarioModel();

    } */

  }

}

?>