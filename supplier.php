<?php require 'config/dbconnection.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php sessions(); ?>
<?php if (!isset($_SESSION['id']) && $_SESSION['suppliers'] !== 1) {
  header('Location: login.php');
}
?>
<?php
    include 'views/header.php';
?>
<body class="theme-blue"> <!-- With theme-red as the original -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->


    <?php
      include 'views/top-nav-bar.php';
    ?>

    <section>
        <?php
            include 'views/left-side-bar.php';
            include 'views/right-side-bar.php';
        ?>
    </section>

<!-- The section below should be made in such a way that the display will
    depend on the button a user clicked on the left-side bar -->

    <!-- Start Section -->
    <section class="content">
        <?php

          if (isset($_GET['supId']) && $_GET['supId'] == 0) {
            // Display this when suppliers: details link is clicked
			$_SESSION['supId']=0;
            include 'views/suppliersDetails.php';
          }else {
			 $_SESSION['supId']=1;
            // Display this when suppliers: search link is clicked
            include 'views/suppliersSearch.php';
          }



        ?>
    </section>
    <!-- End Section -->
<?php
    include 'views/footer-scripts.php';
?>
</body>

</html>
<?php buffer(); ?>
