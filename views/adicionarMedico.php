<?php include 'header.php'; ?>
<h2>Adicionar Médico</h2>
<form action="/clinicamedica/public/index.php?page=adicionarMedico" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>
    <label for="cpf_cnpj">CPF:</label>
    <input type="text" id="cpf_cnpj" name="cpf_cnpj" required><br>
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required><br>
    <label for="crm">CRM:</label>
    <input type="text" id="crm" name="crm" required><br>
    <label for="especialidade">Especialidade:</label>
    <input type="text" id="especialidade" name="especialidade" required><br>
    <input type="submit" value="Adicionar">
</form>
</body>
</html>
