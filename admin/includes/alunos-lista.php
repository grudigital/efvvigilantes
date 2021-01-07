<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 30%">Nome</th>
                <th style="width: 30%">E-mail</th>
                <th style="width: 4%"></th>
                <th style="width: 15%"></th>
                <th style="width: 15%"></th>
                <th style="width: 3%"></th>
                <th style="width: 3%"></th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM alunos";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[nome]</th>";
                echo "<td>$row[email]</td>";
                echo "<td><a href='alunos_certificados.php?id=$row[id]'><button type='button' class='btn btn-primary'>Certificados</button></a></td>";
                echo "<td><a href='functions/notificaremail?id=$row[id]'><button type='button' class='btn btn-secondary'>Notif. e-mail</button></a></td>";
                echo "<td>";


                //pegar o numero do celular
                echo "<input type='hidden' id='celular' value='$row[whatsapp]'>";
                //mensagem
                echo "<textarea style='margin-top: 40px; display:none' id='mensagem'>";
                echo "Olá $row[nome], somos da EFV Vigilantes e te trago otimas noticias. Seu certificado já está disponível em nosso site.";
                echo "&#13;&#10;";
                echo "&#13;&#10;";
                echo "Visualize clicando no link https://www.grudigital.com.br/clientes/efvvigilantes";
                echo "&#13;&#10;";
                echo "&#13;&#10;";
                echo "Conte conosco durante sua caminhada profissional.";
                echo "&#13;&#10;";
                echo "&#13;&#10;";
                echo "Equipe EFV Vigilantes";
                echo "</textarea>";
                echo "<button type='button' class='btn btn-success' onclick='enviarMensagem()'>Notif. whats</button>";


                echo "</td>";



                echo "<td><a href='alunos_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='functions/alunos_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>

            <script>
                function enviarMensagem() {
                    var celular = document.querySelector("#celular").value;
                    celular = celular.replace(/\D/g, ''); //Deixar apenas números

                    //Verificar se tem DDI e adicionar se não tiver
                    if (celular.length < 13) {
                        celular = "55" + celular;
                    }

                    var texto = document.querySelector("#mensagem").value;
                    texto = window.encodeURIComponent(texto);

                    window.open("https://api.whatsapp.com/send?phone=" + celular + "&text=" + texto, "_blank");
                }
            </script>


            </tbody>
        </table>
    </div>
</div>