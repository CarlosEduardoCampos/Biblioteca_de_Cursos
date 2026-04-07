# include <iostream>
# include <stdlib.h>
# include <locale>
using namespace std;
//
struct funcao{
	string nome_f;
	int codi_f;
	float sala_f;
};
struct data{
	int ano;
	int dia;
	string mes;
};
struct colab{
	string name_c;
	string cpf_c;
	char sexo_c;
	funcao cargo;
	data naci;
};
int main()
{
	setlocale(LC_ALL,"portuguese");
	//
	colab funci[50];
	char bus;
	int cont = 0;
	string nome;
	string trava = "TRAVA";
	int chave = 0;
	//
	do{
		system("cls");
		//
		cout <<"\n\n ........................ MENU ........................ \n\n";
		cout <<"\n\t 0 - Sair \n";
		cout <<"\n\t 1 - Cadastrar Funcionários \t\t LIVRE \n";
		cout <<"\n\t 2 - Listar todos funcionários \t\t"<<trava<<"\n";
		cout <<"\n\t 3 - Listar funcionários filtrando por sexo \t\t"<<trava<<"\n";
		cout <<"\n\t 4 - Listar funcionários filtrando por setor \t\t"<<trava<<"\n";
		cout <<"\n\n ........................ MENU ........................ \n\n";
		//
		cout <<"\n\t EXECUTAR: ";
		cin >> bus;
		cout <<"\n";
		//
		if(bus != '0'){
			system("cls");
			if(bus == '1'){
				bool continuar;
				do{//cadastro das informações;
					cout <<"\n\n ...................... Cadastro ...................... \n\n";
					// nome completo do funcionario 
					cout <<"\t Nome Completo: ";
					cin.ignore();
					getline(cin, funci[cont].name_c);
					// cpf do funccionario
					cout <<"\n\t CPF : ";
					cin >> funci[cont].cpf_c;
					// sexo do funcionario
					bool sair = true;
					do{
						cout <<"\n\t M [ Masculino ] F [ Feminino]";
						cout <<"\n\t Sexo: ";
						cin >> funci[cont].sexo_c;
						// teste para resposta m ou f
						if(funci[cont].sexo_c == 'M' || funci[cont].sexo_c == 'F')
						{
							sair = false;
						}
						else if(funci[cont].sexo_c == 'm' || funci[cont].sexo_c == 'f')
						{
							sair = false;
						}
						else{
							cout <<"\n\t !!! ERRO !! tente novamente. \n";
						}
					}while(sair);
					// Data de Nacimento
					cout <<"\n\t Data de nacimento: ";
					cin >> funci[cont].naci.dia;
					cin >> funci[cont].naci.mes;
					cin >> funci[cont].naci.ano;
					// Cargo na empresa
					cout <<"\n\t Cargo que ocupa: ";
					cin >> funci[cont].cargo.nome_f;
					// Código do cargo
					do{
						cout <<"\n\t De 0  até 99";
						cout <<"\n\t Código: ";
						cin >> funci[cont].cargo.codi_f;
					}while(funci[cont].cargo.codi_f < 0 || funci[cont].cargo.codi_f > 100);
					// salario
					cout <<"\n\t Salario: ";
					cin >> funci[cont].cargo.sala_f;
					// cadatro rapido de novo fucionario
					char res;
					cout <<"\n\t S[sim] N[não] ";
					cout <<"\n\t Cadastrar mais ? ";
					cin >> res;
					//
					if(chave == 0){
						trava = "LIVRE";
						chave ++;
					}
					if(res == 's' || res == 'S'){
						continuar = true;
						cont ++;
					}else{
						continuar = false;
					}
					//
				}while(continuar);
			}
			else if(bus == '2' & chave != 0){
				for(int i = 0; i <= cont; i++){
					cout <<"\n\n ...................... Cadastros ..................... \n\n";
					//
					cout <<" Data de nacimento: "<< funci[i].naci.dia <<" , "<< funci[i].naci.mes <<" de "<< funci[i].naci.ano <<"\n";
					cout <<" NOME: "<< funci[i].name_c <<"\n";
					cout <<" CPF: "<< funci[i].cpf_c <<" \t "<<"SEXO: "<< funci[i].sexo_c <<"\n";
					cout <<" IDADE: "<< 2020 - funci[i].naci.ano <<" anos \n";
					cout <<" CARGO: "<< funci[i].cargo.nome_f <<" \t "<<"CÓDIGO: "<< funci[i].cargo.codi_f <<"\n";
					cout <<" SALARIO: "<< funci[i].cargo.sala_f;
					//
					cout <<"\n\n ...................................................... \n\n";
				}
				cout <<"\n\n ........................ FIM ......................... \n\n";
			}
			else if(bus == '3' & chave != 0){
				char sex;
				//
				cout <<"\n M [masculino] F [feminino]\n";
				cout <<" Buscar: ";
				cin >> sex;
				//
				if(sex == 'm' || sex == 'M'){
					for(int i = 0; i <= cont; i++){
						if(funci[i].sexo_c == 'm' || funci[i].sexo_c == 'M'){
							cout <<"\n\n ...................... Cadastros ..................... \n\n";
							//
							cout <<" Data de nacimento: "<< funci[i].naci.dia <<" , "<< funci[i].naci.mes <<" de "<< funci[i].naci.ano <<"\n";
							cout <<" NOME: "<< funci[i].name_c <<"\n";
							cout <<" CPF: "<< funci[i].cpf_c <<" \t "<<"SEXO: "<< funci[i].sexo_c <<"\n";
							cout <<" IDADE: "<< 2020 - funci[i].naci.ano <<" anos \n";
							cout <<" CARGO: "<< funci[i].cargo.nome_f <<" \t "<<"CÓDIGO: "<< funci[i].cargo.codi_f <<"\n";
							//
							cout <<"\n\n ...................................................... \n\n";
						}
					}
					cout <<"\n\n ........................ FIM ......................... \n\n";
				}
				if(sex == 'f' || sex == 'F'){
					for(int i = 0; i <= cont; i++){
						if(funci[i].sexo_c == 'f' || funci[i].sexo_c == 'F'){
							cout <<"\n\n ...................... Cadastros ..................... \n\n";
							//
							cout <<" Data de nacimento: "<< funci[i].naci.dia <<" , "<< funci[i].naci.mes <<" de "<< funci[i].naci.ano <<"\n";
							cout <<" NOME: "<< funci[i].name_c <<"\n";
							cout <<" CPF: "<< funci[i].cpf_c <<" \t "<<"SEXO: "<< funci[i].sexo_c <<"\n";
							cout <<" IDADE: "<< 2020 - funci[i].naci.ano <<" anos \n";
							cout <<" CARGO: "<< funci[i].cargo.nome_f <<" \t "<<"CÓDIGO: "<< funci[i].cargo.codi_f <<"\n";
							cout <<" SALARIO: "<< funci[i].cargo.sala_f;
							//
							cout <<"\n\n ...................................................... \n\n";
						}
					}
					cout <<"\n\n ........................ FIM ......................... \n\n";
				}
			}
			else if(bus == '4' & chave != 0)
			{
				int cod;
				//
				cout <<"\n\t De 0  até 99";
				cout <<"\n\t Código: ";
				cin >> cod;
				//
				for(int c = 0; c <= cont; c++){
					if(funci[c].cargo.codi_f == cod){
						cout <<"\n\n ...................... Cadastros ..................... \n\n";
						//
						cout <<" Data de nacimento: "<< funci[c].naci.dia <<" , "<< funci[c].naci.mes <<" de "<< funci[c].naci.ano <<"\n";
						cout <<" NOME: "<< funci[c].name_c <<"\n";
						cout <<" CPF: "<< funci[c].cpf_c <<" \t "<<"SEXO: "<< funci[c].sexo_c <<"\n";
						cout <<" IDADE: "<< 2020 - funci[c].naci.ano <<" anos \n";
						cout <<" CARGO: "<< funci[c].cargo.nome_f <<" \t "<<"CÓDIGO: "<< funci[c].cargo.codi_f <<"\n";
						cout <<" SALARIO: "<< funci[c].cargo.sala_f;
						//
						cout <<"\n\n ...................................................... \n\n";
					}
				}
				cout <<"\n\n ........................ FIM ......................... \n\n";
			}
			else{
				cout <<"\n\t !!! ERRO !! tente novamente. ";
				cout <<"\n\t Opição selecinada não existe. \n\n";
				cout <<"\t";
			}
			cout <<"\n\t";
			system("pause");
		}
	}while(bus != '0');
} 