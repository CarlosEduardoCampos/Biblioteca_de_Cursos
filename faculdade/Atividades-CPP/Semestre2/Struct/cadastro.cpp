# include <iostream>
# include <stdlib.h>
# include <locale>
using namespace std;
// dados referentes ao entereço da pessoa 
struct endereco{
	string cyti;
	string rua;
	string estado;
	char numero[3];
};
// dados referentes a data de nacimento da pessoa
struct data{
	int dia;
	int mes;
	int ano;
};
// dados de cadastro de pessoas
struct pessoa{
	string nome;
	data naci;
	endereco morada;
};
//
int main()
{
	setlocale(LC_ALL,"portuguese");
	// variavvel que recebe pessoa.
	pessoa pe_um;
	// recebendo nome 
	cout <<" Nome: ";
	cin >> pe_um.nome;
	// recebendo dados ref a nacimento 
	cout <<" Nacido em :\n";
	do{
		// recebendo dia
		cout <<"\t Dia: ";
		cin >> pe_um.naci.dia;
		//
	}while(pe_um.naci.dia < 1 || pe_um.naci.dia > 31);//teste logico dia valido
	//
	do{
		// recebendo mes
		cout <<"\t Mês: ";
		cin >> pe_um.naci.mes;
		//
	}while(pe_um.naci.mes < 1 || pe_um.naci.mes > 12);//teste logico dia valido
	//
	int ano_atual = 2020;
	int muito_vel = ano_atual - 90;
	do{
		// recebendo ano
		cout <<"\t Ano: ";
		cin >> pe_um.naci.ano;
		//
	}while(pe_um.naci.ano < muito_vel || pe_um.naci.ano > ano_atual);//teste logico ano valido
	// area para dados de entereço da  pessoa
	cout <<"  Mora em: \n";
	// rua
	cout <<"\t Rua: ";
	cin >> pe_um.morada.rua;
	// numero da casa
	cout <<"\t Numero: ";
	cin >> pe_um.morada.numero;
	// cidade
	cout <<"\t Cidade: ";
	cin >> pe_um.morada.cyti;
	// estado
	cout <<"\t Estado: ";
	cin >> pe_um.morada.estado;
	// amostragem de dados recebidos
	cout <<"\n\n Foi cadastrado:\n\n";
	cout <<" Nome: "<<pe_um.nome<<"\n";
	cout <<" nacido em : "<<pe_um.naci.dia<<"/"<<pe_um.naci.mes<<"/"<<pe_um.naci.ano<<"\n";
	cout <<" Mora em:\n\t Rua "<<pe_um.morada.rua<<"\t Nº "<<pe_um.morada.numero;
	cout <<"\n\t Cidade: "<<pe_um.morada.cyti<<"\t Estado: "<<pe_um.morada.estado<<"\n\n";
	system("pause");
}

