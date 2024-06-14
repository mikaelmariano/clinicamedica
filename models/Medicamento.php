<?php
class Medicamento {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function adicionarMedicamento($nome, $fornecedor_id) {
        $sql = "INSERT INTO medicamento (nome, fornecedor_id) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $fornecedor_id]);
    }

    public function listarMedicamentos() {
        $sql = "SELECT m.id, m.nome, f.marca
                FROM medicamento m
                JOIN pessoafornecedor f ON m.fornecedor_id = f.pessoa_id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function listarFornecedores() {
        $sql = "SELECT p.id, p.nome, pf.marca
                FROM pessoa p
                JOIN pessoafornecedor pf ON p.id = pf.pessoa_id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
}
?>
