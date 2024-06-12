<?php
class Pessoa {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function adicionarPessoa($nome, $cpf_cnpj, $endereco) {
        $sql = "INSERT INTO pessoa (nome, cpf_cnpj, endereco) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $cpf_cnpj, $endereco]);
        return $this->pdo->lastInsertId();
    }

    public function listarPessoas() {
        $sql = "SELECT * FROM pessoa";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
}
?>
