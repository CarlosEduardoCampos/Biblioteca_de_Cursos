# include <iostream>
# include <cstdlib>
using namespace std;
# define linha cout <<"\n.....................................................................\n";
int main()
{// Cadastro dos candidatos.
	// Variaveis.
	string c_a = "",c_b,c_c,c_d,c_e = "";
	string p_a = "",p_b,p_c,p_d,p_e = "";
	// Recebendo dados.
	for(int i=1; i < 6; i++)
	{
		system("cls");
		string nome,part;
		//
		cout<< "\n........................... "<<"Candidato "<<i<<" .............................\n";
		cout << "Nome do candidato: ";
		cin >> nome;
		//
		while(nome == "")
		{
			cout << "\n............................ "<<" !!ERRO!! "<<" .............................\n";
			cout << "Nome do candidato: ";
			cin >> nome;
		}
		cout <<"\n";
		cout << "Partido do candidato: ";
		cin >> part;
		while(nome == "")
		{
			cout << "\n............................ "<<" !!ERRO!! "<<" .............................\n";
			cout << "Partido do candidato: ";
			cin >> part;
		}
		//
		if(i == 1)
		{
			c_a = nome;
			p_a = part;		
		}
		else if(i == 2)
		{
			c_b = nome;
			p_b = part;		
		}
		else if(i == 3)
		{
			c_c = nome;
			p_c = part;		
		}
		else if(i == 4)
		{
			c_d = nome;
			p_d = part;		
		}
		else{
			c_e = nome;
			p_e= part;		
		}
	}// Votação.
	// Variaveis.
	bool sair = true;
	string res = "";
	int voto = 0;
	int votc_a = 0,votc_b = 0,votc_c = 0,votc_d = 0,votc_e = 0,n_b = 0,ind = 0;
	//
	while(sair)
	{//Menu de orientação.
		system("cls");
		//
		cout << "\n............................ "<<" Votacao "<<" ..............................\n";
		cout <<"Menu de opcoes:";
		linha
		cout <<" 1- "<< c_a <<" / "<< p_a <<"\n";
		cout <<" 2- "<< c_b <<" / "<< p_b <<"\n";
		cout <<" 3- "<< c_c <<" / "<< p_c <<"\n";
		cout <<" 4- "<< c_d <<" / "<< p_d <<"\n";
		cout <<" 5- "<< c_e <<" / "<< p_e <<"\n";
		cout <<" 6- Voto valido como indeciso.\n";
		cout <<" 7- Voto valido como nulo ou branco.\n";
		linha
		// Recebendo voto
		cout << " Numero do candidato em que votara: ";
		cin >> voto;
		cout<<"\n";
		//
		if (voto > 7)
		{
			while(voto > 7)
			{
				cout << "\n............................ "<<" !!ERRO!! "<<" .............................\n";
				cout << " Numero do candidato em que votara: ";
				cin >> voto;
				cout<<"\n";	
			}
		}
		if(voto == 1)
		{
			votc_a+=1;
		}
		else if(voto == 2)
		{
			votc_b+=1;
		}
		else if(voto == 3)
		{
			votc_c+=1;
		}
		else if(voto == 4)
		{
			votc_d+=1;
		}
		else if(voto == 5)
		{
			votc_e+=1;
		}
		else if(voto == 6)
		{
			ind+=1;
		}
		else
		{
			n_b+=1;
		}
		// Limite do while.
		cout << " Terminar? [S/N] ";
		cin >> 	res;
		//
		(res == "s" || res == "S") ? sair = false: sair = true;
	}
	// Variaveis.
	int resu,votsc, rej;
	int total =  votc_a + votc_b + votc_c + votc_d + votc_e + n_b + ind;
	float porcemA,porcemR;
	string candidato,partido,ops;
	bool fim = true; 
	//	
	while(fim)
	{
		system("cls");
		//
		cout << "\n............................ "<<" Votacao "<<" ..............................\n";
		cout <<"Menu de opcoes:";
		linha
		cout <<" 1- "<< c_a <<" / "<< p_a <<"\n";
		cout <<" 2- "<< c_b <<" / "<< p_b <<"\n";
		cout <<" 3- "<< c_c <<" / "<< p_c <<"\n";
		cout <<" 4- "<< c_d <<" / "<< p_d <<"\n";
		cout <<" 5- "<< c_e <<" / "<< p_e <<"\n";
		cout <<" 6- Voto valido como indeciso.\n";
		cout <<" 7- Voto valido como nulo ou branco.\n";
		linha
		//
		cout <<"Mostrar resutados do cadidato: ";
		cin >> resu;
		if(resu > 7)
		{
			while(resu > 7)
			{
				cout << "\n............................ "<<" !!ERRO!! "<<" .............................\n";
				cout <<"Mostrar resutados do cadidato: ";
				cin >> resu;
			}
		}
		//	
		if(resu == 1)
		{
			candidato = c_a;
			partido = p_a;
			votsc = votc_a;
			rej = total - votc_a;
			porcemA = (votc_a*100)/total ;
			porcemR = 100 - porcemA;	
		}
		else if(resu == 2)
		{
			votsc = votc_b;
			rej = total - votc_b;
			candidato = c_b;
			partido = p_b;
			porcemA = (votc_b*100)/total ;
			porcemR = 100 - porcemA;	
		}
		else if(resu == 3)
		{
			votsc = votc_c;
			rej = total - votc_c;
			candidato = c_c;
			partido = p_c;
			porcemA = (votc_c*100)/total ;
			porcemR = 100 - porcemA;		
		}
		else if(resu == 4)
		{
			votsc = votc_d;
			rej = total - votc_d;
			candidato = c_d;
			partido = p_d;
			porcemA = (votc_d*100)/total ;
			porcemR = 100 - porcemA;
		}
		else if(resu == 5)
		{
			votsc = votc_e;
			rej = total - votc_e;
			candidato = c_e;
			partido = p_e;
			porcemA = (votc_e*100)/total ;
			porcemR = 100 - porcemA;
		}
		else if(resu == 6)
		{
			votsc = ind;
			rej = total - ind;
			candidato = "INDECISO";
			partido = "SEM PARTIDO";
			porcemA = (ind*100)/total ;
			porcemR = 100 - porcemA; 
		}
		else if(resu == 7)
		{
			votsc = n_b;
			rej = total - n_b;
			candidato = "NULO OU BRANCO";
			partido = "SEM PARTIDO";
			porcemA = (n_b*100)/total ;
			porcemR = 100 - porcemA;	
		}
		cout <<" Votos registrados para: "<<candidato<<" / "<<partido<<"\n";
		cout <<" Aceitacao: "<<votsc<<" // Rejeicao: "<<rej<<"\n";
		cout <<" Aceitacao: "<<porcemA<<"%"<<"// Rejeicao: "<<porcemR<<"%\n";
		// Limite do while.
		cout << " Terminar? [S/N] ";
		cin >> 	ops;
		//
		(ops == "s" || ops == "S") ? fim = false : fim = true;
	}
}
