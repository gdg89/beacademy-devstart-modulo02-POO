<?php
declare(strict_types=1);

namespace App\Controller;// rota do namespace
use App\Controller\AbstractController;

//Classe
class ProductController extends AbstractController
{ 
    //metdos
    public function listAction(): void
    {
        //include 'src/View/product/list.php';//incluindo rota da view - listar produto
        parent::render('product/list');
    }

    public function addAction(): void
    {
        //include 'src/View/product/add.php';// cadastrar produto
        parent::render('product/add');
    }

    public function editAction(): void
    {
        //include 'src/View/product/edit.php';// editar produto
        parent::render('product/edit');
    }

   
}