<?php
class ModelContact extends DB
{
//class members
private $table_name="contact";

public function insertContact($first_name,$last_name,$email,$mobile,$message){
    $column_name= "first_name,last_name,email,mobile,message";
    $column_values = "'$first_name','$last_name','$email',$mobile,'$message'";
     parent :: insertRow($this->table_name,$column_name,$column_values);
    //$procedure_name = "_insertVisitor";//store procedure
    //parent :: callStoreProcedure($procedure_name,$column_values);//store procedure
}

// public function selectVisitor(){
//    return parent :: selectRow($this->table_name);
// }
// public function deleteVisitor($pk_value){
//      $pk_name = "visitor_id";
//      parent :: deleteRow($this->table_name,$pk_name,$pk_value);
//     //$procedure_name = "_deleteVisitor";// povikuvanje delete so store procedure
//     //parent :: callStoreProcedure($procedure_name,$pk_value);// povikuvanje delete so store procedure
// }
}
?>