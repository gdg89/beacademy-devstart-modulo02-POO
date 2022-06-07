<?php
declare(strict_types=1);

include 'Curso.php';
include 'Professor.php';
include 'Disciplina.php';


//curso
$curso1 = new Curso();
    $curso1 -> setNome('Secrtariado');
    $curso1 -> setCargaHoraria(320) ;
    $curso1 -> setDisciplinas('Liderança e Negociação','Técnicas Secretariais','Matemática e Economia');


//disciplina
$displina1 = new Disciplina();
    $displina1->setNome('Liderança e Negociação') ;
    $displina1-> setCargaHoraria(60);
    $displina1-> setPreRequisitos('Ensino medio');

//professor

$professor1 = new Professor();
    $professor1 -> setNome('Teodora Picolé') ;
    $professor1 -> setCurso('Secrtariado') ;
    $professor1 -> setDisciplina( 'Liderança e Negociação') ;