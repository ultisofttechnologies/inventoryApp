<?php require 'config/dbconnection.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php sessions(); ?>
<?php if (!isset($_SESSION['id'])) {
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
            // Display this when the dashboard link is clicked and should be the default
            include 'views/dashboard.php';

        ?>
    </section>
    <!-- End Section -->
<?php
    include 'views/footer-scripts.php';
?>
</body>

</html>
<?php buffer(); ?>
