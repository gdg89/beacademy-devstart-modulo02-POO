<?php
declare(strict_types=1);

namespace App\Controller;

class ErroController extends AbstractController
{
    public function notFoundAction(): variant_mod
    {
        parent::render('error/notFound');
    }
}