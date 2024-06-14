<?php include 'header.php'; ?>
<h2>Adicionar Fornecedor</h2>
<form action="/clinicamedica/public/index.php?page=adicionarFornecedor" method="POST">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="cpf_cnpj">CNPJ:</label>
        <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" required>
    </div>
    <div class="form-group">
        <label for="inscricao_municipal">Inscrição Municipal:</label>
        <input type="text" class="form-control" id="inscricao_municipal" name="inscricao_municipal" required>
    </div>
    <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" class="form-control" id="marca" name="marca" required>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
<?php include 'footer.php'; ?>
