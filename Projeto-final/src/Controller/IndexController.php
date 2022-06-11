<?php
declare (strict_types=1);

namespace App\Controller;
class IndexController
{
    //metodo
    public function indexAction(): void {
        echo 'Ola mundo, estou deno de uma action, dentro de um controller';
    }
}