<?php

class Product{
    //Описать свойства класса (состояние). Это все переменные или параметры продукта.
    private $id;
    private $name;
    private $description;
    //Описать поведение класса (методы). Это все функции и то что он выводит в результате. Или не выводит но делает что-то с объектом.
    public function __construct($id,$name,$description){
        if(is_numeric($id)){
            $this->id = $id;
        }else{
            throw Exception(1, "is not numberic");
        }
        $this->name = $name;
        $this->description = $description;
    }
    //Описать поведение класса (методы).
    public function ProductDescrip(){
        echo $description;
    }
}

?>