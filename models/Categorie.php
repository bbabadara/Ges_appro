<?php
class Categorie{
    public int $idc;
    public string $libellec;
  
    private const SQL_SELECT_ALL="select * from categorie";
    public function findAll(){
        
        $mysqlClient = new PDO(
            'mysql:host=localhost;dbname=gesappro2;charset=utf8',
            'gesappro2',
            'gesappro123'
        );

    $result = $mysqlClient->query(self::SQL_SELECT_ALL); 
    $categories = $result->fetchAll(PDO::FETCH_CLASS,"Categorie");
    return $categories;
    }
    
}