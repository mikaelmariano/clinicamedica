<?php include 'header.php'; ?>
<h2>Fornecedores</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF/CNPJ</th>
        <th>Endereço</th>
        <th>Inscrição Municipal</th>
        <th>Marca</th>
    </tr>
    <?php foreach ($fornecedores as $fornecedor): ?>
    <tr>
        <td><?= htmlspecialchars($fornecedor['id']) ?></td>
        <td><?= htmlspecialchars($fornecedor['nome']) ?></td>
        <td><?= htmlspecialchars($fornecedor['cpf_cnpj']) ?></td>
        <td><?= htmlspecialchars($fornecedor['endereco']) ?></td>
        <td><?= htmlspecialchars($fornecedor['inscricao_municipal']) ?></td>
        <td><?= htmlspecialchars($fornecedor['marca']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
