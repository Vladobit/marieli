<?php

// session_start();
// if (($_SESSION['login_status'] == "false") || ($_SESSION['login_id'] =="")){
//     header('location:../index.html');exit();}

include "../classes/database.php";//parent
$data=json_decode(file_get_contents("php://input"));
//var_damp($data);
$table_name = $data[0]->table_name;

switch($table_name){
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
}

?>