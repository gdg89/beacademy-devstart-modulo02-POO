<?php

class Professor{
    private string $nome;
    private string $cpf;
    private float $salario;

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

    public function getCpf(): string
    {
        $this->cpf;
    }

    public function setCpf($novoCpf): string
    {
        
        $this->cpf=$novoCpf;
    }

    public function getSalario(): float
    {
        $this->salario;
    }
    public function setSalario($novoSalario): void
    {
        $this->salario = $novoSalario;
   
    }
}
