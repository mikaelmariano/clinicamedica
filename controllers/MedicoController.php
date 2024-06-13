<?php
require_once '../config/db.php';
require_once '../models/Pessoa.php';
require_once '../models/Medico.php';

class MedicoController {
    private $pessoaModel;
    private $medicoModel;

    public function __construct($pdo) {
        $this->pessoaModel = new Pessoa($pdo);
        $this->medicoModel = new Medico($pdo);
    }

    public function adicionarMedico() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $cpf_cnpj = $_POST['cpf_cnpj'];
            $endereco = $_POST['endereco'];
            $crm = $_POST['crm'];
            $especialidade = $_POST['especialidade'];

            $pessoa_id = $this->pessoaModel->adicionarPessoa($nome, $cpf_cnpj, $endereco);
            $this->medicoModel->adicionarMedico($pessoa_id, $crm, $especialidade);
            header('Location: /clinicamedica/public/index.php?page=listarMedicos');
        } else {
            require '../views/adicionarMedico.php';
        }
    }

    public function listarMedicos() {
        $medicos = $this->medicoModel->listarMedicos();
        require '../views/listarMedicos.php';
    }
}
?>