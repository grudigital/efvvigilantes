<div class="left side-menu">
    <div class="topbar-left">
        <div class="">
            <!--<a href="index.html" class="logo text-center">Admiria</a>-->
            <a href="index.php" class="logo"><img src="assets/images/logo-sm.png" width="180" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>

                <?php
                require("connections/conn.php");
//                session_start();
                $usuarioid = $_SESSION['usuarioId'];
                $sql = "select * from usuarios where id = '$usuarioid'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                    // perfil 1 - administrador
                        echo "<li><a href='index.php' class='waves-effect'><i class='mdi mdi-view-dashboard'></i> <span> Home </span></a></li>";

                        echo "<li class='menu-title'>Cursos</li>";
                        echo "<li><a href='cursos.php' class='waves-effect'><i class='mdi mdi-school'></i><span>Cursos</span></a></li>";
                        echo "<li><a href='certificados.php' class='waves-effect'><i class='mdi mdi-book'></i><span>Certificados</span></a></li>";


                        echo "<li class='menu-title'>Conteúdo</li>";
                        echo "<li><a href='publicacoes.php' class='waves-effect'><i class='mdi mdi-blogger'></i><span>Publicações</span></a></li>";
                        echo "<li><a href='blocos.php' class='waves-effect'><i class='mdi mdi-content-copy'></i><span>Blocos</span></a></li>";
                        echo "<li><a href='fotos.php' class='waves-effect'><i class='mdi mdi-folder-multiple-image'></i><span>Fotos</span></a></li>";
                        echo "<li><a href='videos.php' class='waves-effect'><i class='mdi mdi-youtube-play'></i><span>Vídeos</span></a></li>";


                        echo "<li class='menu-title'>Configurações</li>";
                        echo "<li><a href='informacoes.php' class='waves-effect'><i class='mdi mdi-information'></i><span>Informações</span></a></li>";
                        echo "<li><a href='seo.php' class='waves-effect'><i class='mdi mdi-airplane'></i><span>Seo</span></a></li>";
                        echo "<li><a href='usuarios.php' class='waves-effect'><i class='mdi mdi-account-multiple'></i><span>Usuários</span></a></li>";


                        echo "<li><a href='functions/sair.php'><button style=' background-color:#fff; color: #263238; font-weight: bold; margin-top:10px; border-radius: 5px; height: 40px; width:100%; border: none'>Sair</button></a></li>";


                }
                mysqli_close($conn);
                ?>


            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
