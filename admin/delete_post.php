<?php

include_once("../libs/config.php");
include_once("../libs/function.php");


$select=new data();

//delete post 

if(isset($_GET['delete_id'])){
    
    $delete_id = $_GET['delete_id'];
    $query = "delete from post where id='$delete_id' ";
    $run=$select->delete($query);
}

?>