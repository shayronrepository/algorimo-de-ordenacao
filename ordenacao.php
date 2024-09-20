<?php

function rapidaOrdenacao(array $array): array 
{
    if(count($array) < 2) {
        return $array;
    }

    $pivo = $array[intval(count($array) / 2)];

    $menores = [];
    $iguais = [];
    $maiores = [];

    foreach($array as $elemento){
        
        if($elemento < $pivo){
            
            $menores[] = $elemento;
            

        } elseif($elemento === $pivo) {
            
            $iguais[] = $elemento;
            
        } else {
            
            $maiores[] = $elemento;

        }
        
        
    }
    echo "Executando...";
    echo "\n\n-------------------------------------------------------------------------------------------\n\n";
    echo "Pivô: " . $pivo . "\n\n";
    echo "Menores: " . implode(',', $menores) . "\n\n";
    echo "Iguais: " . implode(',', $iguais) . "\n\n";
    echo "Maiores: " . implode(',', $maiores) . "\n\n";
    echo "-------------------------------------------------------------------------------------------\n\n"; 

    sleep(3);

    return array_merge(
        rapidaOrdenacao($menores),
        $iguais,
        rapidaOrdenacao($maiores)
    );
}

$numeros = [1000, 900, 50, 100, 75, 980, 500, 600, 850, 120, 45, 640, 35, 15, 10, 1, 5, 55, 60, 80];

echo "Executando...\n\n";

echo "Antes: " . implode(',', $numeros) . "\n\n";

echo "-------------------------------------------------------------------------------------------\n\n";

$arrays = rapidaOrdenacao($numeros);

echo "Depois: " . implode(',', $arrays) . "\n\n";

echo "Executado.\n\n";

echo "-------------------------------------------------------------------------------------------";
?>