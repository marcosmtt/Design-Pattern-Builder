<?php

class App{

    public function run()
    {
        $personagemBuilder = new PersonagemConcreteBuilder();
        
        $personagemDirector = new PersonagemDirector(
                $personagemBuilder
        );
        
        $personagemDirector->makePersonagem();
        
        $cacador = $personagemDirector->getPersonagem();
        
        print("Guardião");

        print("Nome ". $cacador->getNome());
        print("Classe ". $cacador->getClasse());
        print("Espécie ". $cacador->getEspecie());
    }
}