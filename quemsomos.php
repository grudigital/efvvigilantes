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

<?php include 'includes/header.php' ?>


<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/topo-quemsomos.jpg"
         data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Quem somos</h1>
            <p>Conheça mais sobre a EFV</p>
        </div>
    </div>
</section><!-- End section -->

<main>
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="intro">
                    <?php
            require("admin/connections/conn.php");
            $sql = "select * FROM blocos where id = '2'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {

                    echo "<p><img src='admin/uploads/blocos/$row[imagem]' alt='$row[resumo]' class='img-responsive'></p>";
                    echo "<h2>$row[resumo]</h2>";
                    echo "<p class='lead'>$row[descricao]</p>";
                    }
                    ?>


                </div>
            </div>
        </div><!-- End row -->

        <hr>

        <div class="row">
            <div class="col-sm-4">

                <?php
                require("admin/connections/conn.php");
                $sql = "select * FROM blocos where id = '3'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<h3>$row[resumo]</h3>";
                    echo "<p>$row[descricao]</p>";
                }
                ?>

                <?php
                require("admin/connections/conn.php");
                $sql = "select * FROM blocos where id = '4'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<h3>$row[resumo]</h3>";
                    echo "<p>$row[descricao]</p>";
                }
                ?>

                <?php
                require("admin/connections/conn.php");
                $sql = "select * FROM blocos where id = '5'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<h3>$row[resumo]</h3>";
                    echo "<p>$row[descricao]</p>";
                }
                ?>

            </div>
            <div class="col-sm-7 col-sm-offset-1">
                <ul class="feat" id="about">
                    <li>
                        <i class="icon_check_alt2"></i>
                        <?php
                        require("admin/connections/conn.php");
                        $sql = "select * FROM blocos where id = '6'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<h3>$row[resumo]</h3>";
                            echo "<p>$row[descricao]</p>";
                        }
                        ?>
                    </li>
                    <li>
                        <i class="icon_check_alt2"></i>
                        <?php
                        require("admin/connections/conn.php");
                        $sql = "select * FROM blocos where id = '7'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<h3>$row[resumo]</h3>";
                            echo "<p>$row[descricao]</p>";
                        }
                        ?>
                    </li>
                    <li>
                        <i class="icon_check_alt2"></i>
                        <?php
                        require("admin/connections/conn.php");
                        $sql = "select * FROM blocos where id = '8'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<h3>$row[resumo]</h3>";
                            echo "<p>$row[descricao]</p>";
                        }
                        ?>
                    </li>

                </ul>
            </div>
        </div><!-- End row -->



    </div><!-- End container -->

    <section class="promo_full">
        <div class="promo_full_wp">
            <div>
                <h3>O que dizem nossos clientes<span>Nosso maior motivo de orgulho. </span></h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="carousel_testimonials">
                                <?php
                                require("admin/connections/conn.php");
                                $sql = "select * FROM avaliacoes";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<div>";
                                    echo "<div class='box_overlay'>";
                                    echo "<div class='pic'>";
                                    echo "<figure><img src='admin/uploads/avaliacoes/$row[imagem]' alt='' class='$row[nome]'></figure>";
                                    echo "<h4>$row[nome]</h4>";
                                    echo "</div>";
                                    echo "<div style='margin-top: 20px' class='comment'>'$row[avaliacao]'</div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                                ?>

                            </div>

                        </div><!-- End col-md-8 -->
                    </div><!-- End row -->
                </div><!-- End container -->
            </div><!-- End promo_full_wp -->
        </div><!-- End promo_full -->
    </section><!-- End section -->
</main><!-- End main -->

<?php include 'includes/footer.php' ?>


<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script>
    'use strict';
    $(".team-carousel").owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: false,
        smartSpeed: 300,
        responsiveClass: false,
        responsive: {
            320: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    });
</script>

</body>
</html>