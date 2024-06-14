<?php
require_once '../config/db.php';

require_once '../controllers/PacienteController.php';
require_once '../controllers/MedicoController.php';
require_once '../controllers/FornecedorController.php';
require_once '../controllers/MedicamentoController.php';
require_once '../controllers/AgendamentoController.php';
require_once '../controllers/ConsultaController.php';


$pacienteController = new PacienteController($pdo);
$medicoController = new MedicoController($pdo);
$fornecedorController = new FornecedorController($pdo);
$medicamentoController = new MedicamentoController($pdo);
$agendamentoController = new AgendamentoController($pdo);
$consultaController = new ConsultaController($pdo);

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'login':
            echo 'Página de login (em construção)';
            break;
        case 'adicionarPessoa':
            $pessoaController->adicionarPessoa();
            break;
        case 'listarPessoas':
            $pessoaController->listarPessoas();
            break;
        case 'adicionarPaciente':
            $pacienteController->adicionarPaciente();
            break;
        case 'listarPacientes':
            $pacienteController->listarPacientes();
            break;
        case 'atualizarPaciente':
            $pacienteController->atualizarPaciente();
            break;
        case 'excluirPaciente':
            $pacienteController->excluirPaciente();
            break;
        case 'adicionarMedico':
            $medicoController->adicionarMedico();
            break;
        case 'listarMedicos':
            $medicoController->listarMedicos();
            break;
        case 'atualizarMedico':
            $medicoController->atualizarMedico();
            break;
        case 'excluirMedico':
            $medicoController->excluirMedico();
            break;
        case 'adicionarFornecedor':
            $fornecedorController->adicionarFornecedor();
            break;
        case 'listarFornecedores':
            $fornecedorController->listarFornecedores();
            break;
        case 'atualizarFornecedor':
            $fornecedorController->atualizarFornecedor();
            break;
        case 'excluirFornecedor':
            $fornecedorController->excluirFornecedor();
            break;
        case 'adicionarMedicamento':
            $medicamentoController->adicionarMedicamento();
            break;
        case 'listarMedicamentos':
            $medicamentoController->listarMedicamentos();
            break;
        case 'atualizarMedicamento':
            $medicamentoController->atualizarMedicamento();
            break;
        case 'excluirMedicamento':
            $medicamentoController->excluirMedicamento();
            break;
        case 'adicionarAgendamento':
            $agendamentoController->adicionarAgendamento();
            break;
        case 'listarAgendamentos':
            $agendamentoController->listarAgendamentos();
            break;
        case 'atualizarAgendamento':
            $agendamentoController->atualizarAgendamento();
            break;
        case 'excluirAgendamento':
            $agendamentoController->excluirAgendamento();
            break;
        case 'adicionarConsulta':
            $consultaController->adicionarConsulta();
            break;
        case 'listarConsultas':
            $consultaController->listarConsultas();
            break;
        default:
            http_response_code(404);
            echo "Página não encontrada";
            break;
    }
} else {
    require '../views/index.php';
}
?>
