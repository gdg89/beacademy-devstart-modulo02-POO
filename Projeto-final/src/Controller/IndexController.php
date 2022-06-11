<?php
declare (strict_types=1);

namespace App\Controler;
class IndexController
{
    //metodo
    public function indexAction(): void {
        echo 'Ola mundo, estou deno de uma action, dentro de um controller';
    }
}