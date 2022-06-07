<?php
//Tipos
include 'Curso.php';
include 'Disciplina.php';
include 'Professor.php';

$p1 = new Professor();
$p1-> setNome('Giuliano');
$p1->setCpf('80156498725');
$p1->setSalario(4000);

var_dump($p1);