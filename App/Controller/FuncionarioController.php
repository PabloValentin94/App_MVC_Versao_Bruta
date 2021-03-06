<?php

class FuncionarioController
{

  public static function Index()
  {

      include "Model/FuncionarioModel.php";

      $model = new FuncionarioModel();

      $model->GetAllRows();

      include "View/Modules/Funcionario/FuncionarioListagem.php";

  }

  public static function Form()
  {

      include "Model/FuncionarioModel.php";

      $model = new FuncionarioModel();

      if(isset($_GET['id']))
      {

      $model = $model->GetById((int) $_GET['id']);

      }

      // var_dump($model);

      include "View/Modules/Funcionario/FuncionarioForm.php";

  }

  public static function Save()
  {

      include "Model/FuncionarioModel.php";

      $model = new FuncionarioModel();

      $model->id = $_POST["id"];
      $model->nome = $_POST["nome"];
      $model->cadastro = $_POST["cadastro"];
      $model->cpf = $_POST["cpf"];

      $model->Save();

      header("Location: /funcionario");

  }

  public static function Delete()
  {

    include "Model/FuncionarioModel.php";

    $model = new FuncionarioModel();

    $model->Delete((int) $_GET['id']);

    header("Location: /funcionario");

  }

}

?>