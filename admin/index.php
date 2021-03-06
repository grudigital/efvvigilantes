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
                            <h3 class="page-title">Painel de Gerenciamento</h3>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div>
            <div class="page-content-wrapper">


                <?php
                require("connections/conn.php");
                //                session_start();
                $usuarioid = $_SESSION['usuarioId'];
                $sql = "select * from usuarios where id = '$usuarioid'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<div class='container-fluid'>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-6 col-xl-3'>";
                    echo "<div class='mini-stat clearfix bg-white'>";
                    echo "<span class='mini-stat-icon bg-blue-grey mr-0 float-right'><i class='mdi mdi-basket'></i></span>";

                    $sqlprodutos = "SELECT * FROM alunos";
                    $executa_query_produtos = mysqli_query($conn, $sqlprodutos);
                    $conta_linhas_produtos = mysqli_num_rows($executa_query_produtos);



                    echo "<div style='font-size: 15px' class='mini-stat-info'>";
                    echo "<span style='font-size: 15px' class='counter text-blue-grey'>$conta_linhas_produtos alunos</span>";
                    echo "cadastrados";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='col-md-6 col-xl-3'>";
                    echo "<div class='mini-stat clearfix bg-white'>";
                    echo "<span class='mini-stat-icon bg-blue-grey mr-0 float-right'><i class='mdi mdi-black-mesa'></i></span>";

                    $sqlfornecedores = "SELECT * FROM certificados";
                    $executa_query_fornecedores = mysqli_query($conn, $sqlfornecedores);
                    $conta_linhas_fornecedores = mysqli_num_rows($executa_query_fornecedores);



                    echo "<div style='font-size: 15px' class='mini-stat-info'>";
                    echo "<span style='font-size: 15px' class='counter text-blue-grey'>$conta_linhas_fornecedores certificados</span>";
                    echo "cadastrados";
                    echo "</div>";
                    echo "<div class='clearfix'></div>";
                    echo "<p class='mb-0 m-t-20 text-muted'>Últimos 7 dias: $conta_linhas_fornecedores_7dias <span class='pull-right'></span></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='col-md-6 col-xl-3'>";
                    echo "<div class='mini-stat clearfix bg-white'>";
                    echo "<span class='mini-stat-icon bg-blue-grey mr-0 float-right'><i class='mdi mdi-buffer'></i></span>";

                    $sqlclientes = "SELECT * FROM clientes";
                    $executa_query_clientes = mysqli_query($conn, $sqlclientes);
                    $conta_linhas_clientes = mysqli_num_rows($executa_query_clientes);

                    $sqlclientes7dias = "select * from clientes where date(datacadastro) > (NOW() - INTERVAL 7 DAY)";
                    $executa_query_clientes_7dias = mysqli_query($conn, $sqlclientes7dias);
                    $conta_linhas_clientes_7dias = mysqli_num_rows($executa_query_clientes_7dias);

                    echo "<div style='font-size: 15px' class='mini-stat-info'>";
                    echo "<span style='font-size: 15px' class='counter text-blue-grey'>$conta_linhas_clientes clientes</span>";
                    echo "cadastrados";
                    echo "</div>";
                    echo "<div class='clearfix'></div>";
                    echo "<p class='mb-0 m-t-20 text-muted'>Últimos 7 dias: $conta_linhas_clientes_7dias <span class='pull-right'></span></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='col-md-6 col-xl-3'>";
                    echo "<div class='mini-stat clearfix bg-white'>";
                    echo "<span class='mini-stat-icon bg-blue-grey mr-0 float-right'><i class='mdi mdi-coffee'></i></span>";

                    $sqlusuarios = "SELECT * FROM usuarios";
                    $executa_query_usuarios = mysqli_query($conn, $sqlusuarios);
                    $conta_linhas_usuarios = mysqli_num_rows($executa_query_usuarios);

                    $sqlusuarios7dias = "select * from usuarios where date(datacadastro) > (NOW() - INTERVAL 7 DAY)";
                    $executa_query_usuarios_7dias = mysqli_query($conn, $sqlusuarios7dias);
                    $conta_linhas_usuarios_7dias = mysqli_num_rows($executa_query_usuarios_7dias);

                    echo "<div style='font-size: 15px' class='mini-stat-info'>";
                    echo "<span style='font-size: 15px' class='counter text-blue-grey'>$conta_linhas_usuarios usuarios</span>";
                    echo "cadastrados";
                    echo "</div>";
                    echo "<div class='clearfix'></div>";
                    echo "<p class='mb-0 m-t-20 text-muted'>Últimos 7 dias: $conta_linhas_usuarios_7dias <span class='pull-right'></span></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-xl-6'>";
                    echo "<div class='card m-b-20'>";
                    echo "<div class='card-body'>";
                    echo "<h4 class='mt-0 m-b-30 header-title'>Últimas entradas</h4>";
                    echo "<div class='table-responsive'>";
                    echo "<table class='table table-vertical mb-0'>";
                    echo "<tbody>";

                    $sql = "SELECT c.id cid, c.movimento cmovimento, c.operacao coperacao, c.valor cvalor, c.cliente ccliente, c.vendedor cvendedor, c.fornecedor cfornecedor, c.formapagamento cformapagamento, c.parcelas cparcelas, c.despesadescricao cdespesadescricao, c.status cstatus, c.datatransacao cdatatransacao, cl.id clid, cl.nome clnome, f.id fid, f.razaosocial frazaosocial FROM caixa as c inner join clientes as cl on c.cliente = cl.id left join fornecedores as f on c.fornecedor = f.id  where c.operacao = 1 order by c.id desc limit 5";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td style='font-size:12px'>$row[clnome]</td>";
                        if ($row['cstatus'] == 1) {
                            echo "<td style='font-size:12px'><i class='mdi mdi-checkbox-blank-circle text-success'></i> Ativo</td>";
                        } else if ($row['cstatus'] == 2) {
                            echo "<td style='font-size:12px'><i class='mdi mdi-checkbox-blank-circle text-danger'></i> Cancelado</td>";
                        } else if ($row['cstatus'] == 3) {
                            echo "<td style='font-size:12px'><i class='mdi mdi-checkbox-blank-circle text-warning'></i> Em andamento</td>";
                        } else {
                            echo "<td style='font-size:12px'><i class='mdi mdi-checkbox-blank-circle text-success'></i> Concluído</td>";
                        }

                        if ($row['cvalor'] == null) {
                            echo "<td style='font-size:12px'>0<p class='m-0 text-muted font-14'></p></td>";
                        } else {
                            echo "<td style='font-size:12px'>R$ $row[cvalor]<p class='m-0 text-muted font-14'></p></td>";
                        }
                        echo "<td style='font-size:12px'>$row[cdatatransacao]</td>";
                        echo "</tr>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='col-xl-6'>";
                    echo "<div class='card m-b-20'>";
                    echo "<div class='card-body'>";
                    echo "<h4 class='mt-0 m-b-30 header-title'>Últimas saídas</h4>";
                    echo "<div class='table-responsive'>";
                    echo "<table class='table table-vertical mb-0'>";
                    echo "<tbody>";

                    $sql = "SELECT * from caixa where movimento = 2 order by id desc limit 5";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td style='font-size:12px'>$row[despesadescricao]</td>";
                        if ($row['status'] == 1) {
                            echo "<td style='font-size:12px'><i class='mdi mdi-checkbox-blank-circle text-success'></i> Ativo</td>";
                        } else if ($row['status'] == 2) {
                            echo "<td style='font-size:12px'><i class='mdi mdi-checkbox-blank-circle text-danger'></i> Cancelado</td>";
                        } else if ($row['status'] == 3) {
                            echo "<td style='font-size:12px'><i class='mdi mdi-checkbox-blank-circle text-warning'></i> Em andamento</td>";
                        } else {
                            echo "<td style='font-size:12px'><i class='mdi mdi-checkbox-blank-circle text-success'></i> Concluído</td>";
                        }

                        if ($row['valor'] == null) {
                            echo "<td style='font-size:12px'>0<p class='m-0 text-muted font-14'></p></td>";
                        } else {
                            echo "<td style='font-size:12px'>R$ $row[valor]<p class='m-0 text-muted font-14'></p></td>";
                        }
                        echo "<td style='font-size:12px'>$row[datatransacao]</td>";
                        echo "</tr>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";


                }


                mysqli_close($conn);
                ?>


            </div>
        </div>
        <?php include 'includes/rodape.php' ?>
    </div>
</div>
<?php include 'includes/scriptsrodape.php' ?>
</body>
</html>