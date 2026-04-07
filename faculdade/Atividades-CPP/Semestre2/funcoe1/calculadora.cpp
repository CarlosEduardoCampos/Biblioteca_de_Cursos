# include <iostream>
# include <stdlib.h>
# include <locale>
using namespace std;
//
void soma(){
	//
	float c, n1, n2;
	//
	cout <<" Numero 1 : ";
	cin >> n1;
	//
	cout <<" Numero 2 : ";
	cin >> n2;
	//
	c = n1 + n2;
	//
	cout <<" Resultado = "<< c <<"\n";
	//
}
float subi(){
	//
	float c, n1, n2;
	//
	cout <<" Numero 1 : ";
	cin >> n1;
	//
	cout <<" Numero 2 : ";
	cin >> n2;
	//
	c = n1 - n2;
	//
	return c;
	//
}
void mult(float a, float b){
	//
	float c = a * b;
	//
	cout <<" Resultado = "<< c <<"\n";
	//
}
float divi(float a, float b){
	//
	float c = a / b;
	return c;
	//
}
int main()
{
	setlocale(LC_ALL,"portuguese");
	char bus;
	//
	do{
		system("cls");
		//
		cout <<"\n\n ........................ MENU ........................ \n\n";
		cout <<"\n\t 0 - Sair \n";
		cout <<"\n\t 1 - SOMA \n";
		cout <<"\n\t 2 - SUBTRAIR \n";
		cout <<"\n\t 3 - MULTIPLICAR \n";
		cout <<"\n\t 4 - DIVIDIR \n";
		cout <<"\n\n ........................ MENU ........................ \n\n";
		//
		cout <<"\n\t EXECUTAR: ";
		cin >> bus;
		cout <<"\n";
		//
		if(bus != '0')
		{
			switch(bus)
			{
				case '1':
					soma();
				   	break;
				case '2':
					cout <<" Resultado = "<<subi()<<" ";
				   	break;
				case '3':
	   	   	   	   	float n1, n2;
					//
					cout <<" Fator : ";
			  	   	cin >> n1;
				   	//
					cout <<" Multiplicador : ";
					cin >> n2;
					//
					mult(n1, n2);
				   	break;
				case '4':
					float x1, x2;
					//
					cout <<" Dividendo : ";
			  	   	cin >> x1;
				   	//
					cout <<" Divisor : ";
					cin >> x2;
					//
					if(x2 != 0){
						cout <<" Resultado = "<<divi(x1, x2)<<" ";
					}else{
						cout <<" Resultado = Não existe ";
					}
				   	break;
				default:
					cout <<" ERRO TENTE NOVAMENTE !!! \n";
					cout <<" Não existe está opição. \n\n";
				   	break;
			}
			cout <<"\n\n";
			system("pause");
		}
	}while(bus !=  '0');
}