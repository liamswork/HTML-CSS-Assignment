<!DOCTYPE html>
<html lang="en">
  <?php
    include('inc/head-data.php');
  ?>

    <body>
    <?php
      include('inc/sidebar.php');
      include('inc/cookies.php');
    ?>

    <!--Main content wrapper-->
    <div id="main-wrapper" class="main-wrapper">
        <div class="overlay" onclick="handleNav(this)"></div>
        <div class="main-inner">
            <?php
                include('inc/header.php');
            ?>
            <!--Nav bar that shows current directory path, e.g. Home / Contact-->
            <div class="container nav-directory">
            <a href="#"><strong>Home</strong></a><p> / Our Offices</p>
            </div>

            <?php
            include('inc/footer.php');
            ?>
        </div><!--End of main-inner div-->
    </div><!--End of main-wrapper div-->

        <script src="js/jquery-3.7.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/sidenav.js"></script>
        <script src="js/sticky.js"></script>
        <script src="js/crumbs.js"></script>
    </body>

</html>