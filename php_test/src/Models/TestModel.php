<?php 

namespace src\Models;

class TestModel
{
    private $text = 'Hello world!';

    public function getHello(){
        return $this->text;
    }
}

?>