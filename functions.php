<?php
include_once('item.php');
global $articles;

function displayItem($name,$price,$image,$key,$quantity){
    echo $image;
    echo $name;
    echo $price*$quantity;


    echo "<label for ='quantity'>Quantité:</label>";
    echo "<input type='' id='quantity' name='articles[$key]' value='$quantity' min='1'>";

    echo "<input type='submit' value='Supprimer' name='delete[key]'>";
}


function displayItemCheckedBox($name, $price, $image,$key){
    echo "$name";
    echo "$price";
    echo "$image";
    echo "<input type='checkbox'  name='articles[$key]'>";
}

function baskettotal($articles){
    $total = 0;
    foreach ($articles as $article=> $price){
        $total += $price;

    }
    return $total;
}

