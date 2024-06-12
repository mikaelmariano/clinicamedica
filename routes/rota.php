<?php
//CONTROLES
require_once '../bd/banco.php';
require_once '../controller/PacienteController.php';

$pacienteController = new PacienteController($pdo);



$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'login':
            
            echo 'Página de login (em construção)';
            break;

            case 'adicionarPaciente':
                $pacienteController->adicionarPaciente();
                break;
            case 'listarPacientes':
                $pacienteController->listarPacientes();
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
