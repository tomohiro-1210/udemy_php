<?php 
    $name = trim(fgets(STDIN)); //trimは改行などを削除する。fgetsはファイルなどの入力データを読み取る。
    echo "Hello" . $name;
    
    $data2 = trin(fgets(STDIN));
    echo $data2;

    $data3 = trim(fgets(STDIN));
    echo $data3;

    $data4 = trim(fgets(STDIN));
    echo $data4;

    $data_array = [$data2 ,$data3, $data4];
    var_dump($data_array);

    // 演習1
    $message = trim(fgets(STDIN));
    echo $message . "\n";


    // 演習2
    $message = trim(fgets(STDIN));
    echo $message . "\n";

    $laravel = trim(fgets(STDIN));
    echo $laravel;

    // 演習3
    $number = trim(fgets(STDIN));
    echo $number;

?>