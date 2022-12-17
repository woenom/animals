<?php
class Animal{
  public $noise,$food,$location;
  function __construct($noise,$food,$location){
    $this->noise=$noise;
    $this->food=$food;
    $this->location=$location;
  }
  function makeNoise(){
    echo ('Кто-то издаёт звук: '.$this->noise.' , ');
  }
  function eat(){
    echo ('Он ест: '.$this->food.' , ');
  }
  function sleep(){
    echo ('Все не спят!!! '.$this->location.'<br>');
  }
}
class Dog extends Animal{}
class Cat extends Animal{}
class HolHourse extends Animal{}
$y=new Animal('Никакого','Ничего','Точно');
$y->makeNoise();
$y->eat();
$y->sleep();
$y=new Dog('ГАВ-ГАВ','Собачий корм','А не, спит, как убитый');
$y->makeNoise();
$y->eat();
$y->sleep();
$y=new Cat('Мяу','Кошачий корм','А может и нет');
$y->makeNoise();
$y->eat();
$y->sleep();
$y=new HolHourse('ИГОГОШЕНКИ','Сено','Спит стоя на другой лошади');
$y->makeNoise();
$y->eat();
$y->sleep();
?>