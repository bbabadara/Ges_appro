<?php
class Approvisionnement{
    public int $ida;
    public string $datea;
    public float $totala;
  
    private const SQL_SELECT_ALL="SELECT * FROM `approvisionnement`";
    public function findAll(){
        
        $mysqlClient = new PDO(
            'mysql:host=localhost;dbname=gesappro2;charset=utf8',
            'gesappro2',
            'gesappro123'
        );

    $result = $mysqlClient->query(self::SQL_SELECT_ALL); 
    $approvisionnements = $result->fetchAll(PDO::FETCH_CLASS,"Approvisionnement");
   
    return $approvisionnements;
    }
    
}