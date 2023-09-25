<?

require_once(__DIR__ . "/../model/Avaliacao.php");

class AvaliacaoService {

    public function validarDados(Avaliacao $avaliacao) {
        $erros = array();
        
        //Validar o nome
        if(! $avaliacao->getNomePessoa()) {
            array_push($erros, "Informe o nome!");
        }

        //Validar o nome
        if(! $avaliacao->getNomeEntretenimento()) {
            array_push($erros, "Informe o nome do entretenimento!");
        }


        //Validar data de publicação
        if(! $avaliacao->getDataPublicacao()) {
            array_push($erros, "Informe a data de publicação!");
        }

         //Validar genero
         if(! $avaliacao->getGenero()) {
            array_push($erros, "Informe o genero da publicação!");
        }

         //Validar tipo
         if(! $avaliacao->getTipo()) {
            array_push($erros, "Informe o tipo da publicação!");
        }

         //Validar avaliacao
         if(! $avaliacao->getAva()) {
            array_push($erros, "Escreva a avaliacao do entretenimento! ");
        }

        

        return $erros;
    }

}
    
