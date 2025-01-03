<?php
$name = "Михаил"; // так создаётся переменная 

//$person [];  так создаётся aссоциативный массив
$person = [
   "name" => "Михаил",
   "surname" => "Пупкин"
];
echo $person ["name"];

// так создаётся функция 
function sayHello()
{
   echo "Привет"; 
   echo "Как дела?";
}
//------------------------
sayHello(); // так функция вызывается 

// так создаётся класс 
class Person 
{
   $name = "Михаил";
   $surname = "Пупкин"; // в контексте класса переменные будут называться атрибутами 

   function sayHello() // в контексте класса функции будут называться методами
   {
   echo "Привет"; 
   echo "Как дела?";
   }
}
$misha = new Person;
echo $misha->name; 

//Теперь мы можем плодить "людей"
class Person 
{
   $name;
   $surname; // в контексте класса переменные будут называться атрибутами 

   function sayHello() // в контексте класса функции будут называться методами
   {
   echo "Привет"; 
   echo "Как дела?";
   }
}
$misha = new Person; 
$misha->name = "Misha"; 
$petya = new Person; 
$petya->name = "Petya"; 
echo $misha->name; // так мы можем вывести атрибут name класса Person 

// каждая класс имеет скрытые функции. Например: function __construct 
class Person 
{
   public $name; // Объявляем атрибут класса
   public $surname; // В контексте класса переменные будут называться атрибутами 

   // Конструктор
   public function __construct($nameOutside) 
   {
       $this->name = $nameOutside; // Инициализация атрибута
   }

   // Метод класса
   public function sayHello() 
   {
       echo "Привет! ";
       echo "Как дела?";
   }
}

// Создаём объект класса
$misha = new Person("Misha");

// Выводим атрибут name
echo $misha->name;

// Вызываем метод sayHello
$misha->sayHello();