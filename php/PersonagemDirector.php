<?php

use PersonagemBuilder;

class PersonagemDirector{

    private $personagemBuilder;

    public function __construct(PersonagemBuilder $personagemBuilder)
    {
        $this->personagemBuilder = $personagemBuilder;
    }

    public function getPersonagem()
    {
        return $this->personagemBuilder->getPersonagem();
    }

    public function makePersonagem()
    {
            $this->personagemBuilder->buildClasse();
            $this->personagemBuilder->buildEspecie();
            $this->personagemBuilder->buildNome();
    }
}