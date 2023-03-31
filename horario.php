<?php

for($i = 1; $i<28; $i++){

    $escolha = rand(1,2);

    if($escolha == 1){

        $hora = $manha = [
            'entrada' => '08:0' . rand(0, 4),
            'saida' => '14:0' . rand(0, 4),

        ];
    } else{
        $hora = $manhaExtra = [
            'entrada' => '07:5' . rand(6, 9),
            'saida' => '14:0' . rand(0, 5),

        ];
    }

    echo $hora['entrada'];
    echo '<br>';
}