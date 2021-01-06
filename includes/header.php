<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 hidden-xs">

                </div>
                <div class="col-sm-8">
                    <ul id="top_links">
                        <li class="hidden-xs"><a target="_blank" href="consulta_certificados.php">Consulta de certificados</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-xs-3">
                <div id="logo">
                    <a href="index.php"><img src="img/logo.png" width="190" height="44" alt="Home Alarms" data-retina="true"></a>
                </div>
            </div>
            <nav class="col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/logo.png" width="190" height="44" alt="Home Alarms" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="quemsomos.php">Quem somos</a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Cursos <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <?php
                                require("admin/connections/conn.php");
                                $sql = "select * FROM cursos";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<li><a href='curso.php?id=$row[id]'>$row[titulo]</a></li>";
                                }
                                ?>


                            </ul>
                        </li>



                        <li><a href="fotos.php">Fotos</a></li>
                        <li><a href="videos.php">Vídeos</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
                        <li><a href="contato.php">Contato</a></li>



                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>