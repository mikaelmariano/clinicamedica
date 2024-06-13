<?php
class Paciente {
    
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function adicionarPaciente($pessoa_id, $sus, $data_nascimento) {
        $sql = "INSERT INTO pessoapaciente (pessoa_id, sus, data_nascimento) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$pessoa_id, $sus, $data_nascimento]);
    }

    public function listarPacientes() {
        $sql = "SELECT p.id, p.nome, p.cpf_cnpj, p.endereco, pp.sus, pp.data_nascimento
                FROM pessoa p
                JOIN pessoapaciente pp ON p.id = pp.pessoa_id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
}
?>
