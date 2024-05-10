<?php
class Fournisseur extends Model{
    public int $idf;
    public string $nomf;
    public string $telf;

    public function __construct(){
        $this->table="fournisseur";
        $this->class="Fournisseur";
    }
    
}