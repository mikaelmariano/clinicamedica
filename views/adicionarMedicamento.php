<?php include 'header.php'; ?>
<h2>Adicionar Medicamento</h2>
<form action="/clinicamedica/public/index.php?page=adicionarMedicamento" method="POST">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="fornecedor_id">Fornecedor:</label>
        <select class="form-control" id="fornecedor_id" name="fornecedor_id" required>
            <?php foreach ($fornecedores as $fornecedor): ?>
                <option value="<?= htmlspecialchars($fornecedor['id']) ?>">
                    <?= htmlspecialchars($fornecedor['nome']) ?> (<?= htmlspecialchars($fornecedor['marca']) ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
<?php include 'footer.php'; ?>
