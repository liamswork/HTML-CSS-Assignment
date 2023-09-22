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
            <!--Title-->
            <div class="page-head">
                <div class="container">
                    <h1>Our Offices</h1>
                </div>
            </div>

            <!--Addresses and maps-->
            <div class="office-addresses">
                <div class="service-list container">
                    <div class="row office-address-row">
                        
                        <!--London Office-->
                        <div class="col-md-6">
                            <div class="block address">
                                <div class="image">
                                    <img src="img/london.jpg" alt="London Office">
                                </div>
                                <div class="content">
                                    <p class="h2"><a href="#">London Office</a></p>
                                    <p class="p">Unit G6,<br>Pixel Business Centre,<br>110 Brooker Road, Waltham Abbey<br>London<br>EN9 1JH</p>
                                    <div class="tel"><a href="#" class="h3 text-web">02045 397354</a></div>
                                    <div class="view-more"><a href="#" class="btn btn-web">VIEW MORE</a></div>
                                </div>
                            </div>

                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d309.22582347575866!2d-0.003434706214298303!3d51.68168325198479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761fff09271cbd%3A0xbfed51d9cf061321!2sPixel%20Business%20Centre%2C%20Brooker%20Rd%2C%20Waltham%20Abbey%20EN9%201JH!5e0!3m2!1sen!2suk!4v1695389026482!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            
                            </div>
                        </div>

                        <!--Cambridge Office-->
                        <div class="col-md-6">
                            <div class="block address">
                                <div class="image">
                                    <img src="img/cambridge.jpg" alt="Cambridge Office">
                                </div>
                                <div class="content">
                                    <p class="h2"><a href="#">Cambridge Office</a></p>
                                    <p class="p">Unit 1.31,<br>St John's Innovation Centre,<br>Cowley Road, Milton<br>Cambridge<br>CB4 0WS</p>
                                    <div class="tel"><a href="#" class="h3 text-web">01223 37 57 72</a></div>
                                    <div class="view-more"><a href="#" class="btn btn-web">VIEW MORE</a></div>
                                </div>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1260.2826322310689!2d0.1525906492090257!3d52.23526282875284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8711469d7de59%3A0x4ad66f1b36a452da!2sNetmatters%20Cambridge!5e0!3m2!1sen!2suk!4v1695388927377!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <!--Wymondham Office-->
                        <div class="col-md-6">
                            <div class="block address">
                                <div class="image">
                                    <img src="img/wymondham.jpg" alt="Wymondham Office">
                                </div>
                                <div class="content">
                                    <p class="h2"><a href="#">Wymondham Office</a></p>
                                    <p class="p">Unit 15<br>Penfold Drive,<br>Gateway 11 Business Park,<br>Wymondham, Norfolk<br>NR18 0WZ</p>
                                    <div class="tel"><a href="#" class="h3 text-web">01603 70 40 20</a></div>
                                    <div class="view-more"><a href="#" class="btn btn-web">VIEW MORE</a></div>
                                </div>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1212.3294899435273!2d1.1345693718244316!3d52.57577806292909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1695389050658!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <!--Great Yarmouth Office-->
                        <div class="col-md-6">
                            <div class="block address">
                                <div class="image">
                                    <img src="img/yarmouth-2.jpg" alt="Great Yarmouth Office">
                                </div>
                                <div class="content">
                                    <p class="h2"><a href="#">Great Yarmouth Office</a></p>
                                    <p class="p">Suite F23<br>Beacon Innovation Centre,<br>Beacon Park, Gorleston,<br>Great Yarmouth, Norfolk<br>NR31 7RA</p>
                                    <div class="tel"><a href="#" class="h3 text-web">01493 60 32 04</a></div>
                                    <div class="view-more"><a href="#" class="btn btn-web">VIEW MORE</a></div>
                                </div>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2039.811349846741!2d1.7117470353913606!3d52.5558991151212!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da0593b311cec3%3A0x1cb3c1d4c0b340f6!2sNetmatters%20Great%20Yarmouth!5e0!3m2!1sen!2suk!4v1695387174862!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <?php
                include('inc/newsletter.php');
            ?>

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