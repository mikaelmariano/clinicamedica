<?php include 'header.php'; ?>
<h2>Adicionar Consulta</h2>
<form action="index.php?page=adicionarConsulta" method="post">
    <div class="form-group">
        <label for="agendamento_id">Agendamento:</label>
        <select class="form-control" id="agendamento_id" name="agendamento_id" required>
            <?php foreach ($agendamentos as $agendamento): ?>
                <option value="<?= $agendamento['id'] ?>">
                    <?= htmlspecialchars($agendamento['paciente_nome'] ?? '') ?> - 
                    <?= htmlspecialchars($agendamento['medico_nome'] ?? '') ?> 
                    (<?= htmlspecialchars($agendamento['data'] ?? '') ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="sintomas">Sintomas:</label>
        <textarea class="form-control" id="sintomas" name="sintomas" required></textarea>
    </div>
    <div class="form-group">
        <label for="medicamentos">Medicamentos:</label>
        <select class="form-control" id="medicamentos" name="medicamentos[]" multiple required>
            <?php foreach ($medicamentos as $medicamento): ?>
                <option value="<?= $medicamento['id'] ?>"><?= htmlspecialchars($medicamento['nome']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
<?php include 'footer.php'; ?>
