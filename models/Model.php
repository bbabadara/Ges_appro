<?php
class Model {
    protected string $table;
    protected string $class;
    

    public function findAll(){
     $SQL_SELECT_ALL="select * from $this->table";
        $mysqlClient = new PDO(
            'mysql:host=localhost;dbname=gesappro2;charset=utf8',
            'gesappro2',
            'gesappro123'
        );

    $result = $mysqlClient->query($SQL_SELECT_ALL); 
    $all = $result->fetchAll(PDO::FETCH_CLASS,$this->class);
    return $all;
    }
}
