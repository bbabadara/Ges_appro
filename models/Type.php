<?php
class Type {
    public int $idt;
    public string $libellet;
  
    private const SQL_SELECT_ALL="select * from Type";
    public function findAll(){
        
        $mysqlClient = new PDO(
            'mysql:host=localhost;dbname=gesappro2;charset=utf8',
            'gesappro2',
            'gesappro123'
        );

    $result = $mysqlClient->query(self::SQL_SELECT_ALL); 
    $Types = $result->fetchAll(PDO::FETCH_CLASS,"Type");
    return $Types;
    }
    
}