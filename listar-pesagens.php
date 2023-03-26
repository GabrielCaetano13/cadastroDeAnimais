<h1>Informações sobre o peso do animal de Id: <?php echo $_REQUEST["id"]; ?></h1>

<?php
    $sql = "SELECT * FROM animais WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="./salvar-animal.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
    <div class="mb-3">
        <label for="numero">Número</label>
        <input type="text" name="numero" value= "<?php echo $row->numero; ?>" class="form-control" disabled>
    </div>
    <div class="mb-3">
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo" value="<?php echo $row->sexo; ?>" class="form-control" disabled>
    </div>
    <div class="mb-3">
        <label for="numero">Nascimento</label>
        <input type="date" name="nascimento" value="<?php echo $row->nascimento; ?>" class="form-control" disabled>
    </div>
</form>

<form action="index.php?page=listar-pesagens&id=<?php echo $_REQUEST['id']; ?>" method="POST">
  <div class="mb-3">
    <label for="form-control">Filtre uma data:</label>
    <input type="date" name="filtro-data">
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Filtrar</button>
  </div>
</form>

<?php
    
    $id = $_REQUEST['id'];
    if (isset($_REQUEST["filtro-data"])) {
        $filtro_data = $_REQUEST["filtro-data"];
        $sql = "SELECT * FROM pesagens WHERE id_animal=".$id." AND data_pesagem >= '".$filtro_data."' ORDER BY data_pesagem";
    } else {
        $sql = "SELECT * FROM pesagens WHERE id_animal=".$id." ORDER BY data_pesagem";
    }
    
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        echo "<table class='table table-hover table-striped table-bordered'>";
            echo "<tr>";
                echo "<th>Id da pesagem</th>";
                echo "<th>Id do animal</th>";
                echo "<th>Data da pesagem</th>";
                echo "<th>Peso</th>";
                echo "<th>Ganho/Perda</th>";
                echo "<th>Ações</th>";
            echo "</tr>";
        while ($row = $res->fetch_object()) {
            echo "<tr>";
                echo "<td>".$row->id_pesagem."</td>";
                echo "<td>".$row->id_animal."</td>";
                echo "<td class='data-pesagem'>".$row->data_pesagem."</td>";
                echo "<td class='peso-animal'>".$row->peso." kg</td>";
                echo "<td class='ganho-perda'></td>";
                echo "<td>
                        <button onclick=\"location.href='?page=editar-pesagem&id_pesagem=".$row->id_pesagem."';\" class='btn btn-success'>
                            Editar
                        </button>

                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-pesagem&acao=excluir-pesagem&id_pesagem=".$row->id_pesagem."';}else{false;}\" class='btn btn-danger'>
                            Deletar
                        </button>
                    </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        $number = $_REQUEST['id'];
        echo "<script>alert('Ainda não há pesos cadastrados para este animal')</script>";
        echo "<script>location.href='?page=pesar&id=$number';</script>";
    }
?>

<div>
    <button class="btn btn-primary">
        <?php
            $number = $_REQUEST['id'];
            echo "<a style='text-decoration: none; color:white;' href='?page=pesar&id=$number'>Cadastrar Peso</a>";
        ?>
    </button>
</div>

<script src='../js/ganhoEPerda.js'></script>
