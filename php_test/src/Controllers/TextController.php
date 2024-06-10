<?php 

namespace src\Controllers;

use src\Models\TestModel;

class TextController
{
    public function run(){
        $model = new TestModel;
        echo $model->getHello();
    }
}


?>