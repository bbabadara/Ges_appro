<?php
class Unite{
    public int $idc;
    public string $libellec;
  
    private const SQL_SELECT_ALL="select * from unite";
    public function findAll(){
        
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=gesappro;charset=utf8',
        'root',
        ''
    );

    $result = $mysqlClient->query(self::SQL_SELECT_ALL); 
    $unites = $result->fetchAll(PDO::FETCH_CLASS,"Unite");
    return $unites;
    }
    
}