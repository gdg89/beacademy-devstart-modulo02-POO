<?php
declare (strict_types=1);

namespace App\Controller;// rota do namespace


//classe
class IndexController extends AbstractController
{
    //metodo
    public function indexAction(): void {
        // include 'src/View/index/index.php';//incluindo rota da view -pagina inicial - accion en el sistema.
        parent::render('index/index');
    }

    public function loginAction():void {
        //include 'src/View/index/login.php';// pagina login
        parent::render('index/login');
    }
}