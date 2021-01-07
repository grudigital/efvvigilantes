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
            <div class="col-md-9">
                <div class="post nopadding">

                    <?php
                    require("admin/connections/conn.php");
                    $pegaid = (int)$_GET['id'];
                    $sql = "select * FROM cursos where id = '$pegaid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<h2 style='margin-bottom: 40px'>$row[titulo]</h2>";

                        echo "<div style='font-weight: bold' class='alert alert-danger' role='alert'>Próxima turma: $row[inicioproximaturma] <br/>$row[informacoesproximaturma]</div>";

                        if ($row['valores'] != null) {
                            echo "<p style='width: 100%; background-color:#647631; color:#fff; font-size:20px; padding-top:5px; padding-left:5px; border-radius: 0px 0px 10px 0px; height: 40px'>Valores</p>";
                            echo "<p>$row[valores]</p>";
                        }

                        if ($row['documentosnecessarios'] != null) {
                            echo "<p style='width: 100%; background-color:#647631; color:#fff; font-size:20px; padding-top:5px; padding-left:5px; border-radius: 0px 0px 10px 0px; height: 40px'>Documentos necessários</p>";
                            echo "<p>$row[documentosnecessarios]</p>";
                        }

                        if ($row['resumo'] != null) {
                            echo "<p style='width: 100%; background-color:#647631; color:#fff; font-size:20px; padding-top:5px; padding-left:5px; border-radius: 0px 0px 10px 0px; height: 40px'>Objetivos</p>";
                            echo "<p>$row[resumo]</p>";
                        }

                        if ($row['descricao'] != null) {
                            echo "<p style='width: 100%; background-color:#647631; color:#fff; font-size:20px; padding-top:5px; padding-left:5px; border-radius: 0px 0px 10px 0px; height: 40px'>Programa / Descrição</p>";
                            echo "<p>$row[descricao]</p>";
                        }

                        if ($row['metodologia'] != null) {
                            echo "<p style='width: 100%; background-color:#647631; color:#fff; font-size:20px; padding-top:5px; padding-left:5px; border-radius: 0px 0px 10px 0px; height: 40px'>Metodologia</p>";
                            echo "<p>$row[metodologia]</p>";
                        }

                        if ($row['avaliacao'] != null) {
                            echo "<p style='width: 100%; background-color:#647631; color:#fff; font-size:20px; padding-top:5px; padding-left:5px; border-radius: 0px 0px 10px 0px; height: 40px'>Avaliação</p>";
                            echo "<p>$row[avaliacao]</p>";
                        }


                    }
                    ?>

                </div>


            </div>

            <div class="col-md-3">

                <div class="widget">
                    <h4>Próximos cursos</h4>
                    <ul class="recent_post">

                        <?php
                        require("admin/connections/conn.php");
                        $sql = "select * FROM cursos order by inicioproximaturma asc limit 5";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<li>";
                            echo "<i class='icon-calendar-empty'></i> $row[inicioproximaturma]";
                            echo "<div><a href='curso.php?id=$row[id]'>$row[titulo] </a></div>";
                            echo "</li>";
                        }
                        ?>
                    </ul>
                </div>


            </div>

        </div>
        <img style="width: 100%; margin-top:40px" src="img/bannercursos.jpg" class='img-responsive'>

    </div>
</main>

<?php include 'includes/footer.php' ?>


<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>