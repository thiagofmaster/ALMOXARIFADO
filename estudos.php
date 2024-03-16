
<?php

//Função
echo "Função <br>";

function soma($n1, $n2){
  $soma =$n1+$n2;
  return $soma;
}
$x = soma(2,3);
echo "<br>O resultado da função soma:".$x;
$y = soma($x, 5);
echo "<br> O resultado da função soma = $x  . E o resultado de soma + 5 = $y";

//Foreach
echo "<br><br>Foreach <br><hr>";

$lista_coisas = ['Abacate', 'Mãmão', 'Abacaxi', 15, 2548, 'Manga']; 

foreach($lista_coisas as $i){

  switch($i){
    case 'Abacate' : echo "$i : Puro ou com aveia e granola <br>"; break;
    case 'Manga' : echo "$i : A melhor fruta que ja vi na vida <br>"; break;
    

  }
  
}

//switch break
echo "SWITCH <br><br>";



//FOR
echo "FOR <br><br>";

$lista_coisas = ['Abacate', 'Mãmão', 'Abacaxi', 15, 2548, 'Manga']; 

for($i =0; $i < count($lista_coisas); $i++){
  echo $lista_coisas[$i]. '<br>';
}


echo "<br><hr>";

//Estruturas condicionais
echo "Estruturas condicionais <br><br>";

$a = 100;
$b = "100";
if( $a === $b){
  echo "Os valores são iguais";
} elseif($a == $b) {
  echo "Os valores são iguais e os tipos de dados são diferentes";
}
echo "<br><hr>";
$n = 5;
if($n % 2 ==0){
  echo "O $n é PAR";
} else {
  echo "O numero $n é IMPAR"; 
}

echo "<br><hr>";

$nome ="Thiago Ferreira";
var_dump($nome);

echo "<hr>";

if(is_string($nome)){
  echo "É uma string";
} else {
  echo "<br>Não é uma string";
} echo "<hr>";

$idade =35.9;
var_dump($idade);
if(is_float($idade)){
  echo "É um float";
} else {
  echo "Não é um Float";
} echo "<hr><br>";

//boolean
$admin = false;
var_dump($admin);
echo "<hr>";

//Array 
echo "Trabalhando com array <br>";
$carro = array("Gol", "Camaro", "Uno", 12, 12.5);
var_dump($carro);
echo "<hr>";

echo $carro[0];
echo "<hr>";



// Object
class Cliente{
  public $nome;
  public function atribuirNome($nome){
  $this->$nome = $nome;
  }
}
$cliente = new Cliente();
var_dump($cliente);

echo "<hr>";

$nome = "Thiago Ferreira";
function exibirNome(){
  global $nome;
  echo $nome;
} echo "<hr><br>";
$a = 2;
$b = 2;


//Constante
define("NOME", "Thiago Ferreira");
define("IDADE", 35);
echo 'Meu nome é '.NOME.' e minha idade é '.IDADE;

echo "<hr><br>";
//Array
$carros = array("BMW", "Hilux", "Veloster");
$carros[5] = "Amarok";
$carros[] = "Camaro";

//print_r($carros[2]);
$clientes = ["Thiago ", "Rodrigo", "Flavia"]; 
$totalClientes = count($clientes);

//Foreach
foreach($carros as $valor) {
  echo $valor."<br>";
  echo "<hr><br>";
}
##Repetição FOR
for($valor=1; $valor <= 15; $valor++)
  echo $valor."<br>";
  
?>