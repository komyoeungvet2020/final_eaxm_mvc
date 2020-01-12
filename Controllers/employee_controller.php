<?php
$data = array();
flexible_function($data);

function flexible_function(&$data) {
    $function = 'view';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}

function view(&$data) {
    $data['view_data'] = query_view();
    $data['page'] = "employee/view";
}

function add_form(&$data) {
    $data['page']= "employee/add";
}

function add_employee(&$data) {
     $add_employee = add_data($_POST);
     if($add_employee){
         $action = "view";
     }else{
         $action = "add";
     }
     header("Location:index.php?action=$action");
}

function edit_form(&$data) {
     $data['page'] = "employee/edit";
     $data['view_data'] = detail_view();
}

function update_employee(&$data) {
     $edit = update_data($_POST);
     if($edit){
         $action = "view";
     }else{
         $action = "edit";
     }
     header("Location:index.php?action=$action");
}

function delete_employee(&$data) {
    $delete = delete_employees();
    if($delete){
        $action = "view";
    }else{
        echo "Cannot delete data";
    }
    header("Location:index.php?action=$action");
}