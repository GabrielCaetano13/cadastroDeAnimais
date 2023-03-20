<h1>Lista de Animais</h1>
<?php
    $sql = "SELECT * FROM animais";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        echo "<table class='table table-hover table-striped table-bordered'>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Número</th>";
                echo "<th>Sexo</th>";
                echo "<th>Nascimento</th>";
                echo "<th>Ações</th>";
            echo "</tr>";
        while ($row = $res->fetch_object()) {
            echo "<tr>";
                echo "<td>".$row->id."</td>";
                echo "<td>".$row->numero."</td>";
                echo "<td>".$row->sexo."</td>";
                echo "<td>".$row->nascimento."</td>";
                echo "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>
                            Editar
                        </button>

                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>
                            Deletar
                        </button>

                        <button onclick =\"location.href='?page=listar-pesagens&id=".$row->id."';\" class='btn btn-primary'>
                            Info. peso
                        </button>
                        
                    </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>Não foi encontrado resultados</p>";
        echo "<script>location.href='?page=cadastro';</script>";
    }
?>