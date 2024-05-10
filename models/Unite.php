<?php
class Unite extends Model{
    public int $idc;
    public string $libellec;
  
    public function __construct(){
        $this->table="unite";
        $this->class="Unite";
    }
    
}