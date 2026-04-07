#include <iostream>
#include <string.h>
#include <stdio.h>
#include <stack>
#include <queue>

using namespace std;

void deletar(stack<char> &pilha)
{
	while(!pilha.empty())
	{
		pilha.pop();
	}
}

void imprimir(stack<char> pilha)
{
	if(!pilha.empty())
	{
		while(!pilha.empty())
		{
			cout << pilha.top();
			pilha.pop();
		}
	}
	else{
		cout<<"Pilha vazia!";
	}
	cout << "\n\n";  
}

void imprimir(stack<int> pilha)
{
	if(!pilha.empty())
	{
		while(!pilha.empty())
		{
			cout << pilha.top();
			pilha.pop();
		}
	}
	else{
		cout<<"Pilha vazia!";
	}
	cout << "\n\n";  
}

void imprimir(queue<int> pilha)
{
	if(!pilha.empty())
	{
		while(!pilha.empty())
		{
			cout << pilha.front();
			pilha.pop();
		}
	}
	else{
		cout<<"Fila vazia!";
	}

	cout << "\n\n";  
}

stack<char> charPilha(char frase[100])
{
	stack<char> pilha;
	
	for(int i=0; i<=strlen(frase); i++)
	{
		pilha.push(frase[i]);
	}
	return pilha;
}

stack<char> charPilhaF(char frase[100])
{
	stack<char> pilha;
	bool parada=false;

	for(int i=strlen(frase); i>=0; i--)
	{
		if(frase[i]==' ' && i!=0)
		{
			for(int j=i; j<=strlen(frase); j++)
			{
				pilha.push(frase[j]);
			}
		}
		
		if(i==0 && !parada)
		{
			for(int j=0; j<=strlen(frase) && frase[j]!=' ' ; j++)
			{
				if(!parada)
				{
					pilha.push(frase[j]);
				}
				if(frase[j]==' ')
				{
					parada = true;
				}
			}
		}
	}
	return pilha;
}

void cadastraNumero(stack<int> &pilha, int num)
{
  pilha.push(num);
}

int setNum(){
  int num;
  cout << "Digite um numero: ";
  cin >> num;

  return num;
}

void filaparImpar(stack<int> pilha, queue<int> &par, queue<int> &impar)
{
  while(!pilha.empty())
    {
      int resto = pilha.top() % 2;
        if(resto == 0){
          par.push(pilha.top());
        }//fim if testa resto 0
        else{
          impar.push(pilha.top());
        }
      pilha.pop();
    }
}

int main(int argc, char** argv)
{
	char palavra[30];
	char frase[100];
	char esarf[100];
	stack<char> pilha;
	stack<int> intpilha;
	queue<int> filaPar;
	queue<int> filaImpar;
	//queue<char> fila;
	
	printf("texto: ");
	gets(palavra);
	imprimir(charPilha(palavra));

	cout<<"so funciona com duas palavras\n";
	printf("texto: ");
	gets(frase);
	
	imprimir(charPilhaF(frase));
	
	int num = setNum();
	while(num >= 1)
	{
    	cadastraNumero(intpilha, num);
    	num = setNum();
	}
	filaparImpar(intpilha, filaPar, filaImpar);
	cout << "----------- pilnha ------------\n";
	imprimir(intpilha);
	cout << "---------- Fila Par -----------\n";
	imprimir(filaPar);
	cout << "--------- Fila Impar ----------\n";
	imprimir(filaImpar);
	cout << "-------------------------------\n";	
}