<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ?>

<body>

<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div><!-- End Preload -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- Header================================================== -->
<?php include 'includes/header.php' ?>


<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/topo-noticias.jpg"
         data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Fotos</h1>
            <p>Acompanhe as fotos oficiais da EFV</p>
        </div>
    </div>
</section>

<main>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-md-12">
                <?php
                require("admin/connections/conn.php");
                $sql = "select * FROM galeriafotos";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div style='height: 380px; margin-bottom: 40px' class='col-md-6'>";
                    echo "<img src='admin/uploads/fotos/$row[imagem]' class='img-responsive border'>";
                    echo "</div>";
                }
                ?>
            </div>

        </div><!-- End row -->
    </div><!-- End container -->
</main><!-- End main -->

<?php include 'includes/footer.php' ?>


<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>