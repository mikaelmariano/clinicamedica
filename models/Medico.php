<?php
class Medico {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function adicionarMedico($pessoa_id, $crm, $especialidade) {
        $sql = "INSERT INTO pessoamedico (pessoa_id, crm, especialidade) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$pessoa_id, $crm, $especialidade]);
    }

    public function listarMedicos() {
        $sql = "SELECT p.id, p.nome, p.cpf_cnpj, p.endereco, pm.crm, pm.especialidade
                FROM pessoa p
                JOIN pessoamedico pm ON p.id = pm.pessoa_id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
}
?>
