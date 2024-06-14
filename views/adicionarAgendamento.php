<?php include 'header.php'; ?>
<h2>Adicionar Agendamento</h2>
<form action="/clinicamedica/public/index.php?page=adicionarAgendamento" method="POST">
    <div class="form-group">
        <label for="sus">Paciente (SUS):</label>
        <select class="form-control" id="sus" name="sus" required>
            <?php foreach ($pacientes as $paciente): ?>
                <option value="<?= htmlspecialchars($paciente['sus']) ?>">
                    <?= htmlspecialchars($paciente['nome']) ?> (<?= htmlspecialchars($paciente['sus']) ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="crm">Médico (CRM):</label>
        <select class="form-control" id="crm" name="crm" required>
            <?php foreach ($medicos as $medico): ?>
                <option value="<?= htmlspecialchars($medico['crm']) ?>">
                    <?= htmlspecialchars($medico['nome']) ?> (<?= htmlspecialchars($medico['crm']) ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="data">Data:</label>
        <input type="date" class="form-control" id="data" name="data" required>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
<?php include 'footer.php'; ?>
