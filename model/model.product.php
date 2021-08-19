<?php
class ModelProduct extends DB
{
//class members
private $table_name="product";

public function selectProduct(){
   return parent :: selectRow($this->table_name);
}
}
?>