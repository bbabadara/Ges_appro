<?php
class Type extends Model {
    public int $idt;
    public string $libellet;
  
    public function __construct(){
        $this->table="type";
        $this->class="Type";
    }
    
}