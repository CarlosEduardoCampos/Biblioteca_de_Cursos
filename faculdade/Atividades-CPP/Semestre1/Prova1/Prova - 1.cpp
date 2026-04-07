# include <iostream>
# include <locale>
using namespace std;
//
int main()
{
	setlocale(LC_ALL,"portuguese");
	//
	char op[1];
	do{
		system("cls");
		cout <<"\n.......................... Menu ..........................\n";
		cout <<"\n 1 - Exercício \n";
		cout <<"\n 2 - Exercício \n";
		cout <<"\n 3 - Exercício \n";
		cout <<"\n 4 - Sair \n";
		cout <<"\n..........................................................\n";
		cout <<"Opção: ";
		cin >> op;
		//
		if(op[0] != '1' & op[0] != '2' & op[0] != '3' & op[0] != '4')
		{
			cout <<"\n .!.!.! OPÇÃO DIGITADA NÃO EXISTE !.!.!.";
			cout <<"\n Na próxima tente 1, 2, 3 ou 4.\n\n";
			system("pause");
		}
		else if( op[0] != '4')
		{
			if(op[0] == '1')
			{
				char num[3], mun[3];// U D C, C D U.
				int cont = 2;// Contador para posição mun.
				//
				cout <<" Digite um numero[ CDU ]: ";// Pedindo num[UDC].
				cin >> num;// Recebendo mun[CDU].
				//
				for(int i=0; i<3; i++)// Contando posição num.
				{
					int pos = cont-i;// posição mun que recebera num[i] correspondente.
					mun[pos] = num[i];// mun[pos] recebendo num[i] corerespondente.
				}
				//
				cout<<"\n Numero [UDC]: "<<mun<<"\n";// Mostrando mun.
				cout<<"\n\n";
				system("pause");
			}
			if(op[0] == '2')
			{
				system("cls");
				// Cadastro do Corretor.
				string nome[3];// Nome dos corretors
				int venda[3],i;
				//
				for(i=0; i<3; i++)
				{	
				cout <<"\n....................... Corretor-"<<i+1<<" .......................\n";
					cout<<"\n Corretor nome : ";// Pedindo nome.
					cin >>nome[i];// Resebendo nomme.
					//
					cout<<"\n\n Venda : R$ ";// Pedindo valor da venda.
					cin >>venda[i];// Recebendo valor da venda.
				}
				// Calculando a comissão do corretor.
				int lucro[3];
				//
				for(i=0; i<3; i++)// Analizando um valor de cada.
				{
					if(venda[i] > 50000)
					{
						lucro[i] = venda[i] * 0.12;
					}
					else if(venda[i] >= 30000 & venda[i] <= 50000)
					{
						lucro[i] = venda[i] * 0.095;
					}
					else
					{
						lucro[i] = venda[i] * 0.07;
					}
				}
				//
				system("pause");
				system("cls");
				//
				cout<<"\n"<<" Nome .................. Venda ................ Comissão ....."<<"\n";
				//
				for(i=0; i<3; i++)
				{
					cout<<"\n "<<nome[i]<<" . . . . . . . . . . "<<venda[i]<<" . . . . . . . . . . "<<lucro[i]<<"\n";
				}
				//
				cout<<"\n\n";
				system("pause");
			}
			if(op[0] == '3')
			{
				int cod = 0;
				//
				do{
					system("cls");
					//
					cout<<"\n ..... Especificação .............................. Preço unitario \n";
					cout<<"................................................................. \n";
					cout<<" 100 - Cachorro Quente ................................ R$ 6,50 \n";
					cout<<" 101 - Cachorro Quente Duplo .......................... R$ 8,00 \n";
					cout<<" 102 - Bauru Simples .................................. R$ 8,00 \n";
					cout<<" 103 - Bauru c/ovo .................................... R$ 9,00 \n";
					cout<<" 104 - Misto Quente ................................... R$ 7,00 \n";
					cout<<" 105 - XBurguer ....................................... R$ 9,00 \n";
					cout<<" 106 - Refrigerante ................................... R$ 5,00 \n";
					cout<<" 999 - Sair ................................................... \n";
					cout<<" ................................................................. \n";
					//
					int qua = 0;
					//
					cout<<" Código do item: ";
					cin >>cod;
					//
					float pagar = 0.0;
					//
					if(cod != 999)
					{
						cout<<" Quantidade: ";
						cin >>qua;
						//
						if(cod == 100){
							pagar = qua*6.5;
						}
						else if(cod == 101){
							pagar = qua*8;
						}
						else if(cod == 102){
							pagar = qua*8;
						}
						else if(cod == 103){
							pagar = qua*9;
						}
						else if(cod == 104){
							pagar = qua*7;
						}
						else if(cod == 105){
							pagar = qua*9;
						}
						else if(cod == 106){
							pagar = qua*5;
						}
						cout<<"Valor do pedido R$ "<<pagar;
					}
					cout<<"\n\n";
					system("pause");
					//
				}while(cod != 999);
			}
		}
	}while(op[0] != '4');
}
