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
                    <div class="intro_title_booking">
                        <h2>Fell safe in your house!</h2>
                        <p>Protect your family or business. Contact us with no obligations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div id="book">
                        <h3>Possuo interesse</h3>
                        <p>Preencha os campos abaixo, nossa equipe de vendas entrar em contato.</p>
                        <div id="message-booking"></div>
                        <form method="post" action="assets/quick_contact.php" id="check_avail" autocomplete="off">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name_booking" id="name_booking" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email_booking" id="email_booking" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone_booking" id="phone_booking" placeholder="Telefone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control">
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
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End Booking container -->

    <div id="feat_home">
        <div class="container margin_60_25">
            <div class="row">
                <div class="col-md-6">
                    <div class="box_feat">
                        <span><img src="img/svg_icons/shield.svg" alt=""></span>
                        <h3>Full Protection</h3>
                        <p>Lorem ipsum dolor sit amet, no movet simul laoreet pri, aperiri fabulas expetenda ei pro. Sed vero assentior ad, est vide liber viris ne. Mea saperet evertitur intellegebat ei, an labore cetero eos.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box_feat">
                        <span><img src="img/svg_icons/mobile.svg" alt=""></span>
                        <h3>Management via App</h3>
                        <p>Mea saperet evertitur intellegebat ei, an labore cetero eos. Quo no facilisis contentiones, enim graeci vim ea, justo graecis ne qui. His tation theophrastus intellegebat ut, hinc fierent nam ea.</p>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box_feat">
                        <span><img src="img/svg_icons/video-camera.svg" alt=""></span>
                        <h3>HD Video Camera</h3>
                        <p>Lorem ipsum dolor sit amet, no movet simul laoreet pri, aperiri fabulas expetenda ei pro. Sed vero assentior ad, est vide liber viris ne. Mea saperet evertitur intellegebat ei, an labore cetero eos.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box_feat">
                        <span><img src="img/svg_icons/microphone.svg" alt=""></span>
                        <h3>Microphone</h3>
                        <p>Mea saperet evertitur intellegebat ei, an labore cetero eos. Quo no facilisis contentiones, enim graeci vim ea, justo graecis ne qui. His tation theophrastus intellegebat ut, hinc fierent nam ea.</p>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box_feat">
                        <span><img src="img/svg_icons/settings.svg" alt=""></span>
                        <h3>Tecnical Support</h3>
                        <p>Lorem ipsum dolor sit amet, no movet simul laoreet pri, aperiri fabulas expetenda ei pro. Sed vero assentior ad, est vide liber viris ne. Mea saperet evertitur intellegebat ei, an labore cetero eos.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box_feat">
                        <span><img src="img/svg_icons/clipboard.svg" alt=""></span>
                        <h3>Certifications</h3>
                        <p>Mea saperet evertitur intellegebat ei, an labore cetero eos. Quo no facilisis contentiones, enim graeci vim ea, justo graecis ne qui. His tation theophrastus intellegebat ut, hinc fierent nam ea.</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div>
    </div><!-- End feat home -->

    <div class="container margin_60_25">
        <div class="row">
            <div class="col-sm-4">
                <figure class="animated"><a href="service_1.html"><img src="img/service_home_1.jpg" alt="" class="img-responsive"></a></figure>
                <h3>Wiring and installation</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus.
                </p>
            </div>
            <div class="col-sm-4">
                <figure class="animated"><a href="service_2.html"><img src="img/service_home_2.jpg" alt="" class="img-responsive"></a></figure>
                <h3>Security Plan</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus.
                </p>
            </div>
            <div class="col-sm-4">
                <figure class="animated"><a href="service_3.html"><img src="img/service_home_3.jpg" alt="" class="img-responsive"></a></figure>
                <h3>Security Check</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus.
                </p>
            </div>
        </div><!-- End row -->

        <hr class="add_bottom_30">

        <div class="row">
            <div class="col-md-4">
                <h4>Some words about us</h4>
                <p>
                    Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc <strong>doctus definitiones</strong> an, vix id dicam putent.
                </p>
                <p>
                    Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
                </p>
            </div>
            <div class="col-md-4">
                <h4>Mission</h4>
                <p>
                    Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc <strong>doctus definitiones</strong> an, vix id dicam putent. Ius ornatus instructior in.
                </p>
                <ul class="list_2">
                    <li><strong> Cum doctus civibus efficiantur in</strong></li>
                    <li><strong>Quot persecuti mel.</strong></li>
                    <li><strong>Vix id dicam putent</strong></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>10 Years of experience</h4>
                <p>
                    Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc <strong>doctus definitiones</strong> an, vix id dicam putent. Ius ornatus instructior in.
                </p>
                <ul class=" list_ok">
                    <li><strong> Cum doctus civibus efficiantur in</strong></li>
                    <li><strong>Quot persecuti mel.</strong></li>
                    <li><strong>Vix id dicam putent</strong></li>
                </ul>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->

    <div class="bg_content magnific">
        <div>
            <h3>View our <strong>Video Demo</strong></h3>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
            </p>
            <a href="https://www.youtube.com/watch?v=X02tZiqC1uk" class="video"><i class="icon-play-circled2-1"></i></a>
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