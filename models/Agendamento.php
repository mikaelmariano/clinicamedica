<?php
class Agendamento {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function adicionarAgendamento($sus, $crm, $data) {
        $sql = "INSERT INTO agendamento (sus, crm, data) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$sus, $crm, $data]);
    }

    public function listarAgendamentos() {
        $sql = "SELECT a.id, a.realizada, p.nome AS paciente, m.nome AS medico, a.data
                FROM agendamento a
                JOIN pessoapaciente pp ON a.sus = pp.sus
                JOIN pessoa p ON pp.pessoa_id = p.id
                JOIN pessoamedico pm ON a.crm = pm.crm
                JOIN pessoa m ON pm.pessoa_id = m.id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function listarPacientes() {
        $sql = "SELECT pp.sus, p.nome
                FROM pessoapaciente pp
                JOIN pessoa p ON pp.pessoa_id = p.id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function listarMedicos() {
        $sql = "SELECT pm.crm, p.nome
                FROM pessoamedico pm
                JOIN pessoa p ON pm.pessoa_id = p.id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function listarAgendamentosNaoRealizados() {
        $sql = "SELECT a.id, p.nome AS paciente, pm.crm, m.nome AS medico, a.data
                FROM agendamento a
                JOIN pessoapaciente pp ON a.sus = pp.sus
                JOIN pessoa p ON pp.pessoa_id = p.id
                JOIN pessoamedico pm ON a.crm = pm.crm
                JOIN pessoa m ON pm.pessoa_id = m.id
                WHERE a.realizada = FALSE";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
}
?>
