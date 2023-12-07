const baseUrl = document.getElementById('hddBaseUrl').value;

/*
const inputNomePessoa = document.getElementById('txtNomePessoa').value;
const inputEntretenimento = document.getElementById('txtnomeEntretenimento').value;
const inputData = document.getElementById('txtDataPublicacao').value;
const inputAvaliacao = document.getElementById('txtAvaliacao').value;
*/

const inputTipo = document.getElementById('txtTipo');
const inputGenero = document.getElementById('txtGenero');

const divErros = document.getElementById('divMsgErro');

buscarGenero();
function buscarGenero(){
    while(inputGenero.children.length > 0) {
        inputGenero.children[0].remove();
    }
    criarOptionGenero ("Selecione", "", "--");

    var idSelecionado = inputGenero.getAttribute ("idSelecionado");

    var xhttp = new XMLHttpRequest();

    var url = baseUrl + "/api/listarTipo.php" + "?idTipo=" + inputTipo.value;
    xhttp.open("GET", url);

    //Funcão de retorno executada após a 
    //resposta do servidor chegar no cliente
    xhttp.onload = function() {
        //Resposta da requisição
        console.log("Resposta recebida do servidor!");

        var json = xhttp.responseText;
        console.log(json);

        
        var genero = JSON.parse(json);

        genero.forEach(genero => {
            //Criar as opções para o select (tags <option>)
            //console.log(genero.codigo);
            criarOptionGenero(genero.genero, genero.id, idSelecionado);
        });
        
    }
    xhttp.send();
}

function criarOptionGenero(desc, valor, valorSelecionado) {
    var option = document.createElement("option");
    option.innerHTML = desc;
    option.setAttribute("value" , valor);
    
    if(valor == valorSelecionado)
        option.selected = true;
    
    inputGenero.appendChild(option);
}

function mostrarDescricao(idDescricao) {
    var divDescricao = document.getElementById(idDescricao);
    if (divDescricao.style.display === 'none') {
        divDescricao.style.display = 'block'; // Mostra a descrição correspondente ao botão clicado
    } else {
        divDescricao.style.display = 'none'; // Oculta a descrição correspondente ao botão clicado
    }
}


