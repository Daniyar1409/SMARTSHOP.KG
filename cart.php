<?php
    ob_start();
    //include header.php file
    include('header.php');
?>

<?php
    /* include cart items if it is not empty */
    count($product->getData('cart')) ? include('Template/_cart-template.php') : include('Template/notFound/_cart_notFound.php');

    /* include cart items if it is not empty */

    /* include products */
    count($product->getData('wishlist')) ? include('Template/_wishlist_template.php') : include('Template/notFound/_wishlist_notFound.php');
    /* include products */

    /* include top-sale */
    include('Template/_new-phones.php ');
    /* include top-sale */


?>

<?php
    //include footer
    include('footer.php');
?>
