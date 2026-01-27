<?php

  // Foodクラス
  class Food
  {
      public $name;
      public $price;

      // コンストラクタ
      public function __construct($name, $price)
      {
          $this->name  = $name;
          $this->price = $price;
      }

      // priceを表示するメソッド
      public function show_price()
      {
          echo $this->price . '<br>';
      }
  }

  // Animalクラス
  class Animal
  {
      public $name;
      public $height;
      public $weight;

      // コンストラクタ
      public function __construct($name, $height, $weight)
      {
          $this->name   = $name;
          $this->height = $height;
          $this->weight = $weight;
      }

      // heightを表示するメソッド
      public function show_height()
      {
          echo $this->height . '<br>';
      }
  }

  // インスタンス作成
  $food = new Food('Apple', 150);
  $animal = new Animal('Dog', 60, 10);

  // インスタンスを出力
  echo '<pre>';
  print_r($food);
  print_r($animal);
  echo '</pre>';

  // メソッドを実行
  $food->show_price();
  $animal->show_height();
?>