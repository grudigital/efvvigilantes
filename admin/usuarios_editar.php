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
                            <h3 class="page-title">Painel de Gerenciamento :: Usuários :: Editar</h3>
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
                                <form class="card-body" action="functions/usuarios_editar.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Usuários</h4>
                                                <p class="text-muted m-b-30 font-14">Editar usuário</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");

                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select id,nome,email,perfil,datacadastro FROM usuarios where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<input class='form-control' name='id' type='hidden' value='$row[id]'
                                                   id='example-text-input'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Nome</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='nome' type='text' value='$row[nome]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>E-mail</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='email' type='text' value='$row[email]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Perfil</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='perfil' type='text' value='$row[perfil]'
                                                   id='example-text-input' readonly='true'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Data de cadastro</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='datacadastro' type='text' value='$row[datacadastro]'
                                                   id='example-text-input' readonly='true'>";
                                        echo "</div>";
                                        echo "</div>";


                                    }
                                    mysqli_close($conn);
                                    ?>


                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-info'>Atualizar
                                                informações
                                            </button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>
    </div>
    <?php include 'includes/rodape.php' ?>
</div>
</div>
<?php include 'includes/scriptsrodape.php' ?>
</body>
</html>