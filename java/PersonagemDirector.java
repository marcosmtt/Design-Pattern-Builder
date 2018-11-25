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
public class PersonagemDirector {
    
    private PersonagemBuilder personagemBuilder;

    public PersonagemDirector(PersonagemBuilder personagemBuilder) {
        this.personagemBuilder = personagemBuilder;
        
    }
   
    public Personagem getPersonagem(){
        return this.personagemBuilder.getPersonagem();
    }
    
    public void makePersonagem(){
        this.personagemBuilder.buildClasse();
        this.personagemBuilder.buildEspecie();
        this.personagemBuilder.buildNome();
    }
    
    
}
