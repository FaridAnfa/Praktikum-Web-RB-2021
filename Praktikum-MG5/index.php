<?php
function operator(){
    echo "<h2>Kalkulator</h2>";
    $a = 20;
    $b = 10;

    echo "Bilangan 1 : " . $a . "<br> Bilangan 2 : " . $b;
    echo "<br><br>Berikut merupakan hasil dari setiap operasi ";

    /*Operator aritmatika penjumlahan*/
    echo "<br><br>PENJUMLAHAN <br> Operator : + <br> Hasil : ".($a+$b);

    /*Operator aritmatika pengurangan*/
    echo "<br><br>PENGURANGAN <br> Operator : - <br> Hasil : ".($a-$b);

    /*Operator aritmatika perkalian*/
    echo "<br><br>PERKALIAN <br> Operator : * <br> Hasil : ".($a*$b);

    /*Operator aritmatika pembagian*/
    echo "<br><br>PEMBAGIAN <br> Operator : / <br> Hasil : ".($a/$b);

    /*Operator aritmatika modulo*/
    echo "<br><br>MODULUS <br> Operator : % <br> Hasil : ".($a%$b);
}


function array_random(){
    echo "<h2> RANDOM ARRAY</h2>";

    $arr = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "victor", "sara", "carlo");
    shuffle($arr);
    
    foreach ($arr as $data){
        echo "$data<br>";
    }
}



function prima(){
    echo " <h2>BILANGAN PRIMA</h2>";
    for($i = 2; $i <=50; $i++){
        for($j = 2; $j<$i ;$j++){

            if($i % $j == 0){
                break;

            }
            else if ($i-1 == $j){
                echo "$i ";
                break;
            }
        }
    }
}
operator();
array_random();
prima();
?>