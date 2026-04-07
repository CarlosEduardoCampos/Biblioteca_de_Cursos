# include <iostream>
# include <math.h>
# include <locale>
using namespace std;
//
# define linha cout <<"\n ....................................................\n";
//
int main()
{
	setlocale(LC_ALL,"portuguese");
	//Variaveis:
	int a=0,b=0,c=0;
	string trava = "<TRAVADO>";
	int op = 0, part = 0; // opção e participante
	float vinagrete[3];
	float bebidas[2], carnes[2];
	float braza[1], outros[1], limpeza[1];
	//
	do
	{
		if(b == 2){trava="<Livre>";}
		// Menu de opcões.
		system("cls");
		//
		cout <<"\n Menu de opções:";
		linha
		cout <<"\n 1 - Numero de Participantes \n";
		cout <<"\n 2 - Valor de Produtos \n";
		cout <<"\n 3 - "<<trava<<" Calcular compra \n";		
		linha
		//
		cout <<" Opção: ";
		cin >>op;
		//
		if(op > 3 || op < 1){op = 0;}
		//
		if(op==3)
		{
			if(b != 2)
			{
				if(a==0){op = 1;}
				else{op = 1;}
				//
				cout <<"\n\n !..!..! Termine de cadatrar 1 é 2 \n\n";
				system("pause");
			}
			else
			{//Fazendo os cauculos e mostrando o resultado.
				system("cls");
				cout <<"\n ..................... Opção - 3 ....................\n";
				float total=0,quant=0,valor=0,num=0;
				string bb;
				//Valor das Bebidas.
				cout <<" Bebidas ...\n\n";
				for(int i = 0; i <= 2; i++)
				{
					 ;
					if(i == 0){
						bb = "Cerveja(lata)";
						quant = 3 * part;
						valor = bebidas[0] * ceil(quant);
						total += valor;
					}
					else if(i == 1){
						bb = "Refri-normal(litro)";
						quant = 0.8 * part;
						valor = bebidas[0] * ceil(quant);
						total += valor;
					}
					else if(i == 2){
						bb = "Refri-diet(litro)";
						quant = 0.2 * part;
						valor = bebidas[0] * ceil(quant);
						total += valor;
					}
					//
					cout <<" "<<quant<<" - "<<bb<<": "<<" R$"<<valor<<"\n\n";
					linha
				}
				system("pause");
				system("cls");
				cout <<"\n ..................... Opção - 3 ....................\n";
				//Valor das Carnes.
				cout <<" Carnes ...\n\n";
				//
				string cc;
				//
				for(int i = 0; i <= 2; i++)
				{
					if(i == 0){
						cc = "Carnes";
						quant = 0.25 * part;
						valor = carnes[0] * quant;
						total += valor;
					}
					else if(i == 1){
						cc = "Linguiça toscana(quilos)";
						quant = 0.05 * part;
						valor = carnes[1] * quant;
						total += valor;
					}
					else if(i == 2){
						cc = "Linguiça de Frango(quilos)";
						quant = 0.05 * part;
						valor = carnes[2] * quant;
						total += valor;
					}
					//
					cout <<" "<<quant<<" - "<<cc<<": "<<" R$ "<<valor<<"\n\n";
					linha
				}
				system("pause");	
				system("cls");
				cout <<"\n ..................... Opção - 3 ....................\n";
				//Valor dos ingredientes para vinagrete.
				cout <<" Vinagrete ...\n\n";
				//
				string vv;
				//
				for(int i = 0; i <= 3; i++)
				{
					if(i == 0)
					{
						vv = "Tomate(quilo)";
						quant = 0.05 * part;
						valor = vinagrete[0] * quant;
						total += valor;	
					}
					else if(i == 1)
					{
						vv = "Cebola(quilo)";
						quant = 0.02 * part;
						valor = vinagrete[1] * quant;
						total += valor;
					}
					else if(i == 2)
					{
						vv = "Vinagre(unidade)";
						quant = 1;
						valor = vinagrete[2] * quant;
						total += valor;
					}
					else if(i == 3)
					{
						vv = "Limão(quilo)";
						quant = 0.05 * part;
						valor = vinagrete[3] * quant;
						total += valor;
					}
					//
					cout <<" "<<quant<<" - "<<vv<<": "<<" R$ "<<valor<<"\n\n";
					linha
				}
				system("pause");
				system("cls");
				cout <<"\n ..................... Opção - 3 ....................\n";
				//Valor dos intens que acedem a churasqueira.
				cout <<" Braza ...\n\n";
				//
				string br;
				//
				for(int i = 0; i <= 1; i++)
				{
					if(i == 0)
					{
						br = "Carvão(saco)";
						quant = ceil(0.05 * part);
						valor = braza[0] * quant;
						total += valor;
					}
					else if(i == 1)
					{
						br = "Papel higiênico(pacote)";
						quant = ceil(0.025 * part);
						valor = braza[1] * quant;
						total += valor;
					}
					//
					cout <<" "<<quant<<" - "<<br<<": "<<" R$ "<<valor<<"\n\n";
					linha
				}
				system("pause");
				system("cls");
				cout <<"\n ..................... Opção - 3 ....................\n";
				//Valor dos intens da limpeza.
				cout <<" Limpeza ...\n\n";
				//
				string lp;
				//
				for(int i = 0; i <= 1; i++)
				{
					if(i == 0)
					{
						lp = "Detergente(unidade)";
						quant = 1;
						valor = limpeza[0] * quant;
						total += valor;
					}
					else if(i == 1)
					{
						lp = "Esponja de pia(unidade)";
						quant = 1;
						valor = limpeza[1] * quant;
						total += valor;
					}
					//
					cout <<" "<<quant<<" - "<<lp<<": "<<" R$ "<<valor<<"\n\n";
					linha
				}
				system("pause");
				system("cls");
				cout <<"\n ..................... Opção - 3 ....................\n";
				//Valor de outros intens.
				cout <<" Outros ...\n\n";
				//
				string ou;
				//
				for(int i = 0; i <= 1; i++)
				{
					if(i == 0)
					{
						ou = "Pão(unidade)";
						quant = 3 * part;
						valor = outros[1] * quant;
						total += valor;
					}
					else if(i == 1)
					{
						ou = "Sal-grosso(saco)";
						quant = ceil(0.02 * part);
						valor = braza[1] * quant;
						total += valor;
					}
				}
				//
				cout <<" "<<quant<<" - "<<ou<<": "<<" R$ "<<valor<<"\n\n";
				linha
				//
				float taxa = total *0.05;
				float porp = (taxa + total)/ part;
				//
				system("cls");
				cout <<"\n ... Valor total = R$ "<<ceil(total)<<" + Taxa de risco = R$ "<<ceil(taxa)<<" ...\n";
				cout <<"\n ............... Valor por pessoal = "<<ceil (porp)<<" ..............\n";
			}	
		}
		else if(op == 1)
		{
			if(a == 0)// trava calculo.
			{	
				b++;
				a++;
			}
			cout <<"\n ..................... Opção - 1 ....................\n";
			cout <<"\n Numero de participantes: ";
			cin >>part;
		}
		else if(op == 2)
		{
			if(c == 0)//trava calculo.
			{	
				b++;
				c++;
			}
			// Bebidas.
			system("cls");
			//
			cout <<"\n ..................... Opção - 2 ....................\n";
			cout << " Valor dos itens(bebidas)....\n\n";	
			//	
			string bb;
			for(int i = 0; i <= 2; i++)
			{
				if(i == 0){bb = "Cerveja(lata)";}
				else if(i == 1){bb = "Refri-normal(litro)";}
				else if(i == 2){bb = "Refri-diet(litro)";}
				//
				cout <<" "<<bb<<"....\n";
				cout <<" Valor: R$ ";
				cin >> bebidas[i];
				linha
			}
			system("pause");
			// Carnes.
			system("cls");
			//
			cout <<"\n ..................... Opção - 2 ....................\n";
			cout << " Valor do item(Carne)....\n\n";	
			//
			string cc;
			//
			for(int i = 0; i <= 2; i++)
			{
				if(i == 0){cc = "Carne(quilo)";}
				else if(i == 1){cc = "Linguiça toscana(quilo)";}
				else if(i == 2){cc = "Linguiça de frango(quilo)";}
				//
				cout <<" "<<cc<<"....\n";
				cout <<" Valor: R$ ";
				cin >> carnes[i];
				linha
			}
			system("pause");
			// Vinagrete.
			system("cls");
			//
			cout <<"\n ..................... Opção - 2 ....................\n";
			cout << " Valor dos itens(Vinagrete)....\n\n";	
			//
			string vv;
			//
			for(int i = 0; i <= 3; i++)
			{
				if(i == 0){vv = "Tomate(quilo)";}
				else if(i == 1){vv = "Cebola(quilo)";}
				else if(i == 2){vv = "Vinagre(unidade)";}
				else if(i == 3){vv = "Limão(quilo)";}
				//
				cout <<" "<<vv<<"....\n";
				cout <<" Valor: R$ ";
				cin >> vinagrete[i];
				linha
			}
			system("pause");
			// Braza.
			system("cls");
			//
			cout <<"\n ..................... Opção - 2 ....................\n";
			cout << " Valor dos itens(Braza)....\n\n";	
			//
			string br;
			//
			for(int i = 0; i <= 1; i++)
			{
				if(i == 0){br = "Carvão(saco)";}
				else if(i == 1){br = "Papel higiênico(pacote)";}
				//
				cout <<" "<<br<<"....\n";
				cout <<" Valor: R$ ";
				cin >> braza[i];
				linha
			}
			system("pause");
			// Limpeza.
			system("cls");
			//
			cout <<"\n ..................... Opção - 2 ....................\n";
			cout << " Valor dos itens(limpeza)....\n\n";	
			//
			string lp;
			//
			for(int i = 0; i <= 1; i++)
			{
				if(i == 0){lp = "Detergente(unidade)";}
				else if(i == 1){lp = "Esponja de pia(unidade)";}
				//
				cout <<" "<<lp<<"....\n";
				cout <<" Valor: R$ ";
				cin >> limpeza[i];
				linha
			}
			system("pause");
			// Outros.
			system("cls");
			//
			cout <<"\n ..................... Opção - 2 ....................\n";
			cout << " Valor dos itens(outros)....\n\n";	
			//
			string ou;
			//
			for(int i = 0; i <= 1; i++)
			{
				if(i == 0){ou = "Pão(unidade)";}
				else if(i == 1){ou = "Sal-grosso(saco)";}
				//
				cout <<" "<<ou<<"....\n";
				cout <<" Valor: R$ ";
				cin >> braza[i];
				linha
			}
			system("pause");
		}	
		//	
	}while(op != 3);
	//
	cout <<"\n\n....!!!....Fim do programa....!!!....\n\n";
	//
	return 0;
}
