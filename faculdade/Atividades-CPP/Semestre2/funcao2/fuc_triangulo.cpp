#include <iostream>
#include <stdlib.h>
#include <locale>
using namespace std;
//
string tri(float y, float x = 0.0, float z = 0.0)
{
	string tex; // texto retornado.
	int vai = 0; // condição de existencia.
	int ma, me, pe; // maior medio pequeno.
	//
	if(x > y && x > z)// x maior.
	{
		ma = x;
		if(y > z)// y medio z pequeno.
		{
			me = y;
			pe = z;
		}
		else // z medio y pequeno.
		{ 
			me = z;
			pe = y;
		}
	}
	else if(y > x && y > z)// y maior.
	{
		ma = y;
		if(x > z)// x medio z pequeno.
		{
			me = x;
			pe = z;
		}
		else // z medio x pequeno.
		{ 
			me = z;
			pe = x;
		}
	}
	else if(z > x && y < z)// z maior.
	{
		ma = z;
		if(x > y)// x medio y pequeno.
		{
			me = x;
			pe = y;
		}
		else // y medio x pequeno.
		{ 
			me = y;
			pe = x;
		}
	}
	else{
		ma = x;
		me = y;
		pe = z;
	}
	// Teste de Validade de Triângulos.
	if(ma < (me + pe) && ma > (me - pe))
	{
		vai = 1;
	}
	//
	if(vai == 1)
	{
		if(x == y && y == z)// tede de igualdade de dois lados.
		{
			tex = "\n Triângulo Equilátero \n";
		}
		else if(x == y || y == z || z == x)
		{
			tex = "\n Triângulo Isósceles \n";
		}
		else if(x != y && y != z && z != x)
		{
			tex = "\n Triângulo Escaleno \n";
		}	
	}
	else{
		tex = "\n Estas medidas não formam um triângulo. \n";
	}
	return tex;
}
int main()
{
	setlocale(LC_ALL,"portuguese");
	//
	float a, b, c;
	//
	cout <<" Lado 1: ";
	cin >> a;
	//
	cout <<" Lado 2: ";
	cin >> b;
	//
	cout <<" Lado 3: ";
	cin >> c;
	//
	cout << tri(a, b, c);
	//
	system("pause");
	return 0;
}