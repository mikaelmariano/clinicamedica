<?php
require_once '../config/db.php';
require_once '../models/Agendamento.php';
require_once '../models/Paciente.php';
require_once '../models/Medico.php';

class AgendamentoController {
    private $agendamentoModel;
    private $pacienteModel;
    private $medicoModel;

    public function __construct($pdo) {
        $this->agendamentoModel = new Agendamento($pdo);
        $this->pacienteModel = new Paciente($pdo);
        $this->medicoModel = new Medico($pdo);
    }

    public function adicionarAgendamento() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $realizada = 'não';
            $sus = $_POST['sus'];
            $crm = $_POST['crm'];
            $data = $_POST['data'];

            $this->agendamentoModel->adicionarAgendamento($realizada, $sus, $crm, $data);
            header('Location: /clinicamedica/public/index.php?page=listarAgendamentos');
        } else {
            $pacientes = $this->pacienteModel->listarPacientes();
            $medicos = $this->medicoModel->listarMedicos();
            require '../views/adicionarAgendamento.php';
        }
    }

    public function listarAgendamentos() {
        $agendamentos = $this->agendamentoModel->listarAgendamentos();
        require '../views/listarAgendamentos.php';
    }

    public function atualizarAgendamento() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $data = json_decode($_POST['data'], true);

            foreach ($data as $field => $value) {
                $this->agendamentoModel->atualizarCampo($id, $field, $value);
            }
        }
    }

    public function excluirAgendamento() {
        $id = $_GET['id'];
        $this->agendamentoModel->excluirAgendamento($id);
        header('Location: /clinicamedica/public/index.php?page=listarAgendamentos');
    }
}
?>
