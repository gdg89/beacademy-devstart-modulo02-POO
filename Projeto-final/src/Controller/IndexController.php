<?php
declare (strict_types=1);

namespace App\Controller;
class IndexController
{
    //metodo
    public function indexAction(): void {
        include 'src/View/teste.php';//incluindo view
    }
}