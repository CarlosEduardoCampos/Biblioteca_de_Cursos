//Crie um programa para controle de filas de pessoas para os Correios.
//Seu programa deverá ter duas filas, uma para PAC e outra para Sedex.

//Quando chegar na fila, a pessoa deverá fornecer:
//O tipo de serviço desejado (1 - PAC ou 2 - Sedex);
//Seu nome;
//Seu endereço (CEP, Rua, Número, Cidade);
//Nome do Destinatário;
//Endereço do destinatário (CEP, Rua, Número, Cidade);
//OBS: A pessoa deve ser inserida na fila correspondente ao serviço desejado.

//O programa deve exibir opção para:
//Adicionar pessoas na fila;
//Chamar próximo da fila, informando a fila correspondente;
//Mostrar as filas;
//Sair
#include <iostream>
#include <queue>
#include <locale>
using namespace std;

struct endereco{
	string cep;
	string numero;
	string rua;
	string cidade;
};

struct pessoa{
	string nome;
	endereco localiza;
};

struct Cliente{
	pessoa cliente;
	pessoa destinatario;
};

/**
 * PARAMETROS
 * 0 = Cliente
 * 1 = Destinatário
 */
void setTipo(string dado,int tipo=0){
	if(tipo == 0)
	{
		cout << " Cliente "<<dado<<": ";
	}
	else{
		cout << " Destinatário "<<dado<<": ";
	}
}

/**
 * Retorna uma string para nome
 * PARAMETROS
 * tipo = 0 -> Cliente
 * tipo = 1 -> Destinatário
 */
string setNome(int tipo = 0){
	string nome;
	//
	setTipo("nome",tipo);
	cin >> nome;
	//
	return nome;
}

/**
 * Retorna uma string para CEP
 * PARAMETROS
 * tipo = 0 -> Cliente
 * tipo = 1 -> Destinatário
 */
string setCep(int tipo = 0){
	string cep;
	//
	setTipo("CEP da cidade",tipo);
	cin >> cep;
	//
	return cep;
}

/**
 * Retorna uma String para numero
 * PARAMETROS
 * tipo = 0 -> Cliente
 * tipo = 1 -> Destinatário
 */
string setNumero(int tipo = 0){
	string num;
	//
	setTipo("numero da casa",tipo);
	cin >> num;
	//
	return num;
}

/**
 * Retorna uma string para nome da rua
 * PARAMETROS
 * int tipo = 0 -> Cliente
 * int tipo = 1 -> Destinatário
 */
string setRua(int tipo = 0){
	string nome;
	//
	setTipo("nome da rua",tipo);
	cin >> nome;
	//
	return nome;
}

/**
 * Retorna uma string para nome da cidade
 * PARAMETROS
 * int tipo = 0 -> Cliente
 * int tipo = 1 -> Destinatário
 */
string setCidade(int tipo = 0){
	string nome;
	//
	setTipo("nome da cidade",tipo);
	cin >> nome;
	//
	return nome;
}

/**
 * Cadastra todos os dados da struct pessoa
 * PARAMETROS
 * strunc pessoa{
 *	string nome;
 * 	endereco localiza;
 * };
 * strunc endereco{
 * 	string cep;
 *	string numero;
 *	string rua;
 *	string cidade;
 * };
 * int tipo = 0 -> Cliente
 * int tipo = 1 -> Destinatário
 * 
 * retorna uma pessoa
 */
pessoa cadastraPessoa(pessoa Pessoa, int tipo=0)
{
	Pessoa.nome = setNome(tipo);
	Pessoa.localiza.cep = setCep(tipo);
	Pessoa.localiza.numero = setNumero(tipo);
	Pessoa.localiza.rua = setRua(tipo);
	Pessoa.localiza.cidade = setCidade(tipo);
	
	return Pessoa;
}

/**
 * Cadastra um cliente que guarda iformações 
 * de duas pessoa (cliente e destinatário)
 * 
 * retorna um Cliente
 */
Cliente cadastraCliente(){
	Cliente Usuario;
	pessoa Pessoa;
	
	Usuario.cliente=cadastraPessoa(Pessoa);
	Usuario.destinatario=cadastraPessoa(Pessoa,1);
	
	return Usuario;
}

int main()
{
	setlocale(LC_ALL,"portuguese");
	//
	queue<Cliente> filaClientes;
	//
	filaClientes.push(cadastraCliente());
	//
	if(filaClientes.empty())
	{
		cout << "\nVazia\n" ;
	}else{
		cout << "\nNão vazia\n";
	}
	//
	return 0;
}


