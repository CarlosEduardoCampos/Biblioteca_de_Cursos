function executar(){
    /* criação de variaveis*/
    var texto = document.getElementById('barra_p').value;// Titulo pesquisado pelos usuario
    var lista = document.getElementById('historico');// listas de titulos pesquisados
    var adicionar = true;// testador logico

    var opt = document.createElement('option');// criando novo elemento na lista  de titulos

    for( i = 0; i < lista.options.length; i++ )// varredura de lista em busca de titulo
    {
        if( texto == lista.options[i].value ) // teste de titulo
        {
            adicionar = false;
        }
        else{
            if( adicionar == true )// adisão de mais um titulo a lista
            {
                opt.value = texto;
                lista.appendChild(opt);
            }
        }
    }
}