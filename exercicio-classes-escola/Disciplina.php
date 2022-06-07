<?php

class Disciplina{
    private $nome;
    private $cargaHoraria;
    private $preRequisito;

    //metodos get/set
    
    public function getNome(): string
    {
        $this->nome; 
    }

    public function setNome($novoNome): void
    {
        if (strlen( $novoNome) < 3){
            die('Ops,nome precisa ter 3 carateres no minimo');
        };
        $this ->nome = $novoNome;
    }

    public function getCargaHoraria(): int
    {
        $this->cargaHoraria;
    }

    public function setCargaHoraria($novaCargaHoraria): void
    {
        
        $this->cargaHoraria=$novaCargaHoraria;
    }

    public function getDisciplinas(): string
    {
        $this->disciplinas;
    }
    public function setDisciplinaso($novaDisciplina): void
    {
        $this->disciplinas = $novadisciplina;
    }

}