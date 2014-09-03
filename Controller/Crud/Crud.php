<?php

abstract class Crud {

    protected $dbname;
    protected $table;

    public function __construct(PDO $db) {
        $this->dbname = $db;
    }
    abstract public function insert($parametro);

    abstract public function update($parametro);

    public function find($id) {
        $stmt = $this->dbname->prepare("select * from $this->table where id=$id");
        $stmt->execute();
        return $stmt->fetch();

    }

    public function delete($id) {
        $stmt = $this->dbname->prepare("delete from $this->table where id=$id");
        return $stmt->execute();
    }

    public function fetchAll() {
        $stmt = $this->dbname->prepare("select * from $this->table order by id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
