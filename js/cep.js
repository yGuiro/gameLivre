const limpaForm = (endereco) => {
    document.getElementById('rua').value = " ";
    document.getElementById('cidade').value = " ";
    document.getElementById('uf').value = " ";
}

const preencherForm = (endereco) => {
    document.getElementById('rua').value = endereco.logradouro;
    document.getElementById('cidade').value = endereco.localidade;
    document.getElementById('uf').value = endereco.uf;
}

const eNumero = (numero) => /^[0-9]+$/.test(numero);

const cepValido = (cep) => cep.length == 8 && eNumero(cep);

const pesquisarCep = async()=> {
    limpaForm()

    const cep = document.getElementById('cep').value.replace("-", " ");
    const url = `http://viacep.com.br/ws/${cep}/json/`;
    if (cepValido(cep)){
        const dados = await fetch(url)
        const endereco = await dados.json()
        if (endereco.hasOwnProperty('erro')) {
            alert ("CEP não encontrado!!!")
        }else {
            preencherForm(endereco);
        }
    }else {
        alert ("CEP invalido!!!")
    }
}

document.getElementById('cep').addEventListener('focusout', pesquisarCep)