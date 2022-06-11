<?php
declare (strict_types=1);

namespace App\Controller;// rota do namespace


//classe
class IndexController
{
    //metodo
    public function indexAction(): void {
        include 'src/View/index/index.php';//incluindo rota da view -pagina inicial - accion en el sistema.
    }

    public function loginAction():void {
        include 'src/View/index/login.php';// pagina login
    }
}