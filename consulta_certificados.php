<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ?>

<body>

<script>
    function mascaraMutuario(o, f) {
        v_obj = o
        v_fun = f
        setTimeout('execmascara()', 1)
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value)
    }

    function cpfCnpj(v) {
        v = v.replace(/\D/g, "")
        if (v.length <= 14) {
            v = v.replace(/(\d{3})(\d)/, "$1.$2")
            v = v.replace(/(\d{3})(\d)/, "$1.$2")
            v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
        } else {
            v = v.replace(/^(\d{2})(\d)/, "$1.$2")
            v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")
            v = v.replace(/\.(\d{3})(\d)/, ".$1/$2")
            v = v.replace(/(\d{4})(\d)/, "$1-$2")
        }
        return v
    }
</script>

<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>

<div class="layer"></div>

<!-- Header================================================== -->
<?php include 'includes/header.php' ?>


<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/topo-contato.jpg"
         data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Consulta de certificados</h1>
            <p>Nosso maior orgulho é contribuir com seu futuro</p>
        </div>
    </div>
</section><!-- End section -->

<main>
    <div class="container margin_60_35">
        <div class="row">

            <div class="col-md-9">

                <div id="message-contact"></div>
                <form method="post" action="functions/consultacertificados.php">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>CPF</label>
                                <input type="text" onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' class="form-control" id="name_contact" name="cpf">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <input type="submit" value="Consultar" class="btn_1 green medium add_bottom_30" id="submit-contact"/>
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