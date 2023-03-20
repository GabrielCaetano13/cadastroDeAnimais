<h1>Cadastre o peso do animal de Id: <?php echo $_REQUEST['id']; ?></h1>
<form action="./salvar-pesagem.php" method="POST">
    <input type="hidden" name="acao" value="pesar">
    <div class="mb-3">
        <label for="id_animal">Id do animal</label>
        <input type="text" name="id_animal" class="form-control" value="<?php  echo $_REQUEST['id']; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="date_pesagem">Data da pesagem</label>
        <input type="date" name="data_pesagem" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="peso">Peso</label>
        <input type="number" step="0.001" name="peso" class="form-control" placeholder="12.345" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>