<?php
require_once '../config/db.php';
require_once '../models/Consulta.php';
require_once '../models/Agendamento.php';
require_once '../models/Medicamento.php';

class ConsultaController {
    private $consultaModel;
    private $agendamentoModel;
    private $medicamentoModel;

    public function __construct($pdo) {
        $this->consultaModel = new Consulta($pdo);
        $this->agendamentoModel = new Agendamento($pdo);
        $this->medicamentoModel = new Medicamento($pdo);
    }

    public function adicionarConsulta() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $agendamento_id = $_POST['agendamento_id'];
            $sintomas = $_POST['sintomas'];
            $medicamentos = $_POST['medicamentos'] ?? [];

            $this->consultaModel->adicionarConsulta($agendamento_id, $sintomas, $medicamentos);
            $this->consultaModel->marcarAgendamentoRealizado($agendamento_id);
            header('Location: /clinicamedica/public/index.php?page=listarConsultas');
        } else {
            $agendamentos = $this->agendamentoModel->listarAgendamentosNaoRealizados();
            $medicamentos = $this->medicamentoModel->listarMedicamentos();
            require '../views/adicionarConsulta.php';
        }
    }

    public function listarConsultas() {
        $consultas = $this->consultaModel->listarConsultas();
        require '../views/listarConsultas.php';
    }

    public function atualizarConsulta() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $data = json_decode($_POST['data'], true);

            foreach ($data as $field => $value) {
                $this->consultaModel->atualizarCampo($id, $field, $value);
            }
        }
    }

    public function excluirConsulta() {
        $id = $_GET['id'];
        $this->consultaModel->excluirConsulta($id);
        header('Location: /clinicamedica/public/index.php?page=listarConsultas');
    }
}
?>
