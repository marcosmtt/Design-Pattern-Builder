/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package personagem;

/**
 *
 * @author User
 */
public class PersonagemConcreteBuilder implements PersonagemBuilder {
    
    private Personagem personagem;

    public PersonagemConcreteBuilder() {
        this.personagem = new Personagem();
    }
    
    
    @Override
    public void buildClasse() {
        personagem.setClasse("Caçador");
    }

    @Override
    public void buildEspecie() {
        personagem.setEspecie("Exo");
    }

    @Override
    public void buildNome() {
        personagem.setNome("Cayde-6");
    }

    @Override
    public Personagem getPersonagem() {
        return personagem;
    }
    
}
