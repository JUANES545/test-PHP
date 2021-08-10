<?php
if ($condition){
    #code...
} elseif($condition) {
    #code...
}else {
    #code...
}

switch ($variable) {
    case 'true':
        # code...
        break;

    case 'false':
        # code...
        break;

    default:
        # code... the last alternative
        break;
}


//consulta, usuarios
foreach ($datos as $row) {
    # code...
}

$a = 1000;
while ($a <= 10) {
    # code...
    $a++;
}

do {
    # code... utíl si deseamos que el código se ejecute
    # por lo menos una vez
} while ($a <= 10);


for ($i=0; $i < 10; $i++) { 
    # code...
}