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


<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/topo-contato.jpg"
         data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Contato</h1>
            <p>Estamos ansiosos para atender suas dúvidas ou sugestões.</p>
        </div>
    </div>
</section><!-- End section -->

<main>
    <div class="container margin_60_35">
        <div class="row">

            <div class="col-md-9">

                <div id="message-contact"></div>
                <form method="post" action="assets/contact.php" id="contactform">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" id="name_contact" name="nome">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text" class="form-control" id="name_contact" name="telefone">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" id="name_contact" name="email">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Mensagem</label>
                                <textarea rows="5" id="message_contact" name="message_contact" class="form-control"
                                          style="height:100px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="submit" value="Enviar" class="btn_1 green medium add_bottom_30" id="submit-contact"/>
                        </div>
                    </div>
                </form>
            </div><!-- End col-md-9 -->

            <div class="col-md-3">
                <div class="box_style_2">
                    <h5>Endereço</h5>
                    <?php
                    require("admin/connections/conn.php");
                    $sql = "select * FROM informacoes where id = 1";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['logradouro'] != null) {
                            echo "$row[logradouro]";
                        }
                        if ($row['numero'] != null) {
                            echo ", $row[numero]";
                        }
                        if ($row['complemento'] != null) {
                            echo " ($row[complemento])";
                        }
                        if ($row['bairro'] != null) {
                            echo " - $row[bairro]";
                        }
                        if ($row['cidade'] != null) {
                            echo " - $row[cidade]";
                        }
                        if ($row['estado'] != null) {
                            echo " / $row[estado]";
                        }
                    }
                    ?>



                    <h5 style="margin-top: 20px">Telefones</h5>

                        <?php
                        require("admin/connections/conn.php");
                        $sql = "select * FROM informacoes where id = 1";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['telefone1'] != null) {
                                echo "<p>$row[telefone1]</p>";
                            }
                            if ($row['telefone2'] != null) {
                                echo "<p style='margin-top: -15px'>$row[telefone2]</p>";
                            }
                            if ($row['telefone3'] != null) {
                                echo "<p style='margin-top: -15px'>$row[telefone3]</p>";
                            }
                            if ($row['telefone4'] != null) {
                                echo "<p style='margin-top: -15px'>$row[telefone4]</p>";
                            }
                        }
                        ?>






                </div>
            </div><!-- End col-md-3 -->
        </div><!-- End row -->
    </div><!-- End container -->
</main><!-- End main -->

<?php include 'includes/footer.php' ?>


<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- GOOGLE MAP -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/mapmarker.jquery.js"></script>
<script type="text/javascript" src="js/mapmarker_func.jquery.js"></script>

<!-- Form validation -->
<script src="assets/validate.js"></script>

</body>
</html>