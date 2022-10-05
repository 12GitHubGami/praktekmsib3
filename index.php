<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Gamiat S - Creative</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Creative Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Kross Template v1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/g.png" />
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

</head>
<body>
  

<header class="navigation fixed-top">
  <?php 
    include_once 'navbar.php';
  ?>
</header>

<main id="main">
<?php

//tangkap request halaman di url
    $hal = $_REQUEST['hal'];
    if(!empty($hal)){
    include_once $hal.'.php';
    }
    else{
    include_once 'home.php';
    }
?>

</main>



<!-- footer -->
<?php 
include_once 'footer.php';
?>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>