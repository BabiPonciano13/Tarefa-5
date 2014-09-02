<?php

include '../../Controller/Crud/Crud.php';

class Alunos extends Crud {

    protected $table = 'alunos';

    public function __construct(PDO $param) {
        parent::__construct($param);
    }

    public function update($data) {
        $stmt = $this->dbname->prepare("UPDATE $this->table SET nome = :nome, cpf = :cpf, estado = :estado, numero = :numero WHERE id = :id");
//        $stmt = $this->dbname->prepare("UPDATE $this->table SET nome = :nome, cpf = :cpf, estado = :estado, numero = :numero, prof_id = :professores WHERE id = :id");
        $stmt->bindParam(':id', trim($data['id']), PDO::PARAM_INT);
        $stmt->bindParam(':nome', strtoupper(trim($data['nome'])), PDO::PARAM_STR);
        $stmt->bindParam(':cpf', strtoupper(trim($data['cpf'])), PDO::PARAM_STR);
        $stmt->bindParam(':estado', strtoupper(trim($data['estado'])), PDO::PARAM_STR);
        $stmt->bindParam(':numero', strtoupper(trim($data['numero'])), PDO::PARAM_INT);
//        $stmt->bindParam(':professores', strtoupper(trim($data['professores'])), PDO::PARAM_STR);
        $stmt->execute();
//        
    }

    public function insert($data) {
        $stmt = $this->dbname->prepare("INSERT INTO alunos( nome, cpf, estado, numero) VALUES (:nome, :cpf, :estado, :numero)");
//        $stmt = $this->dbname->prepare("INSERT INTO alunos( nome, cpf, estado, numero, prof_id) VALUES (:nome, :cpf, :estado, :numero, :professores)");
        $stmt->bindParam(':nome', strtoupper(trim($data['nome'])), PDO::PARAM_INT);
        $stmt->bindParam(':cpf', strtoupper(trim($data['cpf'])), PDO::PARAM_STR);
        $stmt->bindParam(':estado', strtoupper(trim($data['estado'])), PDO::PARAM_STR);
        $stmt->bindParam(':numero', strtoupper(trim($data['numero'])), PDO::PARAM_STR);
//        $stmt->bindParam(':professores', strtoupper(trim($data['professores'])), PDO::PARAM_STR);
        $stmt->execute();
    }

}
