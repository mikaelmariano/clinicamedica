<?php include 'header.php'; ?>
<h2>Medicamentos</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($medicamentos as $medicamento): ?>
        <tr id="row-<?= $medicamento['id'] ?>">
            <td><?= htmlspecialchars($medicamento['id']) ?></td>
            <td contenteditable="false" data-field="nome"><?= htmlspecialchars($medicamento['nome']) ?></td>
            <td><?= htmlspecialchars($medicamento['marca']) ?></td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editRow(<?= $medicamento['id'] ?>)">Editar</button>
                <button class="btn btn-success btn-sm d-none" onclick="saveRow(<?= $medicamento['id'] ?>)">Salvar</button>
                <a href="index.php?page=excluirMedicamento&id=<?= $medicamento['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este medicamento?');">Excluir</a>
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
    xhr.open('POST', 'index.php?page=atualizarMedicamento', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('id=' + id + '&data=' + JSON.stringify(data));

    row.querySelector('.btn-warning').classList.remove('d-none');
    row.querySelector('.btn-success').classList.add('d-none');
}
</script>
</div>
<?php include 'footer.php'; ?>
