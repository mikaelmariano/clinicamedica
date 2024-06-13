<?php include 'header.php'; ?>
<h2>Agendamentos</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Realizada</th>
        <th>Paciente</th>
        <th>Médico</th>
        <th>Data</th>
    </tr>
    <?php foreach ($agendamentos as $agendamento): ?>
    <tr>
        <td><?= htmlspecialchars($agendamento['id']) ?></td>
        <td><?= htmlspecialchars($agendamento['realizada'] ? 'Sim' : 'Não') ?></td>
        <td><?= htmlspecialchars($agendamento['paciente']) ?></td>
        <td><?= htmlspecialchars($agendamento['medico']) ?></td>
        <td><?= htmlspecialchars($agendamento['data']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
