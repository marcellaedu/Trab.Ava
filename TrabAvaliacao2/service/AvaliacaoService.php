<?php

require_once(__DIR__ . "/../model/Avaliacao.php");

class AvaliacaoService {

    public function validarDados(Avaliacao $avaliacao) {
        $erros = array();
        
        //Validar o nome
        if(! $avaliacao->getNomePessoa()) {
            array_push($erros, "Por favor, nos informe seu nome.");
        }

        //Validar o nome
        if(! $avaliacao->getNomeEntretenimento()) {
            array_push($erros, "Por favor, forneça o nome do entretenimento.");
        }


        //Validar data de publicação
        if(! $avaliacao->getDataPublicacao()) {
            array_push($erros, "Qual é a data que você esta fazendo essa publicação?");
        }

         //Validar genero
         if(! $avaliacao->getGenero()) {
            array_push($erros, "Poderia especificar o gênero da publicação?");
        }

         //Validar tipo
         if(! $avaliacao->getTipo()) {
            array_push($erros, "Poderia especificar o tipo da publicação?");
        }

         //Validar avaliacao
         if(! $avaliacao->getAva()) {
            array_push($erros, "Compartilhe sua avaliação ou opinião sobre o entretenimento. ");
        }

        

        return $erros;
    }

}
    