<?php
  ob_start();
  //include header.php file
  include('header.php');
?>

<?php

  /* include banner-area */
  include('Template/_banner-area.php');
  /* include banner-area */

  /* include top-sale */
  include('Template/_top-sale.php');
  /* include top-sale */

  /* include special-price */
  include('Template/_special-price.php');
  /* include special-price */

  /* include banner-adds */
  include('Template/_banner-adds.php');
  /* include banner-adds */

  /* include new-phones */
  include('Template/_new-phones.php');
  /* include new-phones */

  /* include blogs */
  include('Template/_blogs.php');
  /* include blogs */
?>

<?php
  //include footer
  include('footer.php');
?>