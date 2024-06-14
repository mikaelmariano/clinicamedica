<?php include 'header.php'; ?>
<h2>Fornecedores</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF/CNPJ</th>
            <th>Endereço</th>
            <th>Inscrição Municipal</th>
            <th>Marca</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fornecedores as $fornecedor): ?>
        <tr id="row-<?= $fornecedor['id'] ?>">
            <td><?= htmlspecialchars($fornecedor['id']) ?></td>
            <td contenteditable="false" data-field="nome"><?= htmlspecialchars($fornecedor['nome']) ?></td>
            <td contenteditable="false" data-field="cpf_cnpj"><?= htmlspecialchars($fornecedor['cpf_cnpj']) ?></td>
            <td contenteditable="false" data-field="endereco"><?= htmlspecialchars($fornecedor['endereco']) ?></td>
            <td contenteditable="false" data-field="inscricao_municipal"><?= htmlspecialchars($fornecedor['inscricao_municipal']) ?></td>
            <td contenteditable="false" data-field="marca"><?= htmlspecialchars($fornecedor['marca']) ?></td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editRow(<?= $fornecedor['id'] ?>)">Editar</button>
                <button class="btn btn-success btn-sm d-none" onclick="saveRow(<?= $fornecedor['id'] ?>)">Salvar</button>
                <a href="index.php?page=excluirFornecedor&id=<?= $fornecedor['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este fornecedor?');">Excluir</a>
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
    xhr.open('POST', 'index.php?page=atualizarFornecedor', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('id=' + id + '&data=' + JSON.stringify(data));

    row.querySelector('.btn-warning').classList.remove('d-none');
    row.querySelector('.btn-success').classList.add('d-none');
}
</script>
</div>
<?php include 'footer.php'; ?>
