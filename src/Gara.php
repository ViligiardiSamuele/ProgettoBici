<?php

class Gara extends DBObject
{
    protected int $id_gara;
    protected string $nome;
    protected int $max_concorrenti;
    protected bool $chiusa;

    public function __construct($id_gara, $nome, $max_concorrenti, $chiusa)
    {
        $this->table = 'Gare';
        $this->id_gara = $id_gara;
        $this->nome = $nome;
        $this->max_concorrenti = $max_concorrenti;
        $this->chiusa = $chiusa;
    }
    
    public function getId_gara()
    {
        return $this->id_gara;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getMax_concorrenti()
    {
        return $this->max_concorrenti;
    }

    public function getChiusa()
    {
        return $this->chiusa;
    }
}
