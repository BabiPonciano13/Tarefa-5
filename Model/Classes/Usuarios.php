<?php

include '../../Controller/Crud/Crud.php';

class Usuarios extends Crud {

    protected $table = 'usuarios';

    public function __construct(PDO $param) {
        parent::__construct($param);
    }

    public function update($data) {

        $stmt = $this->dbname->prepare("UPDATE $this->table SET login = :login, senha = md5(:senha), admin = :lol, admin_2 = :oiu WHERE id = :id");
        $stmt->bindParam(':id', trim($data['id']), PDO::PARAM_INT);
        $stmt->bindParam(':login', strtoupper(trim($data['login'])), PDO::PARAM_STR);
        $stmt->bindParam(':senha', strtoupper(trim($data['senha'])), PDO::PARAM_STR);
        $admin = false;
        $admin2 = false;
        $stmt->bindParam(':lol', $admin, PDO::PARAM_BOOL);
        $stmt->bindParam(':oiu', $admin2, PDO::PARAM_BOOL);
        $stmt->execute();
    }

    public function insert($data) {
        $stmt = $this->dbname->prepare("INSERT INTO usuarios( login, senha, admin, admin_2) VALUES (:login, md5(:senha), :admin, :admin_2 )");
        $stmt->bindParam(':login', strtoupper(trim($data['login'])), PDO::PARAM_STR);
        $stmt->bindParam(':senha', strtoupper(trim($data['senha'])), PDO::PARAM_STR);
        $stmt->bindParam(':admin', $data['admin'], PDO::PARAM_BOOL);
        $stmt->bindParam(':admin_2', $data['admin2'], PDO::PARAM_BOOL);

        $stmt->execute();
    }

}
