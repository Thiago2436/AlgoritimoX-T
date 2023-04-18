<?php
// Definição da classe ShapePrinter
class ShapePrinter {

    // Função para imprimir um caractere em uma determinada posição
    private function printChar($char, $row, $col, $size) {
        // Verifica se a posição está no meio da matriz
        if ($row == intval($size / 2) || $col == intval($size / 2)) {
            // Imprime o caractere
            echo $char;
        } else {
            // Imprime um espaço em branco
            echo "&nbsp;.";
        }
        // Verifica se é o final da linha e adiciona uma quebra de linha
        if ($col == $size - 1) {
            echo PHP_EOL;
        }
    }

    // Função para imprimir uma cruz de tamanho N
    public function printCross($size) {
        // Loop através das linhas
        for ($i = 0; $i < $size; $i++) {
            // Loop através das colunas
            for ($j = 0; $j < $size; $j++) {
                // Chama a função printChar para imprimir o caractere apropriado
                $this->printChar("*", $i, $j, $size);
            }
            // Adiciona uma quebra de linha
            echo "<br>";
        }
    }

    // Função para imprimir um X de Tamnho N
    public function printX($size) {
        // Loop através das linhas
        for ($i = 0; $i < $size; $i++) {
            // Loop através das colunas
            for ($j = 0; $j < $size; $j++) {
                // Verifica se é uma das diagonais
                if ($i == $j || $i + $j == $size - 1) {
                    // Imprime o caractere
                    echo "*";
                } else {
                    // Imprime um espaço em branco
                    echo "&nbsp;.";
                }
            }
            // Adiciona uma quebra de linha
            echo "<br>";
        }
    }

    // Função para imprimir as formas em uma div centralizada
    public function printShapes($size) {
        // Adiciona uma div com estilo para centralizar a saída
        echo '<div style ="display: flex; justify-content:center;">';
        
        // Chama a função printCross para imprimir a cruz de tamanho N
        $this->printCross($size);
        echo "<br>";
        
        // Chama a função printX para imprimir o X de tamanho N
        $this->printX($size);
        
        // Fecha a div
        echo '</div>';
    }
}

// Cria uma instância da classe ShapePrinter
$printer = new ShapePrinter();

// Chama a função printShapes para imprimir as formas
$printer->printShapes(5);
?>
