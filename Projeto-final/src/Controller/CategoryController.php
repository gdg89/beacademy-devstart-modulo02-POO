<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AbstractController;


class CategoryController extends AbstractController
{
  public function listAction(): void{
    parent::render('Category/list');
  }  

  public function addAction(): void{
    parent::render('Category/add');
  }

  public function editAction(): void{
    parent::render('Category/edit');
  }
}