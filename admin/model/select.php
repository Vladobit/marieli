<?php
include "../classes/database.php";//parent
$table_name = $_GET["table_name"];
$d = array();

switch($table_name){
    case "contact":
        include "model.contact.php";//chiled
        $instanceModelContact = new ModelContact();
        $results=$instanceModelContact->selectContact();
        foreach($results as $row){
            $d["records"][]= array("contact_id" =>$row["contact_id"],
                                   "first_name"=>$row["first_name"],
                                   "last_name"    =>$row["last_name"],
                                   "email"   =>$row["email"],
                                   "mobile"=>$row["mobile"],
                                   "message"=>$row["message"],
                                   "create_ad"=>$row["create_ad"]);
            }
            echo json_encode($d);
    break;
    case "chef":
        include "model.chef.php";//chiled
        $instanceModelChef = new ModelChef();
        $results=$instanceModelChef->selectChef();
        foreach($results as $row){
            $d["records"][]= array("chef_id" =>$row["chef_id"],
                                   "full_name"=>$row["full_name"],
                                   "cover_chef"=>$row["cover_chef"],
                                   "description"=>$row["description"],
                                   "facebook"=>$row["facebook"],
                                   "linkedin"=>$row["linkedin"],
                                   "instagram"=>$row["instagram"]);
            }
            echo json_encode($d);
    break;
    case "product":
        include "model.product.php";//chiled
        $instanceModelProduct = new ModelProduct();
        $results=$instanceModelProduct->selectProduct();
        foreach($results as $row){
            $d["records"][]= array("product_id" =>$row["product_id"],
                                   "product_name"=>$row["product_name"],
                                   "product_description"=>$row["product_description"],
                                   "product_categorie"=>$row["product_categorie"],
                                   "product_action"=>$row["product_action"],
                                   "product_time"=>$row["product_time"],
                                   "product_weight"=>$row["product_weight"],
                                   "product_box"=>$row["product_box"],
                                   "product_price"=>$row["product_price"],
                                   "product_cover_1"=>$row["product_cover_1"],
                                   "product_cover_2"=>$row["product_cover_2"],
                                   "product_cover_3"=>$row["product_cover_3"]);

            }
            echo json_encode($d);
    break;
    
    }?>