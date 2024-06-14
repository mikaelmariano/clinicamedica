<?php
class Agendamento {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function adicionarAgendamento($realizada, $sus, $crm, $data) {
        $sql = "INSERT INTO agendamento (realizada, sus, crm, data) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$realizada, $sus, $crm, $data]);
    }

    public function listarAgendamentos() {
        $sql = "SELECT a.id, a.realizada, a.sus, p.nome AS paciente_nome, a.crm, m.nome AS medico_nome, a.data
                FROM agendamento a
                JOIN pessoapaciente pp ON a.sus = pp.sus
                JOIN pessoa p ON pp.pessoa_id = p.id
                JOIN pessoamedico pm ON a.crm = pm.crm
                JOIN pessoa m ON pm.pessoa_id = m.id
                where a.realizada <> 1
                order by a.id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function listarAgendamentosNaoRealizados() {
        $sql = "SELECT a.id, a.realizada, a.sus, p.nome AS paciente_nome, a.crm, m.nome AS medico_nome, a.data
                FROM agendamento a
                JOIN pessoapaciente pp ON a.sus = pp.sus
                JOIN pessoa p ON pp.pessoa_id = p.id
                JOIN pessoamedico pm ON a.crm = pm.crm
                JOIN pessoa m ON pm.pessoa_id = m.id
                WHERE a.realizada = '0'";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
    

    public function atualizarCampo($id, $field, $value) {
        $sql = "UPDATE agendamento SET $field = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$value, $id]);
    }

    public function excluirAgendamento($id) {
        $sql = "DELETE FROM agendamento WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>
