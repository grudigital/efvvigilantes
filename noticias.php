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
            <h1>Notícias</h1>
            <p>Fique por dentro da EFV e do mercado de segurança</p>
        </div>
    </div>
</section>

<main>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-md-12">
                <?php
            require("admin/connections/conn.php");
            $sql = "select * FROM publicacoes";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<div class='col-md-6'>";
                    echo "<div style='height: 530px' class='post'>";
                        echo "<figure class='animated'><a href='noticia.php?id=$row[id]' title='$row[titulo]'><img
                                        src='admin/uploads/publicacoes/$row[imagem]' alt='$row[titulo]' class='img-responsive'></a></figure>";
                        echo "<h2>$row[titulo]</h2>";
                        echo "<p>$row[resumo]</p>";
                        echo "<a href='noticia.php?id=$row[id]' class='btn_1' title='$row[titulo]'>Ler mais</a>";
                        echo "</div>";
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