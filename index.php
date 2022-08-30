<?php
  ob_start();
  //header
  include('header.php');
?>

<?php
  //slideshow
  include('Template/slideshow.php');
  // featured items
  include('Template/featured.php');
  // banner area 1
  include('Template/banners.php');
  //trending items
  include('Template/trending.php');
  // banner area 2
  include('Template/banner.php');
  // blog
  include('Template/blog.php');
?>
<?php
  //footer
include('footer.php');
?>