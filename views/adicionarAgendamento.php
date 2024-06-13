<?php include 'header.php'; ?>
<h2>Adicionar Agendamento</h2>
<form action="/clinicamedica/public/index.php?page=adicionarAgendamento" method="POST">
    <label for="sus">Paciente (SUS):</label>
    <select id="sus" name="sus" required>
        <?php foreach ($pacientes as $paciente): ?>
        <option value="<?= htmlspecialchars($paciente['sus']) ?>">
            <?= htmlspecialchars($paciente['nome']) ?> (<?= htmlspecialchars($paciente['sus']) ?>)
        </option>
        <?php endforeach; ?>
    </select><br>
    <label for="crm">Médico (CRM):</label>
    <select id="crm" name="crm" required>
        <?php foreach ($medicos as $medico): ?>
        <option value="<?= htmlspecialchars($medico['crm']) ?>">
            <?= htmlspecialchars($medico['nome']) ?> (<?= htmlspecialchars($medico['crm']) ?>)
        </option>
        <?php endforeach; ?>
    </select><br>
    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required><br>
    <input type="submit" value="Adicionar">
</form>
</body>
</html>
