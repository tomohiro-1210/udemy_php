<?php 

    // 自動読み込み
    require_once __DIR__ . '/vendor/autoload.php';

    // Carbonlibrary読み込み
    use Carbon\Carbon;

    // 実行
    echo Carbon::now();

?>