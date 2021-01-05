<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: index-acesso-negado.php");
}
?>
<?php include 'includes/header.php' ?>
<body class="fixed-left">
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>
<div id="wrapper">
    <?php include 'includes/menu.php' ?>
    <div class="content-page">
        <div class="content">
            <div class="topbar">
                <nav class="navbar-custom">
                    <!-- Page title -->
                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="ion-navicon"></i>
                            </button>
                        </li>
                        <li class="hide-phone list-inline-item app-search">
                            <h3 class="page-title">Painel de Gerenciamento :: Vídeos</h3>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div>
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Vídeos</h4>
                                                <p class="text-muted m-b-30 font-14">Listagem de vídeos.</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">

                                            <?php
                                            require("connections/conn.php");
                                            $sql = "select * FROM galeriavideos";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {

                                                echo "<div style='float: left; height: 400px' class='col-4 col-md-4'>";
                                                echo "<iframe width='100%' height='315' src='https://www.youtube.com/embed/$row[video]' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                                                echo "<a style='float: right; margin-top:10px' href='functions/videos_excluir.php?id=$row[id]'>";
                                                echo "<button type='button' class='btn btn-danger'>Excluir vídeo</button></a></div>";
                                                echo "</a>";

                                            }
                                            ?>
                                        </div>
                                    </div>











                                    <hr>

                                    <form class="card-body" action="functions/videos_adicionar.php"
                                          enctype="multipart/form-data"
                                          method="post">
                                        <div class="container">
                                            <div class="row">
                                                <div style="margin-bottom: 20px" class="col-12">
                                                    <h4 class="mt-0 header-title">Vídeos :: Adicionar</h4>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="m-b-30">
                                                        <form action="#" class="dropzone">
                                                            <div class="fallback">
                                                                <input class="form-control" placeholder="Url do vídeo (após o watch?v=)" name="video" type="text">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <button style="float: right" type='submit' class='btn btn-info'>Adicionar vídeo</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/rodape.php' ?>
    </div>
</div>
<?php include 'includes/scriptsrodape.php' ?>
</body>
</html>