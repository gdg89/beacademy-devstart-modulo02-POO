<?php
declare(strict_types=1);

namespace App\Controller;// rota do namespace

//Classe
class ProductController extends AbstractController
{ 
    //metdos
    public function listAction()
    {
        //include 'src/View/product/list.php';//incluindo rota da view - listar produto
        parent::render('product/list');
    }

    public function addAction()
    {
        //include 'src/View/product/add.php';// cadastrar produto
        parent::render('product/add');
    }

    public function editAction()
    {
        //include 'src/View/product/edit.php';// editar produto
        parent::render('product/edit');
    }

   
}