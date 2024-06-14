<?php
require_once '../config/db.php';
require_once '../models/Pessoa.php';
require_once '../models/Fornecedor.php';

class FornecedorController {
    private $pessoaModel;
    private $fornecedorModel;

    public function __construct($pdo) {
        $this->pessoaModel = new Pessoa($pdo);
        $this->fornecedorModel = new Fornecedor($pdo);
    }

    public function adicionarFornecedor() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $cpf_cnpj = $_POST['cpf_cnpj'];
            $endereco = $_POST['endereco'];
            $inscricao_municipal = $_POST['inscricao_municipal'];
            $marca = $_POST['marca'];

            $pessoa_id = $this->pessoaModel->adicionarPessoa($nome, $cpf_cnpj, $endereco);
            $this->fornecedorModel->adicionarFornecedor($pessoa_id, $inscricao_municipal, $marca);
            header('Location: /clinicamedica/public/index.php?page=listarFornecedores');
        } else {
            require '../views/adicionarFornecedor.php';
        }
    }

    public function listarFornecedores() {
        $fornecedores = $this->fornecedorModel->listarFornecedores();
        require '../views/listarFornecedores.php';
    }
}
?>
