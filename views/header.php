<!DOCTYPE html>
<html>
<head>
    <title>Clínica Médica</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            padding-top: 50px;
        }
        .header {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Clínica Médica</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="cadastrosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="cadastrosDropdown">
                        <a class="dropdown-item" href="index.php?page=adicionarPaciente">Paciente</a>
                        <a class="dropdown-item" href="index.php?page=adicionarMedico">Médico</a>
                        <a class="dropdown-item" href="index.php?page=adicionarFornecedor">Fornecedor</a>
                        <a class="dropdown-item" href="index.php?page=adicionarMedicamento">Medicamento</a>
                        <a class="dropdown-item" href="index.php?page=adicionarAgendamento">Agendamento</a>
                        <a class="dropdown-item" href="index.php?page=adicionarConsulta">Consulta Médica</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="consultasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Consultas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="consultasDropdown">
                        <a class="dropdown-item" href="index.php?page=listarPacientes">Pacientes</a>
                        <a class="dropdown-item" href="index.php?page=listarMedicos">Médicos</a>
                        <a class="dropdown-item" href="index.php?page=listarFornecedores">Fornecedores</a>
                        <a class="dropdown-item" href="index.php?page=listarMedicamentos">Medicamentos</a>
                        <a class="dropdown-item" href="index.php?page=listarAgendamentos">Agendamentos</a>
                        <a class="dropdown-item" href="index.php?page=listarConsultas">Consultas Médicas</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container header">
