<?php
class Produit{
    public int $idp;
    public string $libellep;
    public string $prixp;
    public string $qtestockp;
  
    private const SQL_SELECT_ALL="select * from produit p, type t where p.idt=t.idt and libellet like 'Confection'";
    public function findAll(){
        
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=gesappro;charset=utf8',
        'root',
        ''
    );

    $result = $mysqlClient->query(self::SQL_SELECT_ALL); 
    $produits = $result->fetchAll(PDO::FETCH_CLASS,"Produit");
    return $produits;
    }
    
}