<?php include 'header.php'; ?>
<h2>Medicamentos</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Fornecedor</th>
    </tr>
    <?php foreach ($medicamentos as $medicamento): ?>
    <tr>
        <td><?= htmlspecialchars($medicamento['id']) ?></td>
        <td><?= htmlspecialchars($medicamento['nome']) ?></td>
        <td><?= htmlspecialchars($medicamento['marca']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
