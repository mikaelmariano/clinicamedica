<?php include 'header.php'; ?>
<h2>Consultas</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Paciente</th>
            <th>Médico</th>
            <th>Data</th>
            <th>Sintomas</th>
            <th>Medicamentos Prescritos</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($consultas as $consulta): ?>
        <tr id="row-<?= htmlspecialchars($consulta['id']) ?>">
            <td><?= htmlspecialchars($consulta['id']) ?></td>
            <td><?= htmlspecialchars($consulta['paciente_nome']) ?></td>
            <td><?= htmlspecialchars($consulta['medico_nome']) ?></td>
            <td><?= htmlspecialchars($consulta['data']) ?></td>
            <td><?= htmlspecialchars($consulta['sintomas']) ?></td>
            <td>
                <?php if (is_array($consulta['medicamentos'])): ?>
                    <?php foreach ($consulta['medicamentos'] as $medicamento): ?>
                        <?= htmlspecialchars($medicamento) ?><br>
                    <?php endforeach; ?>
                <?php else: ?>
                    <?= htmlspecialchars($consulta['medicamentos']) ?>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'footer.php'; ?>
