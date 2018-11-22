<?php

class Personagem {

    private $classe;
    private $especie;
    private $nome;

    public function getClasse($classe)
    {
        if (property_exists($this, $classe))
        {
            return $this->classe;
        }
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    public function getEspecie($especie)
    {
        if (property_exists($this, $especie))
        {
            return $this->especie;
        }
    }

    public function setEspecie($especie)
    {
        $this->especie = $especie;
    }

    public function getNome($nome)
    {
        if (property_exists($this, $nome))
        {
            return $this->nome;
        }
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}