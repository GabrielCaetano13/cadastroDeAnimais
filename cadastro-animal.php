<h1>Cadastre um novo animal</h1>
<form action="./salvar-animal.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="numero">Número</label>
        <input type="text" name="numero" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo" class="form-control" placeholder="F ou M" required>
    </div>
    <div class="mb-3">
        <label for="numero">Data de Nascimento</label>
        <input type="date" name="nascimento" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>