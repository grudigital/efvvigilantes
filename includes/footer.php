<footer>
    <div class="container">

        <?php
        require("admin/connections/conn.php");
        $sql = "select * FROM informacoes where id = 1";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {


            echo "<div class='row '>";
            echo "<div class='col-md-4 col-sm-8'>";

            require("admin/connections/conn.php");
            $sql2 = "select * FROM blocos where id = '10'";
            $result2 = mysqli_query($conn, $sql2);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                echo "<img src='img/logorodape.png' width='195' height='65' alt='$row2[resumo]' data-retina='true' id='logo_footer'>";
                echo "<p>$row2[descricao]</p>";
            }


                       echo "</div>";
            echo "<div class='col-md-3 col-md-offset-1 col-sm-4'>";
            echo "<h3>Menu</h3>";
            echo "<ul>";
            echo "<li><a href='quemsomos.php'>Quem somos</a></li>";
            echo "<li><a href='cursos.php'>Cursos</a></li>";
            echo "<li><a href='fotos.php'>Fotos</a></li>";
            echo "<li><a href='videos.php'>Vídeos</a></li>";
            echo "<li><a href='noticias.php'>Notícias</a></li>";
            echo "<li><a href='contato.php'>Contato</a></li>";
            echo "</ul>";
            echo "</div>";
            echo "<div class='col-md-4 col-sm-12' id='contact_bg'>";
            echo "<h3>Dados de contato</h3>";
            echo "<ul id='contact_details_footer'>";
            echo "<li id='address_footer'>";

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



            echo "<li id='phone_footer'>";

            if ($row['telefone1'] != null) {
                echo "<a href='tel://$row[telefone1]'>$row[telefone1]</a> ";
            }
            if ($row['telefone2'] != null) {
                echo "/ <a href='tel://$row[telefone2]'>$row[telefone2]</a> ";
            }

            if ($row['telefone3'] != null) {
                echo "/ <a href='tel://$row[telefone3]'>$row[telefone3]</a> ";
            }

            if ($row['telefone4'] != null) {
                echo "/ <a href='tel://$row[telefone4]'>$row[telefone4]</a> ";
            }

            echo "</li>";
            echo "<li id='email_footer'><a href='mailto:$row[email]'>$row[email]</a></li>";
            echo "</ul>";
            echo "</div>";
            echo "</div>";
            echo "<div id='social_footer'>";
            echo "<ul>";
            echo "<li><a target='_blank' href='$row[facebook]'><i class='icon-facebook'></i></a></li>";
            echo "<li><a target='_blank' href='$row[instagram]'><i class='icon-instagram'></i></a></li>";
            echo "</ul>";
            echo "</div>";

        }
        ?>


    </div>


    <div id="copy">
        <div class="container">
            © EFV Vigilantes - Todos os direitos reservados. Desenvolvido por: <a style="font-weight: bold" target="_blank"
                                                                                  href="https://www.grudigital.com.br">
                Agência Grudigital </a>
        </div>
    </div><!-- End copy -->
</footer><!-- End footer -->