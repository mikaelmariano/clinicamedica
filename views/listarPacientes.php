<?php include 'header.php'; ?>
<h2>Pacientes</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF/CNPJ</th>
        <th>Endereço</th>
        <th>SUS</th>
        <th>Data de Nascimento</th>
    </tr>
    <?php foreach ($pacientes as $paciente): ?>
    <tr>
        <td><?= htmlspecialchars($paciente['id']) ?></td>
        <td><?= htmlspecialchars($paciente['nome']) ?></td>
        <td><?= htmlspecialchars($paciente['cpf_cnpj']) ?></td>
        <td><?= htmlspecialchars($paciente['endereco']) ?></td>
        <td><?= htmlspecialchars($paciente['sus']) ?></td>
        <td><?= htmlspecialchars($paciente['data_nascimento']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
