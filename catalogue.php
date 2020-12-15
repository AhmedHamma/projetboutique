<html>
<body>

<?php
include_once('functions.php');
include_once ("item.php");
global $articles;

?>
<form method="POST" action="basket.php">

    <?php
    foreach ($articles as $key => $article ) {
        displayItemCheckedBox($article['name'], $article['price'], $article['image'],$key);
   ?>
        <br/>



    <br/><br/><br/>

    <?php } ?>

    <button type="submit">Submit</button>


</form>


</form>

</body>
</html>