    <?php
    
    include 'vendor/autoload.php';

    use App\Controller\IndexController;

    $c = new IndexController();//instanciando indexControler.
    $c->indexAction();

