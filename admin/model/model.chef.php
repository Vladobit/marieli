<?php
class ModelChef extends DB
{
//class members
private $table_name="chef";

public function insertChef($full_name,$cover_chef,$description,$facebook,$linkedin,$instagram){
    $column_name= "full_name,cover_chef,description,facebook,linkedin,instagram";
    $column_values = "'$full_name','$cover_chef','$description','$facebook','$linkedin','$instagram'";
     parent :: insertRow($this->table_name,$column_name,$column_values);
    //$procedure_name = "_insertVisitor";//store procedure
    //parent :: callStoreProcedure($procedure_name,$column_values);//store procedure
}

public function selectChef(){
   return parent :: selectRow($this->table_name);
}
public function deleteContact($pk_value){
     $pk_name = "chef_id";
     parent :: deleteRow($this->table_name,$pk_name,$pk_value);
    //$procedure_name = "_deleteVisitor";// povikuvanje delete so store procedure
    //parent :: callStoreProcedure($procedure_name,$pk_value);// povikuvanje delete so store procedure
}
}
?>