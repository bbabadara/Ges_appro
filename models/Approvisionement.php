<?php
class Approvisionnement extends Model{
    public int $ida;
    public string $datea;
    public float $totala;
    public function __construct(){
        $this->table="approvisionnement";
        $this->class="Approvisionnement";
    }
    
}