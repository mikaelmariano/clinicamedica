<?php
class Fornecedor {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function adicionarFornecedor($pessoa_id, $inscricao_municipal, $marca) {
        $sql = "INSERT INTO pessoafornecedor (pessoa_id, inscricao_municipal, marca) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$pessoa_id, $inscricao_municipal, $marca]);
    }

    public function listarFornecedores() {
        $sql = "SELECT p.id, p.nome, p.cpf_cnpj, p.endereco, pf.inscricao_municipal, pf.marca
                FROM pessoa p
                JOIN pessoafornecedor pf ON p.id = pf.pessoa_id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
}
?>
