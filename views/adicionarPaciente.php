<?php include 'header.php'; ?>
<h2>Adicionar Paciente</h2>
<form action="/clinicamedica/public/index.php?page=adicionarPaciente" method="POST">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="cpf_cnpj">CPF:</label>
        <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" required>
    </div>
    <div class="form-group">
        <label for="sus">SUS:</label>
        <input type="text" class="form-control" id="sus" name="sus" required>
    </div>
    <div class="form-group">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
<?php include 'footer.php'; ?>
