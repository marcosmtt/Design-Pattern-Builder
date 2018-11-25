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
public class Main {
    public static void main(String[] args) {
        
        PersonagemBuilder concrete = new PersonagemConcreteBuilder();
        PersonagemDirector director = new PersonagemDirector(concrete);
        
        director.makePersonagem();
        
        Personagem personagem = director.getPersonagem();
        
        System.out.println("--------- Personagem ---------");
        System.out.println("Nome: "+personagem.getNome());
        System.out.println("Espécie: "+personagem.getEspecie());
        System.out.println("Classe: "+personagem.getClasse());
    }
}
