<?php

// session_start();
// if (($_SESSION['login_status'] == "false") || ($_SESSION['login_id'] =="")){
//     header('location:../index.html');exit();}

include "../classes/database.php";//parent
$data=json_decode(file_get_contents("php://input"));
//var_damp($data);
$table_name = $data[0]->table_name;

switch($table_name){
    case "chef":
        include 'model.chef.php';
        $instanceChef = new ModelChef();
        $full_name = $data[0]->full_name;
        $cover_chef = $data[0]->cover_chef;
        $description = $data[0]->description;
        $facebook = $data[0]->facebook;
        $linkedin = $data[0]->linkedin;
        $instagram = $data[0]->instagram;
        $instanceChef->insertChef($full_name,$cover_chef,$description,$facebook,$linked,$instagram);
    break;
    case "contact":
        include 'model.contact.php';
        $instanceContact = new ModelContact();
        $first_name = $data[0]->first_name;
        $last_name = $data[0]->last_name;
        $email = $data[0]->email;
        $mobile = $data[0]->mobile;
        $message = $data[0]->message;
        $instanceContact->insertContact($first_name,$last_name,$email,$mobile,$message);
    break;
    case "product":
        include 'model.product.php';
        $instanceProduct = new ModelProduct();
        $product_name = $data[0]->product_name;
        $product_description= $data[0]->product_description;
        $product_categorie = $data[0]->product_categorie;
        $product_action = $data[0]->product_action;
        $product_time = $data[0]->  product_time;
        $product_weight = $data[0]-> product_weight;
        $product_box = $data[0]->  product_box;
        $product_price = $data[0]->  product_price;
        $product_cover_1 = $data[0]->  product_cover_1;
        $product_cover_2 = $data[0]->  product_cover_2;
        $product_cover_3 = $data[0]->product_cover_3;
        $instanceProduct->insertProduct($product_name,$product_description,$product_categorie,$product_action,
        $product_time,$product_weight,$product_box,$product_price,$product_cover_1,$product_cover_2,$product_cover_3);
    break;
}

?>