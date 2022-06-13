    <?php
    
    include 'vendor/autoload.php';

    use App\Controller\IndexController;
    use App\Controller\ProductController;
    use App\Controller\CategoryController;
    use App\Controller\ErrorController;

    $url = explode('?',$_SERVER['REQUEST_URI']) [0];//recapitulando url
    
    //Condicional
    if ($url === '/'){
        $i = new IndexController();//instanciando indexControler.
        $i->indexAction();
    }elseif ($url === '/login'){
         $i = new IndexController();//instanciando indexControler.
         $i->loginAction();
    }elseif($url === '/produtos'){
        $p = new ProductController();
        $p->listAction();
    }else {
        $e = new ErrorController();
        $e -> notFoundAction();
    }


   
   
   

    
    
   


