<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 49%">Título</th>
                <th style="width: 30%">Data de publicação</th>
                <th style="width: 7%"></th>
                <th style="width: 7%"></th>
                <th style="width: 7%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM cursos";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[titulo]</td>";
                echo "<td>$row[datainclusao]</td>";
                echo "<td><a href='cursos_imagem.php?id=$row[id]'><button type='button' class='btn btn-primary'>Imagem</button></a></td>";
                echo "<td><a href='cursos_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='functions/cursos_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>