<?php include 'header.php'; ?>
<h2>Adicionar Fornecedor</h2>
<form action="/clinicamedica/public/index.php?page=adicionarFornecedor" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>
    <label for="cpf_cnpj">CNPJ:</label>
    <input type="text" id="cpf_cnpj" name="cpf_cnpj" required><br>
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required><br>
    <label for="inscricao_municipal">Inscrição Municipal:</label>
    <input type="text" id="inscricao_municipal" name="inscricao_municipal" required><br>
    <label for="marca">Marca:</label>
    <input type="text" id="marca" name="marca" required><br>
    <input type="submit" value="Adicionar">
</form>
</body>
</html>
