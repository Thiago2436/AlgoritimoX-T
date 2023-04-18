<?php 
// função para imprimir um caractere em uma determinada posição
function printChar ($char, $row, $col, $size)
{
    if ($row == intval($size/2) || $col == intval ($size/2)){
        echo $char;
    }else{
        echo "&nbsp;.";
    }
    if($col == $size -1){
        echo PHP_EOL;
    }
}
// função para imprimir uma cruz de tamanho N
function printCross($size)
{
    for ($i = 0; $i < $size; $i++){
        for ($j = 0; $j < $size; $j++){
            printChar("*",$i,$j,$size);
        }
        echo "<br>";
    }
}

// Função para Imprimir um X de Tamnho N
function printX($size)
{
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            if ($i == $j || $i + $j == $size - 1) {
                echo "*";
            } else {
                echo "&nbsp;.";
            }
        }
        echo "<br>";
    }
}

// adiciona uma div com estilo para centralizar a saída
echo '<div style ="display: flex; justify-content:center;">';

// Chama a função printCross para imprimir a cruz de tamanho 5
printCross(5);
echo "<br>";

// Chama a função printX para imprimir o X de tamanho 5
printX(5);
 
// fecha a div

echo '</div>';

?>