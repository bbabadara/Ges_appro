<?php
class Categorie extends Model{
    public int $idc;
    public string $libellec;
  
    public function __construct(){
        $this->table="categorie";
        $this->class="Categorie";
    }
    
}