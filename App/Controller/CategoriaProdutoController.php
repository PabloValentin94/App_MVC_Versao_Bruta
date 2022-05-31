<?php

class CategoriaProdutoController
{

  public static function Index()
  {

      include "Model/CategoriaProdutoModel.php";

      $model = new CategoriaProdutoModel();

      $model->GetAllRows();

      include "View/Modules/Categoria_Produto/CategoriaProdutoListagem.php";

  }

  public static function Form()
  {

        include "Model/CategoriaProdutoModel.php";

        $model = new CategoriaProdutoModel();

        if(isset($_GET['id']))
        {

        $model = $model->GetById((int) $_GET['id']);

        }

        // var_dump($model);

        include "View/Modules/Categoria_Produto/CategoriaProdutoForm.php";

  }

  public static function Save()
  {

      include "Model/CategoriaProdutoModel.php";

      $model = new CategoriaProdutoModel();

      $model->id = $_POST["id"];
      $model->descricao = $_POST["descricao"];

      $model->Save();

      header("Location: /categoria_produto");

  }

  public static function Delete()
  {

    include "Model/CategoriaProdutoModel.php";

    $model = new CategoriaProdutoModel();

    $model->Delete((int) $_GET['id']);

    header("Location: /categoria_produto");

  }

}

?>