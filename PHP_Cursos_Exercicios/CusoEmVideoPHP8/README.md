//////////////////////////////////////////////////////////
- Tags de Uso do PHP:

<script language="php"> </script>   OFF -> Script PHP;

<?php ?>                             ON -> Super tag PHP;

<? ?>                                ON -> Short Open tag;

<% %>                               OFF -> ASP tag;

<?=print ""?>                        ON -> Short tag PHP;

//////////////////////////////////////////////////////////

- Variaveis Super Globais:

$_GET     = Iformações de uma requisição do tipo get do protocolo http 

$_POST    = Iformações de uma requisição do tipo get do protocolo http 

$_REQUEST = União das Super Globais $_GET $_POST $_COOKIES

//////////////////////////////////////////////////////////

- Funções Aritméticas:

abs()          = Valor absoluto;

base_convert() = Coverte o valor de binario decimal o hexa;

ceil()         = Arredonda para cima;

floor()        = Arredonda para baixo;

round()        = Arredonda de forma aritmética;

hypot()        = Calcula a hipotenusa;

intdiv()       = Divisão inteira;

min()          = Valor minimo de uma lista;

max()          = Valor maximo de uma lista;

pi() ou M_PI   = Valor de pi;

pow()          = Potencia de um numero;

sin()          = Calcula seno;

cos()          = Calcula coseno;

tan()          = Calcula tangente;

sqrt()         = Rais quadrada de um numero;

//////////////////////////////////////////////////////////

- Regras para nomes identificadores:

1 - Variáveis sempre começam om o símbolo $;

2 - O segundo Pode ser letra ou o símbolo _;

3 - Aceita caracteres[a-z], [A-Z], [0-9] e [_];

4 - Aceita carateres da tabela ASCII a partir de 128;

5 - Aceita caracteres acentuados como á, õ, ç;

6 - A linguagem é case sensitive em relação aos nomes;

7 - Nomes especiais como $this não podem ser usados;

//////////////////////////////////////////////////////////

-  Recomendações para dar nomes:

1 - Tente dar nomes claros e de fácil identificação;

2 - Evite nomes muito curto ou muito longos;

3 - Defina um padrão e siga em todo o projeto;

4 - Para variáveis, dê preferencia a letras minúsculas;

5 - Para constantes,dê preferência a letras maiúsculas;

6 - Use camelCase pra métodos e atributos;

7 - Use SNAKE_CASE para nomear costantes;

//////////////////////////////////////////////////////////

-  Tipos primitivos

>>> "RJ"   = String;

>>> 3.1415 = Float, double ou real;

>>> 17     = Int;

>>> true   = boolean;

//////////////////////////////////////////////////////////

-  Manipulação de String:

>> . = Operador de concatenação;

- Sequencias de Escape:

>> \"   = Mostras aspas duplas dentro da string;

>> \n   = Cria uma nova linha;

>> \t   = Tabulação horizontal;

>> \\   = Barra invertida;

>> \$   = Sinal de cifrão;

>> \u{} = Codepoint Unicode;

>>> "Curso"                         = Double quoted (Existe interpletação do conteudo);

>>> 'Curso'                         = Single quoted (Não Interpleta o conteudo);

>>> <<< NOME Aquivem a frase NOME;  = Heredoc (Existe interpletação do conteudo);

>>> <<< 'NOME' Aquivem a frase ;    = Nowdoc (Não Interpleta o conteudo);