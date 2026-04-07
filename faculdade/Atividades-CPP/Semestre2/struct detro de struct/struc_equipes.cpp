# include <iostream>
# include <stdlib.h>
using namespace std;
//
struct menbs{
	string mname;
	char sexo;
	int peril;
	int nacim;
};
struct times{
	menbs menbr[4];
	char nivel[1];
	string enome;
};
int main()
{
	//
	times time[50];
	string trava =" TRAVA ";
	int livre = 0;
	bool vai= false;
	char opin;
	int cont = 0;
	//
	do{
		system("cls");
		//
		cout <<".............. Menu .............. \n\n";
		cout <<" 0 - Sair \n";
		cout <<" 1 - Cadastrar as equipes com seus respectivos dados \n";
		cout <<" 2 - Imprimir os dados das equipes cadastradas por nivel.{"<<trava<<"}\n";
		cout <<".................................. \n\n";
		cout <<" Opicao: ";
		cin >> opin;
		//
		if(opin == '1')
		{
			do{
				cout <<"\n Nome da equipe: ";
				cin.ignore( );
				getline(cin,time[cont].enome);
				//
				cout <<"\n [E]experiente [i]iniciante; \n";
				cout <<"\n Nivel da equipe: ";
				cin >> time[cont].nivel;
				//
				for(int m = 0; m <= 3; m++)
				{
					if( m < 3 )
					{
						cout <<"\n Titular "<<m+1<<": ";
						cin >> time[cont].menbr[m].mname;
					}
					else{
						cout <<"\n Reserva: ";
						cin >> time[cont].menbr[m].mname;
					}
					//
					cout <<"\n\t Ano de nacimento: ";
					cin >> time[cont].menbr[m].nacim;
					//
					do{
						cout <<"\n\t Perildo: ";
						cin >> time[cont].menbr[m].peril;
					}while(time[cont].menbr[m].peril < 0);
					//
					bool continuar = true;
					do{
						//
						cout <<"\n [M]masculino [F]feminino [O]outros; \n";
						cout <<"\n\t Sexo: ";
						cin >> time[cont].menbr[m].sexo;
						//
						if(time[cont].menbr[m].sexo == 'm' || time[cont].menbr[m].sexo == 'M')
						{
							continuar = false;
						}
						else if(time[cont].menbr[m].sexo == 'f' || time[cont].menbr[m].sexo == 'F')
						{
							continuar = false;
						}
						else if(time[cont].menbr[m].sexo == 'o' || time[cont].menbr[m].sexo == 'O')
						{
							continuar = false;
						}
						else{
							cout <<"\n ERRO ..... digite novamente:\n";
						}
						
					}while(continuar);
					//
				}
				char res;
				//
				cout <<"\n\n [S]sim [N]nao; \n";
				cout <<"\n Desja continuar: ";
				cin >> res;
				//
				if(cont == 0 & livre == 0)
				{
					trava = " LIVRE ";
					livre ++;
				}
				//
				if(res == 's' || res == 'S')
				{
					//
					cont++;
					vai = true;
					//
				}
				else{ vai = false;}
				//
			}while(vai);
		}
		else if(opin == '2' & livre > 0)
		{
			system("cls");
			char res;
			//
			cout <<"\n [E]experientes [i] Iniciantes \n";
			cout <<"\t Buscar: ";
			cin >> res;
			//
			if( res == 'i' || res == 'I')
			{
				for(int i = 0; i <= cont; i++)
				{
					if(time[i].nivel[0] == 'i' || time[i].nivel[0] == 'I')
					{
						cout <<"\n .............. Cadastro: "<<i<<" de "<<cont<<" .............. \n\n";
						//
						cout <<"\n Nome da equipe: "<<time[i].enome<<"\n\n";
						cout <<"\n nivel da equipe: "<<time[i].nivel[0]<<"\n\n";
						//
						cout <<"\n ................ Membros ................ \n\n";
						for(int m = 0; m <= 3; m++)
						{
							if( m < 3 )
							{
								cout <<"\n\t Titular "<<m<<": "<<time[cont].menbr[m].mname;
							}
							else{
								cout <<"\n\t Reserva: "<<time[cont].menbr[m].mname;
							}
							//
							cout <<"\n\t\t Ano de nacimento: "<<time[cont].menbr[m].nacim;
							//
							cout <<"\n\t\t Perildo: "<<time[cont].menbr[m].peril;
							//
							cout <<"\n\t\t Sexo: "<<time[cont].menbr[m].sexo;
							//
						}
					}
				}
			}
			else if(res == 'e' || res == 'E')
			{
				for(int i = 0; i <= cont; i++)
				{
					if(time[i].nivel[0] == 'e' || time[i].nivel[0] == 'E')
					{
						cout <<"\n .............. Cadastro: "<<i<<" .............. \n\n";
						//
						cout <<"\n Nome da equipe: "<<time[i].enome<<"\n\n";
						cout <<"\n nivel da equipe: "<<time[i].nivel[0]<<"\n\n";
						//
						cout <<"\n ................ Membros ................ \n\n";
						for(int m = 0; m <= 3; m++)
						{
							if( m < 3 )
							{
								cout <<"\n\t Titular "<<m<<": "<<time[cont].menbr[m].mname;
							}
							else{
								cout <<"\n\t Reserva: "<<time[cont].menbr[m].mname;
							}
							//
							cout <<"\n\t\t Ano de nacimento: "<<time[cont].menbr[m].nacim;
							//
							cout <<"\n\t\t Perildo: "<<time[cont].menbr[m].peril;
							//
							cout <<"\n\t\t Sexo: "<<time[cont].menbr[m].sexo;
							//
						}
					}
				}
			}
			else{
					
				for(int i = 0; i <= cont; i++)
				{
					if(time[i].nivel[0] != 'e' & time[i].nivel[0] != 'E' & time[i].nivel[0] != 'i' & time[i].nivel[0] != 'I')
					{
						cout <<"\n .............. Cadastro invalido "<<i<<" .............. \n\n";
						//
						cout <<"\n Nome da equipe: "<<time[i].enome<<"\n\n";
						cout <<"\n nivel da equipe: "<<time[i].nivel[0]<<"\n\n";
						//
						cout <<"\n ................ Membros ................ \n\n";
						for(int m = 0; m <= 3; m++)
						{
							if( m < 3 )
							{
								cout <<"\n\t Titular "<<m<<": "<<time[cont].menbr[m].mname;
							}
							else{
								cout <<"\n\t Reserva: "<<time[cont].menbr[m].mname;
							}
							//
							cout <<"\n\t\t Ano de nacimento: "<<time[cont].menbr[m].nacim;
							//
							cout <<"\n\t\t Perildo: "<<time[cont].menbr[m].peril;
							//
							cout <<"\n\t\t Sexo: "<<time[cont].menbr[m].sexo;
							//
						}
					}
				}
			}
			cout <<"\n\n";
			system("pause");
		}
		else{
			//
			cout <<"\n ........... opicao nao existe ........... \n\n\t";
			system("pause");
			//
		}
	}while(opin != 0);
	//
	return 0;
}
