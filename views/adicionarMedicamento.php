<?php include 'header.php'; ?>
<h2>Adicionar Medicamento</h2>
<form action="/clinicamedica/public/index.php?page=adicionarMedicamento" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>
    <label for="fornecedor_id">Fornecedor:</label>
    <select id="fornecedor_id" name="fornecedor_id" required>
        <?php foreach ($fornecedores as $fornecedor): ?>
        <option value="<?= htmlspecialchars($fornecedor['id']) ?>">
            <?= htmlspecialchars($fornecedor['nome']) ?> (<?= htmlspecialchars($fornecedor['marca']) ?>)
        </option>
        <?php endforeach; ?>
    </select><br>
    <input type="submit" value="Adicionar">
</form>
</body>
</html>
