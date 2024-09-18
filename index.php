<?php

// declaracao de variaveis e impressao
$nome = 'lucas';

echo 'oi, sou o ' . $nome . '<br>'; // concatenacao usa-se o . (ponto), usa-se tag de html simples para pulo de linha fora do terminal, \n em caso de terminal

$lucas = 'algo';

echo 'oi tambem sou ' . $$nome;
echo '<br>';

// If statements
if ($nome == 'lucas') {
    echo 'verdadeiro';
} else {
    echo 'falso';
}

echo '<br>';

// operador '===' estritamente identico ou '!==' estritamente diferente | compara não somente o valor, como o tipo tambem
$idade = '26';

if ($idade !== '26') {
    echo 'verdadeiro idade';
} else {
    echo 'falso idade';
}
echo '<br>';
echo '<br>';
echo '<br>';

// Looping
for ($i = 0; $i <= 10; $i++) {
    echo $i;
    echo '<hr>';
}

$i2 = 0;
while ($i2 <= 10) {
    echo 'incrementando ' . $i2 . '<hr>';
    $i2++;
}

// Functions
printNumero(30);
echo '<br>';
printNumero(50);
echo '<br>';
printNumero('lucas');
echo '<br>';
$n = 'inicio';
function printNumero($n)
{
    echo $n;
}

// Classes
// Praticamente igual a declaracao de classes em Java ou qualquer outro tipo de linguagem orientada a objetos, com metodo construtor e funcoes
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function printNomeEIdade()
    {
        echo $this->nome;
        echo '<br>';
        echo $this->idade;
    }
}

$pessoa = new Pessoa('lucas', 26);

$pessoa->printNomeEIdade();
echo '<br>';

// Array
$arr = ['lucas', 'joao', 'gustavo'];
echo $arr[1];
