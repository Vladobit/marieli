<?php
class ModelChef extends DB
{
//class members
private $table_name="chef";

public function selectChef(){
   return parent :: selectRow($this->table_name);
}

}
?>