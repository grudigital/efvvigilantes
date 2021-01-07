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
            <h1>Cursos</h1>
            <p>Conheça todos nossos cursos de formação e atualização</p>
        </div>
    </div>
</section>

<main>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-md-12">
                <?php
                require("admin/connections/conn.php");
                $sql = "select * FROM cursos";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<div class='col-md-6'>";
                    echo "<div style='height: 540px' class='post'>";
                    echo "<figure class='animated'><a href='curso.php?id=$row[id]' title='$row[titulo]'><img
                                        src='admin/uploads/cursos/$row[imagem]' alt='$row[titulo]' class='img-responsive'></a></figure>";
                    echo "<a href='curso.php?id=$row[id]' title='$row[titulo]'>";
                    echo "<h2>$row[titulo]</h2>";
                    echo "</a>";
                    echo "<p>$row[resumo]</p>";
                    echo "<div style='font-weight: bold' class='alert alert-success' role='alert'>Próxima turma: $row[inicioproximaturma]</div>";
                    echo "</div>";
                    echo "</div>";

                }
                ?>

                <img style="width: 97%;margin-left:15px" src="img/bannercursos.jpg" class='img-responsive'>

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