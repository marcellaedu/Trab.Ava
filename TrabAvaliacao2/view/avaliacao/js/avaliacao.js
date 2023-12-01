const baseUrl = document.getElementById('hddBaseUrl').value;

const inputNomePessoa = document.getElementById('txtNomePessoa').value;
const inputEntretenimento = document.getElementById('txtnomeEntretenimento').value;
const inputData = document.getElementById('txtDataPublicacao').value;
const inputAvaliacao = document.getElementById('txtAvaliacao').value;

const inputTipo = document.getElementById('txtTipo').value;
const inputGenero = document.getElementById('txtGenero').value;

const divErros = document.getElementById('divMsgErro');

    function inserirTurma() {
        //Estrutura FormData para enviar os parâmetros
        //no corpo da requisição do tipo POST
        var dados = new FormData();
        dados.append("nomePessoA", inputNomePessoa.value);
        dados.append("entretenimento", inputEntretenimento.value);
        dados.append("dataPublicacao", inputData.value);
        dados.append("avaliacao", inputAvaliacao.value);

        dados.append("idTipo", inputTipo.value);
        dados.append("idGenero", inputGenero.value);
    
        //Requisição
        var xhttp = new XMLHttpRequest();
    
        var url = baseUrl + "/api/inserirAvaliacao.php";
    
        xhttp.open("POST", url);
        xhttp.onload = function() {
            var resposta = xhttp.responseText;
            //console.log(resposta);
            
            if(resposta) {
                divErros.innerHTML = resposta;
                divErros.style.display = "block";
            } else {
                //Redirecionar para a listagem
                window.location = "listar.php";
            }
        }
        xhttp.send(dados);
    }
