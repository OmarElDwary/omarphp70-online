<?php
    ob_start();
    include('header.php');
?>
<?php
    count($product->getData('cart')) ? include('Template/cart.php') :  include ('Template/NotFound/cart-notfound.php');

    include('Template/trending.php');
?>
<?php 
    include('footer.php');
?>