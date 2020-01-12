<?php
function query_view(){
    include "connection.php";
    $query = "SELECT * FROM employees";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0){
        foreach($result as $record){
            $rows[] = $record;
        }
    }
    return $result;
}
function detail_view(){
    include "connection.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM employees WHERE emp_id=$id";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0){
        foreach($result as $record){
            $rows[] = $record;
        }
    }
    return $result;
}
function add_data(){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $tel = $_POST['tel'];
   $province = $_POST['province'];
   $position = $_POST['position'];
   include "connection.php";
   $query = "INSERT INTO employees(firstname,lastname,email,tel,province,position)
   VALUES('$fname','$lname','$email','$tel','$province','$position')";
   $result = mysqli_query($connection,$query);
   return $result;
}
function delete_employees(){
    include "connection.php";
    $id = $_GET['id'];
    $query ="DELETE FROM employees WHERE emp_id= $id";
    $result = mysqli_query($connection,$query);
    return $result;
}
function update_data(){
    include "connection.php";
    $id = $_GET['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $province = $_POST['province'];
    $position = $_POST['position'];
    $query = "UPDATE employees SET firstname='$fname',lastname='$lname',email='$email',tel='$tel',province='$province',position='$position' WHERE emp_id=$id";
    $result = mysqli_query($connection,$query);
    return $result;
   }
?>
