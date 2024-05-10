<?php
class Produit extends Model{
    public int $idp;
    public string $libellep;
    public string $qtestockp;
  
    public function __construct(){
        $this->table="produit";
        $this->class="Produit";
    }
    
}