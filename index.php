<?php

require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Premium.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <title>OOP Ereditarietà</title>
    </head>
    <body class="bg-secondary">
        <main>
            <section class="text-center">
                <? $user = new User('Pasquale', 'Raso', 'pasquale.raso@hotmail.it') ?>
                <h1><?= $user->getFullName() ?></h1>
                <? $premium = new Premium('Giuseppe', 'Renzi', 'renzi@libero.it') ?>
                <h1><?= $premium->getDiscount() ?></h1>
                <?php
                try {
                    echo $premium->setCreditCard('ciao');
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                ?>
            </section>
        </main>
    </body>
</html>
<?php
    class User{

    }
    class Products extends User {
        // proprietà
        public $id;
        public $name;
        public $sport;
        public $accessory;
        public $brand;
        public $price;

        // instazio un prodotto 
        public function __construct($id, $name, $sport, $accessory, $brand, $price){
            $this->id = $id;
            $this->name = $name;
            $this->sport = $sport;
            $this->accessory = $accessory;
            $this->brand = $brand;
            $this->price = $price;  
        }
    }

    $products1 = new Products("1", "Northwave Origin Plus", "Ciclismo", "Scarpe", "NW", "79.55");
    var_dump($products1);
?> 
