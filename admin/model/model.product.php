<?php
class ModelProduct extends DB
{
//class members
private $table_name="product";

public function insertProduct($product_name,$product_description,$product_categorie,$product_action,
$product_time,$product_weight,$product_box,$product_price,$product_cover_1,$product_cover_2,$product_cover_3){
    $column_name= "product_name,product_description,product_categorie,product_action,product_time,product_weight,product_box,product_price,product_cover_1,product_cover_2,product_cover_3";
    $column_values = "'$product_name','$product_description','$product_categorie','$product_action',
    '$product_time','$product_weight','$product_box','$product_price','$product_cover_1','$product_cover_2','$product_cover_3'";
     parent :: insertRow($this->table_name,$column_name,$column_values);
    //$procedure_name = "_insertVisitor";//store procedure
    //parent :: callStoreProcedure($procedure_name,$column_values);//store procedure
}

public function selectProduct(){
   return parent :: selectRow($this->table_name);
}
public function deleteProduct($pk_value){
     $pk_name = "product_id";
     parent :: deleteRow($this->table_name,$pk_name,$pk_value);
    //$procedure_name = "_deleteVisitor";// povikuvanje delete so store procedure
    //parent :: callStoreProcedure($procedure_name,$pk_value);// povikuvanje delete so store procedure
}
}
?>