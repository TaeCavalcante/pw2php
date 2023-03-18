
<?php

$vetor = Array(34,22,15,67,89,7,51,68,90,74);
for($i = 0; $i <count($vetor); $i++){

    if($i%2==0){
        echo "<p class='paragrafo'>Os valores pares do índice $vetor[$i] está na posição $i </p>";
    }

}
