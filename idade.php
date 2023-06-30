<?php

if (date('Y') > 2000) {
    $idade = date('Y') - 2000;
    if (date('m') < 11 || (date('m') == 11 && date('d') < 7)) {
        $idade--; // Subtrai 1 da idade se ainda não completou o aniversário deste ano
    }
} else {
    echo "troca o sinal";
}

?>
