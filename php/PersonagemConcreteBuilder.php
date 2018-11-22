<?php

class PersonagemConcreteBuilder implements PersonagemBuilder{

    private $personagem;

    public function __construct()
    {
        $this->personagem = new Personagem();
    }

    public function buildClasse()
    {
        $this->personagem->setClasse("Caçador");
    }

    public function buildEspecie()
    {
        $this->personagem->setEspecie("Desperto");
    }

    public function buildNome()
    {
        $this->personagem->setNome("DeathlKaileena");
    }

    public function getPersonagem()
    {
        return $this->personagem;
    }
}