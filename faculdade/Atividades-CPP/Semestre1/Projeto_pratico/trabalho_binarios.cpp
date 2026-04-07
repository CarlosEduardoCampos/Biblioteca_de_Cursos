# include <iostream>
# include <cstring>
# include <math.h>
# include <locale>
using namespace std;
//
int main()
{
	setlocale(LC_ALL,"portuguese");
	//
	int op = 0;
	cout <<"\n.................... Menu ....................\n";
	cout <<"\n 1 - numero binario para de cimal \n";
	cout <<"\n 2 - numero decimal para binario \n";
	cout <<"\n..............................................\n";
	//
	do
	{
		cout <<" Opção: [1 ou 2] ";
		cin >> op;
	}
	while(op < 0 || op > 3);
	//numero decimal para binario
	if(op == 2)
	{
		int dec, y, bin[8];// decimal, contador, binario.
		//
		cout <<"\n Decimal : ";//Pedindo decimal.
		cin >>dec;// Recebendo decimal
		//
		for(y == 0; y <=7; y++)// lupe para divisão do decimal.
		{
			if(dec >= 1)
			{
				bin[y] = (dec%2);// binario recebe resto  0 ou 1.
				dec /= 2;
			}
			else
			{
				bin[y] = 0;// quando não e possivel mais dividir binario recebe 0.
			}
		}
		cout <<"\n BINARIO : ";
		for(y = 7; y >= 0; y --)// Invertendo a lista para chegarao resultado.
		{
			cout<< bin[y];
		}
		cout <<"\n";
	}
	//
	else if(op == 1)
	{
		char bin[20];//binario.
		int dec = 0, i;// decimal , contador.
		//
		cout <<"\n Binario: ";//Pedindo binario.
		cin >> bin;//Recebendo binario.
		//
		int c = 0; // contador.
		//
		for( i=(strlen(bin)-1); i>=0; i--)// numero 0 ou 1 elevado pela posição.
		{	
			if(bin[c] == '0'){ // transformando str para int.
				dec += 0;
			}
			else if(bin[c] == '1'){ // transformando str para int.
				dec += pow(2,(i));
			}
			c++;
		}
		//
		cout <<"\n DECIMAL : "<<dec<<"\n";// mostrando resultado.
	}
	//
	system("pause");
	//
	return 0;
}
