<?php include 'header.php'; 
    include '../controllers/PacienteController.php'; 

?>

    <h2>Adicionar Paciente</h2>

    <form action="/clinicamedica/public/index.php?page=adicionarPaciente" method="POST">
    
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>
    
    <label for="cpf_cnpj">CPF:</label>
    <input type="text" id="cpf_cnpj" name="cpf_cnpj" required><br>
    
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required><br>
    
    <label for="sus">SUS:</label>
    <input type="text" id="sus" name="sus" required><br>
    
    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_nascimento" name="data_nascimento" required><br>
    
    <input type="submit" value="Adicionar">

</form>
</body>

</html>