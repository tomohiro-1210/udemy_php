<?php 
    $number1 = 2;
    $number2 = 6;
    $total = $number1 + $number2;
    echo $total;
    var_dump($total);

    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    $array3 = [7, 8, 9];
    $total_array = [$array1, $array2, $array3];
    echo($total_array[0][2]);
    var_dump($total_array);

    // 演習1
    $message = "Hello paiza";
    echo $message;

    // 演習2
    $message = "Hello paiza\n";
    echo $message;
    echo $message;

    // 演習3
    $message = "Hello paiza";
    echo $message;

    // 演習4
    $name = "paiza";
    echo "Hello " . $name;
?>