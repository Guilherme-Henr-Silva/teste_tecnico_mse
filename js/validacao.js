$(document).ready(function(){

    $("#formFornecedor").submit(function(e){

        let cnpj = $("#cnpj").val();

        if(cnpj.length < 14){
            alert("CNPJ inválido");
            e.preventDefault();
        }

    });

});