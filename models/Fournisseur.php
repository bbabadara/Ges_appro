<?php
class Fournisseur{
    public int $idf;
    public string $nomf;
    public string $telf;
    private const SQL_SELECT_ALL="select * from fournisseur";
    public function findAll(){
        
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=gesappro;charset=utf8',
        'root',
        ''
    );

    $result = $mysqlClient->query(self::SQL_SELECT_ALL); 
    $fournisseurs = $result->fetchAll(PDO::FETCH_CLASS,"Fournisseur");
    // echo "<pre>";
    // var_dump($fournisseurs);
    // echo "</pre>";
    // die;
    return $fournisseurs;
    }
    
}