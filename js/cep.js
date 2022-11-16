const limpaForm = (endereco) => {
  document.getElementById("rua").value = " ";
  document.getElementById("cidade").value = " ";
  document.getElementById("uf").value = " ";
};

const preencherForm = (endereco) => {
  document.getElementById("rua").value = endereco.logradouro;
  document.getElementById("cidade").value = endereco.localidade;
  document.getElementById("uf").value = endereco.uf;
};

const eNumero = (numero) => /^[0-9]+$/.test(numero);

const cepValido = (cep) => cep.length == 8 && eNumero(cep);

const pesquisarCep = async () => {
    limpaForm();
    //APRENDA REGEX
    const cep = $("#cep").val().replace("-", "");
    const url = `http://viacep.com.br/ws/${cep}/json`;
    cepValido(cep) ? 
        $.ajax({
            type: "GET",
            url: url,
            dataType: "JSON",
        }).done(function (res) {
            if(res.erro){
                Swal.fire('warning','CEP Invalido!!!','Por favor, verifique o CEP.')
            }else{
                preencherForm(res);
            }
        })
    : 
    Swal.fire('error','CEP Invalido!!!','Por favor, verifique o tamanho CEP.')

};

document.getElementById("cep").addEventListener("focusout", pesquisarCep);


// if (cepValido(cep)){
//     const dados = await fetch(url)
//     const endereco = await dados.json()
//     if (endereco.hasOwnProperty('erro')) {
//         alert ("CEP não encontrado!!!")
//     }else {
//         preencherForm(endereco);
//     }
// }else {
//     alert ("CEP invalido!!!")
// }