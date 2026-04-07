#include <stdlib.h>
#include <iostream>
#include <locale>
using namespace std;
//
struct aluno
{
	float nota;
	string nome;
	string codigo;
	aluno *nex;
};

float setNota(float num=0.0)
{
	cout <<"\n>>>Nota: ";
	cin >> num;
	return num;
}

string setNome(string strNome="")
{
	cout <<"\n>>>Nome: ";
	cin >> strNome;
	return strNome;
}

string setCodigo(string cod="")
{
	cout <<"\n>>>Codigo: ";
	cin >> cod;
	return cod;
}

//Mostra menu de opções e retorna um char[1]
char menu(){
	system("cls");
	char exc;
	cout <<"\n............ MENU ............\n";
	cout <<"\n   0 - SAIR DO PROGRAMA       \n";
	cout <<"\n   1 - CADASTRE ALUNO AQUI    \n";
	cout <<"\n   2 - REMOVA ALUNO AQUI      \n";
	cout <<"\n   3 - IMPRIMIR LISTA         \n";
	cout <<"\n............ MENU ............\n";
	cout <<"\n";
	cout <<" EXECUTAR >>> ";
	cin >> exc;
	
	// Trata char[1] antes da saida da função
	if(exc == '0' || exc == '1' || exc == '2' || exc == '3')
	{
		return exc;
	}
	else{
		system("cls");
		cout <<"\n\n !!! ERRO OPÇÃO NÃO ENCONTRADA !!!\n";
		menu();
	}
}

// Mostra na tela nomes cadastrados e notasnos endereÇos de memoria
void toString(aluno *lista, int total)
{
	cout <<"\n..........................................\n";
	if(lista != NULL)
	{
		aluno *aux = lista;
		int maior = 0;
		int menor = 0;
		while(aux != NULL)
		{
			if(aux->nota >= 6)maior++;else menor++;
			cout <<"\t>>>"<< aux->nome << "\n";
			cout<<"\tCódigo: "<<aux->codigo <<" Nota: "<< aux->nota <<" \n\n";
			aux = aux -> nex;
		}
		cout<<"TOTAL = "<<total<<"\tNOTAS >= 6 = "<<maior<<"\tNOTAS < 6 = "<<menor;
	}else
	{
		cout <<"\tSua lista estava vazia \n";
	}
	cout <<"\n..........................................\n";
}

//Cria novo aluno eo aloca na ultima posição
aluno *cadastro(aluno *lista, float nota, string nome, string cod,int contador = 0)
{
	aluno *nova  = new aluno;
	nova->nome   = nome;
	nova->codigo = cod;
	nova->nex    = NULL;
	//
	switch(contador)
	{
		case 0:
			nova->nota = nota +(nota*0.10);
			break;
		
		case 1:
			nova->nota = nota +(nota*0.075);
			break;
		
		case 2:
			nova->nota = nota +(nota*0.05);
			break;
		
		default:
			nova->nota = nota +(nota*(5/100));
			break;
	}
	if(lista != NULL)
	{
		aluno *aux = lista;//primeiro dos ponteiros(inicio da lista)
		aluno *ant = NULL;
		//
		bool troca = false;
		if(aux->nota > nova->nota && !troca)
		{
			troca = true;
			nova->nex = aux;
			return nova;
		}
		while(aux->nex != NULL)
		{
			ant = aux;
			aux = aux->nex;
			if(aux->nota > nova->nota && !troca)
			{
				ant->nex = nova;
				nova->nex = aux;
				troca = true;
			}
		}
		if(aux->nota < nova->nota && !troca)
		{
			troca = true;
			aux->nex = nova;
		}
		else if(!troca);
		{
			cout <<"\n\tSUCESSO: CADASTRO REALIZADO \n";
		}
		return lista;
	}else
	{
		cout <<"\n Sua lista estava vazia e foi adicionado novos dados! \n";
		return nova;
	}
}

//Apartir do codigo busca na memoria um aluno eo elimina
aluno *remover(aluno *lista, string cod)
{
	if( lista != NULL)
	{
		cout <<"\n..........................................\n\n";
		//
		aluno *aux = lista; // posição atualdo pponteiro
		aluno *ant = NULL;// posição anterior do ponteiro
		//
		bool acho = false;
		while(aux != NULL)
		{
			if(aux->codigo == cod)// Teste de igualdade entre nome na celuala e nome recebido
			{
				acho = true;
				break;// pausa na execução do while
			}
			ant = aux;// antiga posição
			aux = aux->nex;// nova posição
		}
		if(!acho)
		{
			cout << "\n Código nâo encontrado!! \n";
		}
		else
		{
			// caso esteja no inicio
			if(ant == NULL)
			{
				lista = aux->nex;// lista recebe posição atual
			}
			// caso esteja removendo do meio ou fim 
			else{
				ant->nex = aux->nex;// anterior recebe ponteiro da proxima celula
			}
			delete aux;
		}
		cout <<"\n..........................................\n\n";
	}
	else{
		cout <<"\n..........................................\n\n";
		cout << "    Lista vazia impossivel excluir!! \n";
		cout <<"\n..........................................\n\n";
	}
	return lista;	
}


//
int main(int argc, char** argv)
{
	setlocale(LC_ALL,"portuguese");
	
	aluno *lista = NULL;
	char op = menu();
	int cont = 0;
	do{
		switch(op)
		{
			case '0':
				while(lista != NULL)
				{
					aluno *aux = lista;
					lista = lista->nex;
					delete aux;
				}
				cout << "\n\n FIM DO PROGRAMA \n\n";
				break;
			
			case '1':
				lista = cadastro(lista, setNota(), setNome(), setCodigo(), cont);
				system("pause");
				cont ++;
				op = menu();
				break;
			
			case '2':
				lista = remover(lista, setCodigo());
				system("pause");
				op = menu();
				break;
			
			case '3':
				toString(lista, cont);
				system("pause");
				op = menu();
				break;
			
			default:
				system("cls");
				cout <<"\n\n !!! ERRO OPÇÃO NÃO ENCONTRADA !!!\n";
				system("pause");
				break;
		}
	}while(op != '0');
	
	return 0;
}
