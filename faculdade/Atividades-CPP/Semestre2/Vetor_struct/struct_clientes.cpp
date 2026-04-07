# include <iostream>
# include <locale>
using namespace std;
//
struct cliente
{
	string nome;
	char sexo;
	char cpf[11];
	int idd;
	float crd;
};
int main()
{
	setlocale(LC_ALL,"portuguese");
	//
	cliente cadastro[100];
	int cont = 0;
	int opin;
	//
	do{
		//
		system("cls");
		cout <<".............. Menu .............. \n\n";
		cout <<" 0 - Sair \n";
		cout <<" 1 - Cadastro de Clientes \n";
		cout <<" 2 - Mostrar Clientes Cadastrados \n";
		cout <<" 3 - Filtro de Clientes por Sexo  \n";
		cout <<" 4 - Filtro de Clientes por Credito  \n";
		cout <<".................................. \n\n";
		cout <<" Opição: ";
		cin >> opin;
		//
		bool ficar = true;
		char res;
		//
		if(opin == 1)
		{			
			//
			system("cls");
			//
			do{
				//
				cout <<"\n............ cadastro nº "<<cont<<" ............\n";
				//
				cout <<"\n Nome: ";
				cin.ignore();
				getline(cin,cadastro[cont].nome);
				//
				cout <<" Sexo: [ M ou F ] ";
				cin >> cadastro[cont].sexo;
				//
				cout <<" CPF: ";
				cin >> cadastro[cont].cpf;
				//
				cout <<" Idade: ";
				cin >> cadastro[cont].idd;
				//
				cout <<" Credito: R$ ";
				cin >> cadastro[cont].crd;
				//
				cout <<"\n Continuar: [ S ou N ] ";
				cin >> res;
				//
				if( res  == 'n' || res == 'N' )
				{
					ficar = false;
				}
				else{
					cont ++;
				}
			}while(ficar);
		}
		else if (opin == 2)
		{
			system("cls");
			for( int i = 0; i <= cont; i++)
			{
				//
				cout <<"\n\n............ Cliente nº "<<i<< "............\n\n";
				//
				cout <<"\t NOME: "<< cadastro[i].nome <<"\n\n";
				//
				cout <<"\t CPF: "<< cadastro[i].cpf <<"\n\n";
				//
				cout <<"\t CREDTITO: R$ " << cadastro[i].crd <<"\n\n";
				//
				cout <<"\t SEXO: "<< cadastro[i].sexo <<"\t IDADE: "<< cadastro[i].idd <<"\n\n";
			}
			//
			cout<< "......................................\n\n";
			system("pause");
		}
		else if (opin == 3)
		{
			//
			cout <<" Masculino[ M ] // Feminino[ F ] \n";
			cout <<" Buscar: ";
			cin >> res;
			//
			if(res == 'M' || res == 'm')
			{
				system("cls");
				//
				for(int p = 0; p <= cont; p++)
				{
					if( cadastro[p].sexo == 'm' || cadastro[p].sexo == 'M')
					{
						//
						cout <<"\n\n............ Cliente nº "<<p<< "............\n\n";
						//
						cout <<"\t NOME: "<< cadastro[p].nome <<"\n\n";
						//
						cout <<"\t CPF: "<< cadastro[p].cpf <<"\n\n";
						//
						cout <<"\t CREDTITO: R$ "<< cadastro[p].crd <<"\n\n";
						//
						cout <<"\t SEXO: "<< cadastro[p].sexo <<"\t IDADE: "<< cadastro[p].idd <<"\n\n";
					}
				}
				//
				cout<< "......................................\n\n";
				system("pause");
			}
			if(res == 'F' || res == 'f')
			{
				system("cls");
				//
				for(int p = 0; p <= cont; p++)
				{
					if( cadastro[p].sexo == 'f' || cadastro[p].sexo == 'F')
					{
						//
						cout <<"\n\n............ Cliente nº "<<p<<" ............\n\n";
						//
						cout <<"\t NOME: "<< cadastro[p].nome <<"\n\n";
						//
						cout <<"\t CPF: "<< cadastro[p].cpf <<"\n\n";
						//
						cout <<"\t CREDTITO: R$"<< cadastro[p].crd <<"\n\n";
						//
						cout <<"\t SEXO: "<< cadastro[p].sexo <<"\t IDADE: "<< cadastro[p].idd <<"\n\n";
					}
				}
				//
				cout<< "......................................\n\n";
				system("pause");
			}
		}
		else if(opin == 4)
		{
			int valor;
			//
			cout <<" Valor de Busca: ";
			cin >> valor;
			//
			system("cls");
			//
			for(int y = 0; y <= cont; y++)
			{
				if( cadastro[y].crd > valor)
				{
					//
					cout <<"\n\n............ Cliente nº "<<y<< "............\n\n";
					//
					cout <<"\t NOME: "<< cadastro[y].nome <<"\n\n";
					//
					cout <<"\t CPF: "<< cadastro[y].cpf <<"\n\n";
					//
					cout <<"\t CREDTITO: R$ "<< cadastro[y].crd <<"\n\n";
					//
					cout <<"\t SEXO: "<< cadastro[y].sexo <<"\t IDADE: "<< cadastro[y].idd <<"\n\n";
				}
			}
			cout<< "......................................\n\n";
			system("pause");
		}
	}while(opin != 0);
	//
	return 0;
}

