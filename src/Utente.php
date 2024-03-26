<?php

class Utente extends DBObject
{
    protected int $id_utente;
    protected string $nome;
    protected string $cognome;
    protected int $id_credenziali;

    public function __construct($id_utente, $nome, $cognome, $id_credenziali)
    {
        parent::__construct('Utente'); //table
        $this->id_utente = $id_utente;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->id_credenziali = $id_credenziali;
    }

    public function getID_Utente()
    {
        return $this->id_utente;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCognome()
    {
        return $this->cognome;
    }

    public function getID_Credeniali()
    {
        return $this->id_credenziali;
    }
}
