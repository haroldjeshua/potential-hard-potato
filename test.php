<?php

    include 'devs.php';
    require 'devs.php';

    $title = 'PHP Test';
    $header = 'PHP Tuts';
    $num = 69;
    $name = 'harv';

    // $radius = 50;
    // $pi = 3.14;

    // // basic op: * / + - **
    // echo $pi * $radius**2;

    // // order of op: B I D M A S
    // echo 2 * (4 + 9) / 3;

    // // inc + dec
    // echo $radius++;
    // echo $radius;

    // $age = 20;

    // // $age = $age + 10;
    // $age += 10;
    // echo $age;

    // echo pi();


    // // ARRAYS
    // $myIdentities = ['harold', 'jeshua', 'junjun', 'harv'];

    // echo $myIdentities[1];

    // $myIdentities1 = array('camille', 'joy', 'tiffany');

    // echo $myIdentities1[2];

    // echo $ages = ['20', '25', '27'];
    // $ages[1] = 24;
    // $ages[] = 60;
    // array_push($ages, 70);
    // // echo print_r($ages);
    
    // echo count($ages);

    // $loveBirds = array_merge($myIdentities, $myIdentities1); 
    // print_r($loveBirds);

    // // ASSOCIATIVE ARRAY 1 (k v pairs):

    // $groupOne = ['harold'=>'black', 'jeshua'=>'white', 'harv'=>'grey'];
    // echo $groupOne['jeshua'];
    // print_r($groupOne);

    // // ASSOCIATIVE ARRAY 2
    // $groupTwo = array('camille'=>'pink', 'joy'=>'yellow', 'tiffany'=>'red');
    // print_r($groupTwo);

    // $groupTwo['tiffany'] = 'rainbow';
    // print_r($groupTwo);

    // echo count($groupTwo);

    // $groupThree = array_merge($groupOne, $groupTwo);
    // print_r($groupThree);


    // MULTI-DIMENSIONAL ARRAY
    $blogs = [
        ['title'=>'harv party', 'author'=>'harv', 'content'=>'lorem', 'likes'=>30],
        ['title'=>'camille party', 'author'=>'camille', 'content'=>'lorem', 'likes'=>69],
        ['title'=>'our babies', 'author'=>'baby', 'content'=>'lorem', 'likes'=>32]
    ];

    // print_r($blogs[1][1]);
    echo $blogs[2]['author'];
    echo count($blogs) . "<br/>";
    $blogs[] = ['title'=>'jeshua party', 'author'=>'jeshua', 'content'=>'test', 'likes'=> 99];
    
    $popped = array_pop($blogs);
    // print_r($popped);

    // LOOPS
    $mes = ['harold', 'jeshua', 'harv'];
    
    // for ($i = 0; $i < count($mes); $i++) {
    //     echo $mes[$i] . "<br/>";
    // }


    // foreach ($mes as $me) {
    //     echo $me . "<br/>";
    // }

    $products = [
        ['name'=>'shiny star', 'price' => 20],
        ['name'=>'green shell', 'price' => 10],
        ['name'=>'red shell', 'price' => 15],
        ['name'=>'gold coin', 'price' => 5],
        ['name'=>'lightning bold', 'price' => 40],
        ['name'=>'banana skin', 'price' => 2]
    ];

    // foreach ($products as $product) {
    //     echo $product['name'] . ' - ' . $product['price'];
    //     echo '<br/>';
    // }

    // $i = 0;

    // while ($i < count($products)) {
    //     echo $products[$i]['name'];
    //     echo '<br/>';
    //     $i++;

    // }

    foreach ($products as $product) {
        // if ($product['price'] < 15) {
        //     echo $product['name'] . '<br/>';
        // }
        if ($product['name'] === 'lightning bold') {
            break;
        }

        if ($product['price'] > 15) {
            continue;
        }

        echo $product['name'] . '<br/>';
    }

    function sayGreeting($name = 'harv', $time = 'morning') {
        echo "good $time $name, you're awesome <br/>";
    }

    sayGreeting('edrav', 'night');

    function formatProduct($product) {
        // echo "{$product['name']} costs ${$product['price']} to buy <br/>"; 
        return "{$product['name']} costs ${$product['price']} to buy <br/>";
    }

    $formatted = formatProduct(['name'=>'gold start', 'price'=>'20']);
    echo $formatted;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo $header ?></h1>

    <div style="display: block;">
        <?php echo "Hey, my name is $name" ?> <br>
        <?php echo "And then she said \"daddy\"" ?> <br>
        <?php echo "And then she said \"daddy\" $name" ?> <br>
        <?php echo 'And then she said "daddy"' ?>

        <?php
            echo $name[0] . $header[2];
            echo str_replace('v', 'old', $name);
        ?>
    </div>

    <div class="loops">
        <h1>Products</h1>
        <ul>
            <?php foreach($products as $product) { ?>
                <?php if ($product['price'] > 15) {?>
                    <li><?php echo $product['name']; ?></li>
                <?php } ?>
            <?php }?>
        </ul>

        <?php include 'content.php'; ?>
    </div>
</body>
</html>