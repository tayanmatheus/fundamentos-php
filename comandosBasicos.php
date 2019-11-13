<?php 
#Impressão
echo 'hello world <br /> <br />';

#Operações

echo 'Operação';
echo '<br />';
$A = 5;
$B = 3;

$SOMA = $A + $B;

print ($A );
echo '+';
print ($B );
echo '<br />A soma dos dois é : ';
print $SOMA;

#verificação de variaveis
echo '<br /> <br />';
echo 'if else';
echo '<br />';
if($A % 2 == 1){
    echo 'Número impar';
}
else {
    echo 'Número par';
}

 #laços é repetição

 #while
 echo '<br /> <br />';
 echo 'while';
 echo '<br />';
$i = 0;
 while ($i < 10){

    echo $i;
    $i++;
    echo ' ';
 }
 
 #do..while
 echo '<br /> <br />';
 echo 'do while. <br />';
 echo ' o do while execulta ao menos uma vez a condição';
 echo '<br />';
 $b = 0;

 do{
    echo $b;
    $b++;
    echo ' ';

 }while($b < 10);

#for
echo '<br /> <br />';
echo 'for <br />';

for ($c = 0; $c < 10; $c++){

    echo $c;
    echo ' ';
}
#foreach
echo '<br /> <br /> foreach <br />';
echo 'for para imprimir array ';
echo '<br />';

$d = [0,1,2,3,4,5,6,7,8,9];

foreach($d as $j){
    echo $j;
    echo ' ';
}

 echo '<br />print_r força o sistema a imprimir variavel<br />';