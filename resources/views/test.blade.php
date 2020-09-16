<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="col-md-12">
    

</div>
<?php


use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://omoghadasi.ir', // Your store URL
    'ck_29dfcb4e01c8abcc089df28f4c9de942ebd929f9', // Your consumer key
    'cs_d122d7d78184246fb8c2c91e962c448b0cc6f723', // Your consumer secret
);
$array=$woocommerce->get('products');
?>

<?php
foreach ($array as $item) {
    //dd($item);
    echo $item->id;
    var_dump($item->images[0]->src);
    echo $item->name;
    echo $item->permalink;
    echo $item->short_description;
    echo $item->price;
    echo "<br><br>";
}
?>

</body>
</html>


