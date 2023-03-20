<h1>Editar dados do animal</h1>

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
        <input type="text" name="numero" value= "<?php echo $row->numero; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo" value="<?php echo $row->sexo; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="numero">Nascimento</label>
        <input type="date" name="nascimento" value="<?php echo $row->nascimento; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>