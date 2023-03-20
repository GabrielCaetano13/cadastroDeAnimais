<h1>Edite informações sobre o peso do animal</h1>

<?php
    $sql = "SELECT * FROM pesagens WHERE id_pesagem=".$_REQUEST["id_pesagem"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="./salvar-pesagem.php" method="POST">
    <input type="hidden" name="acao" value="editar-pesagem">
    <div class="mb-3">
        <label for="id_pesagem">Id da pesagem</label>
        <input type="text" name="id_pesagem" class="form-control" value="<?php echo $row->id_pesagem; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="id_animal">Id do animal</label>
        <input type="text" name="id_animal" class="form-control" value="<?php echo $row->id_animal; ?>" required>
    </div>
    <div class="mb-3">
        <label for="date_pesagem">Data da pesagem</label>
        <input type="date" name="data_pesagem" class="form-control" value="<?php echo $row->data_pesagem; ?>" required>
    </div>
    <div class="mb-3">
        <label for="peso">Peso</label>
        <input type="number" step="0.001" name="peso" class="form-control" value="<?php echo $row->peso; ?>" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>