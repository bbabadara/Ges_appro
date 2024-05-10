<?php
class Produit{
    public int $idp;
    public string $libellep;
    public string $qtestockp;
  
    private const SQL_SELECT_ALL="select * from produit";
    public function findAll(){
        
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=gesappro2;charset=utf8',
        'gesappro2',
        'gesappro123'
    );

    $result = $mysqlClient->query(self::SQL_SELECT_ALL); 
    $produits = $result->fetchAll(PDO::FETCH_CLASS,"Produit");
 
    return $produits;
    }
    
}