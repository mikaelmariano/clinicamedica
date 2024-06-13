<?php
//CONTROLES
require_once '../bd/banco.php';

require_once '../controllers/FornecedorController.php';

$fornecedorController = new FornecedorController($pdo);

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'login':  
            echo 'Página de login (em construção)';
            break;

        case 'adicionarFornecedor':
            $fornecedorController->adicionarFornecedor();
            break;
        case 'listarFornecedores':
            $fornecedorController->listarFornecedores();
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
