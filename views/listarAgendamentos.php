<?php include 'header.php'; ?>
<h2>Agendamentos</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>SUS</th>
            <th>Paciente</th>
            <th>CRM</th>
            <th>Médico</th>
            <th>Data</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($agendamentos as $agendamento): ?>
        <tr id="row-<?= $agendamento['id'] ?>">
            <td><?= htmlspecialchars($agendamento['id']) ?></td>
            
            <td contenteditable="false" data-field="sus"><?= htmlspecialchars($agendamento['sus']) ?></td>
            <td><?= htmlspecialchars($agendamento['paciente_nome']) ?></td>
            <td contenteditable="false" data-field="crm"><?= htmlspecialchars($agendamento['crm']) ?></td>
            <td><?= htmlspecialchars($agendamento['medico_nome']) ?></td>
            <td contenteditable="false" data-field="data"><?= htmlspecialchars($agendamento['data']) ?></td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editRow(<?= $agendamento['id'] ?>)">Editar</button>
                <button class="btn btn-success btn-sm d-none" onclick="saveRow(<?= $agendamento['id'] ?>)">Salvar</button>
                <a href="index.php?page=excluirAgendamento&id=<?= $agendamento['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este agendamento?');">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
function editRow(id) {
    var row = document.getElementById('row-' + id);
    var cells = row.querySelectorAll('[data-field]');
    cells.forEach(function(cell) {
        cell.setAttribute('contenteditable', 'true');
    });
    row.querySelector('.btn-warning').classList.add('d-none');
    row.querySelector('.btn-success').classList.remove('d-none');
}

function saveRow(id) {
    var row = document.getElementById('row-' + id);
    var cells = row.querySelectorAll('[data-field]');
    var data = {};

    cells.forEach(function(cell) {
        var field = cell.getAttribute('data-field');
        var value = cell.textContent;
        data[field] = value;
        cell.setAttribute('contenteditable', 'false');
    });

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'index.php?page=atualizarAgendamento', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('id=' + id + '&data=' + JSON.stringify(data));

    row.querySelector('.btn-warning').classList.remove('d-none');
    row.querySelector('.btn-success').classList.add('d-none');
}
</script>
</div>
<?php include 'footer.php'; ?>
