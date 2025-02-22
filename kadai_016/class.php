<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_016</title>
</head>

<body>
   
   <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price,) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250, );

        // インスタンス$userの各プロパティの値を出力する
        print_r($food);
        ?>
    </p>


    <p>
        <?php
        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight,) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000 );

        // インスタンス$userの各プロパティの値を出力する
        print_r($animal);
        ?>
    </p>

    <p>
        <?php
        // クラスを定義する
        class Product {
            // プロパティを定義する                        
            public $price;

            // メソッドを定義する
            public function show_price() {
                echo $this->price . '<br>';
            }

        }

        // インスタンス化する
        $food = new Product();

        // メソッドにアクセスして実行する
        $food->show_price(250);
    

        // インスタンス化する
        $food = new Product();

        // プロパティにアクセスし、値を代入する
        $food->price = 250;
     

        // プロパティにアクセスし、値を出力する
        echo $food->price;
        ?>
    </p>

    <p>
        <?php
        // クラスを定義する
        class Product {
            // プロパティを定義する                        
            public $height;

            // メソッドを定義する
            public function show_height() {
                echo $this->height . '<br>';
            }

        }

        // インスタンス化する
        $animal = new Product();

        // メソッドにアクセスして実行する
        $animal->show_height(60);
    

        // インスタンス化する
        $animal = new Product();

        // プロパティにアクセスし、値を代入する
        $animal->height = 60;
     

        // プロパティにアクセスし、値を出力する
        echo $height->height;
        ?>
    </p>


</body>

</html>