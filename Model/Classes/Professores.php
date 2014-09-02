<?php

include '../../Controller/Crud/Crud.php';

class Professores extends Crud {

    protected $table = 'professores';

    public function __construct(PDO $param) {
        parent::__construct($param);
    }

    public function update($data) {

        $stmt = $this->dbname->prepare("UPDATE $this->table SET nome = :nome, turno = :turno WHERE id = :id");
        $stmt->bindParam(':id', trim($data['id']), PDO::PARAM_INT);
        $stmt->bindParam(':nome', strtoupper(trim($data['nome'])), PDO::PARAM_STR);
        $stmt->bindParam(':turno', strtoupper(trim($data['turno'])), PDO::PARAM_STR);
        $stmt->execute();
    }

    public function insert($data) {
        $stmt = $this->dbname->prepare("INSERT INTO professores( nome, turno) VALUES (:nome, :turno)");
        $stmt->bindParam(':nome', strtoupper(trim($_POST['nome'])), PDO::PARAM_INT);
        $stmt->bindParam(':turno', strtoupper(trim($_POST['turno'])), PDO::PARAM_STR);
        $stmt->execute();
    }

}
