<?php
require_once '../config/db.php';
require_once '../models/Medicamento.php';

class MedicamentoController {
    private $medicamentoModel;

    public function __construct($pdo) {
        $this->medicamentoModel = new Medicamento($pdo);
    }

    public function adicionarMedicamento() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $fornecedor_id = $_POST['fornecedor_id'];

            $this->medicamentoModel->adicionarMedicamento($nome, $fornecedor_id);
            header('Location: /clinicamedica/public/index.php?page=listarMedicamentos');
        } else {
            $fornecedores = $this->medicamentoModel->listarFornecedores();
            require '../views/adicionarMedicamento.php';
        }
    }

    public function listarMedicamentos() {
        $medicamentos = $this->medicamentoModel->listarMedicamentos();
        require '../views/listarMedicamentos.php';
    }
}
?>
