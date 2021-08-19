<?php
include "../classes/database.php";//parent
$data=json_decode(file_get_contents("php://input"));
//var_damp($data);
$table_name = $data[0]->table_name;
$pk_value = $data[0]->pk_value;

switch($table_name){
    case "contact":
        include 'model.contact.php';
        $instanceModelContact = new ModelContact();
        $instanceModelContact->deleteContact($pk_value);
    break;
    case "chef":
        include 'model.chef.php';
        $instanceModelChef = new ModelChef();
        $instanceModelChef->deleteChef($pk_value);
    break;
    case "product":
        include 'model.product.php';
        $instanceModelProduct = new ModelProduct();
        $instanceModelProduct->deleteProduct($pk_value);
    break;
    
}?>