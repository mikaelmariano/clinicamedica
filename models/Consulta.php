<?php
class Consulta {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function adicionarConsulta($agendamento_id, $sintomas, $medicamentos) {
        $sql = "INSERT INTO consulta (agendamento_id, sintomas) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$agendamento_id, $sintomas]);
        $consulta_id = $this->pdo->lastInsertId();

        foreach ($medicamentos as $medicamento_id) {
            $sql = "INSERT INTO consulta_medicamento (consulta_id, medicamento_id) VALUES (?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$consulta_id, $medicamento_id]);
        }

        return $consulta_id;
    }

    public function listarConsultas() {
        $sql = "SELECT c.id, c.sintomas, a.id AS agendamento_id, p.nome AS paciente_nome, m.nome AS medico_nome, a.data
                FROM consulta c
                JOIN agendamento a ON c.agendamento_id = a.id
                JOIN pessoapaciente pp ON a.sus = pp.sus
                JOIN pessoa p ON pp.pessoa_id = p.id
                JOIN pessoamedico pm ON a.crm = pm.crm
                JOIN pessoa m ON pm.pessoa_id = m.id";
        $stmt = $this->pdo->query($sql);
        $consultas = $stmt->fetchAll();

        foreach ($consultas as &$consulta) {
            $consulta['medicamentos'] = $this->listarMedicamentosPorConsulta($consulta['id']);
        }

        return $consultas;
    }

    public function listarMedicamentosPorConsulta($consulta_id) {
        $sql = "SELECT m.nome
                FROM consulta_medicamento cm
                JOIN medicamento m ON cm.medicamento_id = m.id
                WHERE cm.consulta_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$consulta_id]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function atualizarCampo($id, $field, $value) {
        $sql = "UPDATE consulta SET $field = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$value, $id]);
    }

    public function excluirConsulta($id) {
        $sql = "DELETE FROM consulta WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function marcarAgendamentoRealizado($agendamento_id) {
        $sql = "UPDATE agendamento SET realizada = '1' WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$agendamento_id]);
    }
}
?>
