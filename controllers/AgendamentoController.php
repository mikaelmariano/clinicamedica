<?php
require_once '../config/db.php';
require_once '../models/Agendamento.php';

class AgendamentoController {
    private $agendamentoModel;

    public function __construct($pdo) {
        $this->agendamentoModel = new Agendamento($pdo);
    }

    public function adicionarAgendamento() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $sus = $_POST['sus'];
            $crm = $_POST['crm'];
            $data = $_POST['data'];

            $this->agendamentoModel->adicionarAgendamento($sus, $crm, $data);
            header('Location: /clinicamedica/public/index.php?page=listarAgendamentos');
        } else {
            $pacientes = $this->agendamentoModel->listarPacientes();
            $medicos = $this->agendamentoModel->listarMedicos();
            require '../views/adicionarAgendamento.php';
        }
    }

    public function listarAgendamentos() {
        $agendamentos = $this->agendamentoModel->listarAgendamentos();
        require '../views/listarAgendamentos.php';
    }
}
?>
