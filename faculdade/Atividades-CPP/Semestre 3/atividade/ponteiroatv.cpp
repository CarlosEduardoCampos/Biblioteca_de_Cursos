#include <iostream>
using namespace std;
//
struct celula
{
	string nome;
	int idade;
	celula *nex;
};
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
// Função que acresenta mais uma celula(pessoa) a lista no incio
celula *inserirNoInicio(celula *lista, int idade, string nome)
{
	celula *nova = new celula;
	nova->nome = nome;
	nova->idade = idade;
	nova->nex = lista;
	lista = nova;
	return lista;
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
		cout <<" Sua lista estava vazia e foi adicionado novos dados! \n";
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
			cout<<" "<< aux->nome << endl;
			aux = aux -> nex;
		}
	}else
	{
		cout <<"\tSua lista estava vazia \n";
	}
	cout <<"\n..........................................\n";
}
// função que exclui uma celula(pessoa)
celula *removaItem(celula *lista)
{
	if( lista != NULL)
	{
		cout <<"\n..........................................\n\n";
		cout << " Excluir: ";
		string nome = recebeNome();// recebe nome da pessoa que vai escluir
		//
		celula *aux = lista; // posição atualdo pponteiro
		celula *ant = NULL;// posição anterior do ponteiro
		//
		bool acho = false;
		while(aux != NULL)
		{
			if(aux->nome == nome)// Teste de igualdade entre nome na celuala e nome recebido
			{
				acho = true;
				break;// pausa na execução do while
			}
			ant = aux;// antiga posição
			aux = aux->nex;// nova posição
		}
		if(!acho)
		{
			cout << "\n Nome nâo encontrado!! \n";
		}
		// caso esteja no inicio
		if(ant == NULL)
		{
			lista = aux->nex;// lista recebe posição atual
		}
		// caso esteja removendo do meio ou fim 
		else{
			ant->nex = aux->nex;// anterior recebe ponteiro da proxima celula
		}
		cout <<"\n..........................................\n\n";
		delete aux;
	}
	else{
		cout <<"\n..........................................\n\n";
		cout << "    Lista vazia impossivel excluir!! \n";
		cout <<"\n..........................................\n\n";
	}
	return lista;	
}
//
int main()
{
	celula *lista = NULL;
	celula *pessoa = NULL;
	int op;
	//
	do{
		cout << "\n=*==*==*==*==*==*==*==*==*==*==*==*==*==*=\n";
		cout << " 0 - Sair \n";
		cout << " 1 - Inserir no Inicio      \n";
		cout << " 2 - Inserir no Final       \n";
		cout << " 3 - Excluir Imprimir lista \n";
		cout << " 4 - Excluir Item           \n";
		cout << "\n=*==*==*==*==*==*==*==*==*==*==*==*==*==*=\n";
		//
		cout << " Opção: ";
		cin >> op;
		//
		switch(op)
		{
			case 0:
				break;
			case 1:
				int ops;
				do{
					cout << "\n=*==*==*==*==*==*==*==*==*==*==*==*==*==*=\n";
					cout << " 0 - Sair \n";
					cout << " 1 - Inserir no Inicio lista  \n";
					cout << " 2 - Inserir no Inicio pessoa \n";
					cout << "\n=*==*==*==*==*==*==*==*==*==*==*==*==*==*=\n";
					//
					cout << " Opção: ";
					cin >> ops;
					//
					switch(ops)
					{
						case 0:
							break;
						case 1:
							lista = inserirNoInicio(lista,recebeIdade(),recebeNome());
							break;
						case 2:
							pessoa = inserirNoInicio(pessoa,recebeIdade(),recebeNome());
							break;
						default:
							cout << "\n Esta opição não existe !!! \n";
							break;
					}
				}while(ops != 0);
				break;
			case 2:
				lista = inserirNoFim(lista, recebeIdade(),recebeNome());
				break;
			case 3:
				imprimirLista(lista);
				break;
			case 4:
				removaItem(lista);
				break;
			default:
				cout << "\n Esta opição não existe !!! \n";
				break;
		}
	}while(op != 0);
	//
	return 0;
}