#include <iostream>
using namespace std;
//
struct celula
{
		string nome;
	int idade;
	celula *nex;
};
///
// Recebe uma idade e devolve int
int recebeIdade()
{
	int idade;
	//
	cout <<" Idade: ";
	cin >> idade;
	//
	return idade;
}
// Recebe um nome e devolve uma string
string recebeNome()
{
	string nome;
	//
	cout <<"\n Nome: ";
	cin >> nome;
	//
	return nome;
}
// Função que acresenta mais uma celula(pesssoa) a lista no fim
celula *inserirNoFim(celula *lista, int idade, string nome)
{
	celula *nova = new celula;
	nova->nome = nome;
	nova->idade = idade;
	nova->nex = NULL;
	//
	if(lista != NULL)
	{
		celula *aux = lista;//primeiro dos ponteiros(inicio da lista)
		//
		while(aux->nex != NULL)
		{
			aux = aux->nex;
		}
		aux->nex = nova;

		return lista;
	}else
	{
		cout <<"\n Sua lista estava vazia e foi adicionado novos dados! \n";
		return nova;
	}
}
// Mostra na tela nomes cadastrados nos endereÇos de memoria
void imprimirLista(celula *lista)
{
	cout <<"\n..........................................\n\n";
	if(lista != NULL)
	{
		celula *aux = lista;
		while(aux != NULL)
		{
			cout<<"\t "<< aux->nome << endl;
			aux = aux -> nex;
		}
	}else
	{
		cout <<"\t  Sua lista estava vazia \n";
	}
	cout <<"\n..........................................\n";
}
// Imprime o cadatro da lista com a maior idade
void imprimirMaioIdade(celula *lista)
{
	//
	if(lista != NULL)
	{
		bool inicio = true;
		celula *aux = lista;//primeiro dos ponteiros(inicio da lista)
		celula *maior = NULL;
		//
		do{
			if(inicio)
			{
				maior = aux;
				inicio = false;
			}
			else{
				if(maior->idade < aux->idade)
				{
					maior = aux;
				}
			}
			aux = aux -> nex;
		}while(aux != NULL);
		cout <<"\n..........................................\n\n";
		cout << "\t " << maior->nome << ", " << maior->idade << ".";
		cout <<"\n\n..........................................\n";
	}else
	{
		cout <<"\n\t Sua lista estava vazia \n";
	}
}
void imprimirIdadeMaiorQ(celula *lista)
{
	//
	if(lista != NULL)
	{
		int idade = 0; 
		celula *aux = lista;//primeiro dos ponteiros(inicio da lista)
		//
		cout << " Parametro de busca: \n";
		idade = recebeIdade();
		cout <<"\n..........................................\n\n";
		do{
			if(idade < aux->idade)
			{
				cout << "\t " << aux->nome << ", " << aux->idade << ".\n";
			}
			aux = aux -> nex;
		}while(aux != NULL);
		cout <<"\n\n..........................................\n";
	}else
	{
		cout <<"\n\t Sua lista estava vazia \n";
	}
}
///
int main()
{	
	celula *lista = NULL;
	
	int op;
	//
	do{
		cout << "\n=*==*==*==*==*==*==*==*==*==*==*==*==*==*=\n\n";
		cout << "\t 0 - Sair                       \n";
		cout << "\t 1 - Inserir na lista           \n";
		cout << "\t 2 - Imprimir a lista           \n";
		cout << "\t 3 - Imprimir o mais velho      \n";
		cout << "\t 4 - Imprimir nomes pela idade  \n";
		cout << "\n=*==*==*==*==*==*==*==*==*==*==*==*==*==*=\n";
		//
		cout << " Opção: ";
		cin >> op;
		//
		switch(op)
		{
			case 0:
				cout << "\n\n=*==*==*==*==*==*==*==*==*==*==*==*==*==*=\n\n";
				cout << "\t    FIM DO PROGRAMA";
				cout << "\n\n=*==*==*==*==*==*==*==*==*==*==*==*==*==*=\n";
				break;
			case 1:
				lista = inserirNoFim(lista, recebeIdade(),recebeNome());
				break;
			case 2:
				imprimirLista(lista);
				break;
			case 3:
				imprimirMaioIdade(lista);
				break;
			case 4:
				imprimirIdadeMaiorQ(lista);
				break;
			default:
				cout << "\n Esta opição não existe !!! \n";
				break;
		}
	}while(op != 0);
	//
	return 0;
}