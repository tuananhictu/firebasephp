<?php
include("includes/db.php");

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $ref = $_POST['ref'];
    
    $data = [
        'name' => $name,
        'phone' => $phone,
    ];
    
    $pushData = $database->getReference($ref)->update($data);
    header("Location:home.php");
}
else if(isset($_GET['key'])){
    $database->getReference("DBContact/".$_GET['key'])->remove();
    header("Location:home.php");
}

?>