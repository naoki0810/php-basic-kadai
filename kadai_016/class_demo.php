<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎15章課題</title>
</head>

<body>
  <p>
    <?php
    class Food {
      // プロパティ定義
      private $name;
      private $price;

      // コンストラクタ定義
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // priceプロパティの値を出力するメソッド
      public function show_price() {
        echo $this->price;
      }
    }

    class Animal {
      // プロパティ定義
      private $name;
      private $height;
      private $weight; 

      // コンストラクタ定義
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // heightプロパティの値を出力するメソッド
      public function show_height() {
        echo $this->height;
      }
    }

    // インスタンス化
    $potato = new Food('potato', 250);
    $dog = new Animal('dog', 60, 5000);

    // インスタンスを画面に出力
    print_r($potato);
    echo '<br>';
    print_r($dog);
    echo '<br>';

    // メソッドにアクセスして実行
    $potato->show_price();
    echo '<br>';
    $dog->show_height();
    ?>
  </p>
</body>

</html>
