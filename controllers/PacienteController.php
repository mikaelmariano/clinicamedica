<?php
require_once '../config/db.php';
require_once '../models/Pessoa.php';
require_once '../models/Paciente.php';

class PacienteController {
    
    private $pessoaModel;
    
    private $pacienteModel;

    public function __construct($pdo) {

        $this->pessoaModel = new Pessoa($pdo);
        
        $this->pacienteModel = new Paciente($pdo);
   
    }

    public function adicionarPaciente() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $cpf_cnpj = $_POST['cpf_cnpj'];
            $endereco = $_POST['endereco'];
            $sus = $_POST['sus'];
            $data_nascimento = $_POST['data_nascimento'];

            $pessoa_id = $this->pessoaModel->adicionarPessoa($nome, $cpf_cnpj, $endereco);
            $this->pacienteModel->adicionarPaciente($pessoa_id, $sus, $data_nascimento);
            header('Location: /clinicamedica/public/index.php?page=listarPacientes');
        } else {
            require '../views/adicionarPaciente.php';
        }
    }

    public function listarPacientes() {
        $pacientes = $this->pacienteModel->listarPacientes();
        require '../views/listarPacientes.php';
    }
}
?>
