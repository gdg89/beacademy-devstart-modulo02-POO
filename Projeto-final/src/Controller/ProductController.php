<?php
declare(strict_types=1);

namespace App\Controller;// rota do namespace

//Classe
class ProductController
{ 
    //metdos
    public function listAction()
    {
        include 'src/View/product/list.php';//incluindo rota da view - listar produto
    }

    public function addAction()
    {
        include 'src/View/product/add.php';// cadastrar produto
    }

    public function editAction()
    {
        include 'src/View/product/edit.php';// editar produto
    }

   
}