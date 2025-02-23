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
             // メソッドを定義する
             public function show_price(string $price) {
                $this->price = $price;
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250 );

         // メソッドにアクセスして実行する
         $food->show_price(250);

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
             // メソッドを定義する
             public function show_height(string $height) {
                $this->height = $height;
            }
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000 );

        // メソッドにアクセスして実行する
        $food->show_height(60);

        // インスタンス$userの各プロパティの値を出力する
        print_r($animal);
        ?>
    </p>


</body>

</html>