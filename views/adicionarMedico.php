<?php include 'header.php'; ?>
<h2>Adicionar Médico</h2>
<form action="/clinicamedica/public/index.php?page=adicionarMedico" method="POST">
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
        <label for="crm">CRM:</label>
        <input type="text" class="form-control" id="crm" name="crm" required>
    </div>
    <div class="form-group">
        <label for="especialidade">Especialidade:</label>
        <input type="text" class="form-control" id="especialidade" name="especialidade" required>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
<?php include 'footer.php'; ?>
