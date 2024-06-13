<?php include 'header.php'; ?>
<h2>Médicos</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF/CNPJ</th>
        <th>Endereço</th>
        <th>CRM</th>
        <th>Especialidade</th>
    </tr>
    <?php foreach ($medicos as $medico): ?>
    <tr>
        <td><?= htmlspecialchars($medico['id']) ?></td>
        <td><?= htmlspecialchars($medico['nome']) ?></td>
        <td><?= htmlspecialchars($medico['cpf_cnpj']) ?></td>
        <td><?= htmlspecialchars($medico['endereco']) ?></td>
        <td><?= htmlspecialchars($medico['crm']) ?></td>
        <td><?= htmlspecialchars($medico['especialidade']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
