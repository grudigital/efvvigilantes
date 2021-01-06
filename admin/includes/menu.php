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

        //Remove tudo o que não é dígito
        v = v.replace(/\D/g, "")

        if (v.length <= 14) { //CPF

            //Coloca um ponto entre o terceiro e o quarto dígitos
            v = v.replace(/(\d{3})(\d)/, "$1.$2")

            //Coloca um ponto entre o terceiro e o quarto dígitos
            //de novo (para o segundo bloco de números)
            v = v.replace(/(\d{3})(\d)/, "$1.$2")

            //Coloca um hífen entre o terceiro e o quarto dígitos
            v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2")

        } else { //CNPJ

            //Coloca ponto entre o segundo e o terceiro dígitos
            v = v.replace(/^(\d{2})(\d)/, "$1.$2")

            //Coloca ponto entre o quinto e o sexto dígitos
            v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")

            //Coloca uma barra entre o oitavo e o nono dígitos
            v = v.replace(/\.(\d{3})(\d)/, ".$1/$2")

            //Coloca um hífen depois do bloco de quatro dígitos
            v = v.replace(/(\d{4})(\d)/, "$1-$2")

        }

        return v

    }
</script>

<script>
    function mask(o, f) {
        setTimeout(function () {
            var v = mphone(o.value);
            if (v != o.value) {
                o.value = v;
            }
        }, 1);
    }

    function mphone(v) {
        var r = v.replace(/\D/g, "");
        r = r.replace(/^0/, "");
        if (r.length > 10) {
            r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
        } else if (r.length > 5) {
            r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
        } else if (r.length > 2) {
            r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
        } else {
            r = r.replace(/^(\d*)/, "($1");
        }
        return r;
    }
</script>
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
                        echo "<li><a href='alunos.php' class='waves-effect'><i class='mdi mdi-account-card-details'></i><span>Alunos</span></a></li>";
                        echo "<li><a href='avaliacoes.php' class='waves-effect'><i class='mdi mdi-comment-account'></i><span>Avaliações</span></a></li>";


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
