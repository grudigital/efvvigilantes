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

<main>
    <div id="booking_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <?php
                    require("admin/connections/conn.php");
                    $sql = "select * FROM blocos where id = '13'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {


                    echo"<div class='intro_title_booking'>";
                        echo"<h2>$row[resumo]</h2>";
                        echo"<p>$row[descricao]</p>";
                    echo"</div>";
                    }
                    ?>


                </div>
                <div class="col-lg-4 col-md-5">
                    <div id="book">
                        <h3>Possui interesse?</h3>
                        <p>Preencha os campos abaixo, nossa equipe de vendas entrar em contato.</p>
                        <div id="message-booking"></div>
                        <form method="post" action="functions/enviarcontatocurso.php">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nome" id="name_booking" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" id="email_booking" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="telefone" id="phone_booking" placeholder="Telefone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select name="curso" class="form-control">
                                            <option value="" disabled selected>Curso de interesse</option>
                                            <?php
                                            require("admin/connections/conn.php");
                                            $sql = "select * FROM cursos";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='titulo'>$row[titulo]</option>";
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" value="Enviar" class="btn_contact" id="submit-booking">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="feat_home">
        <div class="container margin_60_25">
            <div class="row">

                <?php
            require("admin/connections/conn.php");
            $sql = "select * FROM cursos order by id desc limit 4";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<div style='height: 190px' class='col-md-6'>";
                    echo "<div class='box_feat'>";
                        echo "<span><img src='img/svg_icons/shield.svg' alt='$row[titulo]'></span>";
                        echo "<a href='curso.php?id=$row[id]'><h3>$row[titulo]</h3></a>";
                        echo "<p>$row[resumo]</p>";
                    echo "</div>";
                echo "</div>";

                }
                ?>

            </div>
        </div>
    </div>

    <div class="container margin_60_25">
        <div class="row">
            <h2 style="margin-bottom: 30px; margin-left:12px">Últimas notícias</h2>

            <?php
            require("admin/connections/conn.php");
            $sql = "select * FROM publicacoes order by id desc limit 3";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {


            echo "<div class='col-sm-4'>";
                echo "<figure class='animated'><a href='noticia.php?id=$row[id]'><img src='admin/uploads/publicacoes/$row[imagem]' alt='$row[titulo]' class='img-responsive'></a></figure>";
                echo "<a href='noticia.php?id=$row[id]'><h3>$row[titulo]</h3></a>";
                echo "<p>$row[resumo]</p>";
            echo "</div>";
            }
            ?>

        </div>
    </div>

    <div class="bg_content magnific">
        <div>
            <?php
            require("admin/connections/conn.php");
            $sql = "select * FROM blocos where id = '11'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<h3><strong>$row[resumo]</strong></h3>";
            echo "<p>$row[descricao]</p>";
            }
            ?>


            <?php
            require("admin/connections/conn.php");
            $sql = "select * FROM blocos where id = '12'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<a href='https://www.youtube.com/watch?v=$row[descricao]' class='video'><i class='icon-play-circled2-1'></i></a>";
            }
            ?>

        </div>
    </div>

</main>

<?php include 'includes/footer.php' ?>

<div id="toTop"></div>

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<script src="assets/validate.js"></script>

</body>
</html>