
<?php


// include 'classes/Produto.php';
// include 'classes/Categoria.php';
// include 'classes/Usuario.php';
// include 'classes/Gestor.php';
// include 'classes/Cliente.php';
// include 'classes/config/Usuario.php';


include 'vendor/autoload.php';// uTILIZANDO COMPOSER

//Gerando PDF

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html ='';

for ($n = 0; $n < 10; $n++){
    $html .="Ó o pennte <br>";
}

$dompdf->loadHtml('<h1>Olá mundo, estou aprendendo PHP</h1>'.$html);

// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

 use Classes\Usuario as UsuarioClass;
// use Classes\Config\Usuario as UsuarioConfig;

 $us1 = new UsuarioClass();
// $us2 = new UsuarioConfig();

var_dump($us1);
//$us1 = new CLasses\Usuario;
//$us2 = new Classes\config\Usuario;

