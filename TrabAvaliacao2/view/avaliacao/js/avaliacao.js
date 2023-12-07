const baseUrl = document.getElementById('hddBaseUrl').value;
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




