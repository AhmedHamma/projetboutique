<?php
include_once('item.php');
include_once('functions.php');
$articlequantite=[]; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
global $articles;
$listproduct = array($articles['voiture rouge'],$articles['voiture noire'],$articles['voiture blanche']);
foreach ($_POST['articles'] as $key => $value){

$articlequantite[$articles[$key]['name']]=$articles[$key]['price'];
$quantity[$key]=$value;
if ($quantity[$key]==='on'){
    $quantity[$key]=1;
}
    displayItem($articles[$key]['name'],$articles[$key]['price'],$articles[$key]['image'],$key,$quantity[$key]);
}

     echo "le prix total est :". baskettotal($articlequantite);





?>
</body>
</html>
