<?php 
include "Connict.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $dastor = "DELETE FROM foods WHERE id = $id" ;
    if($connict->query($dastor)===true){
        header("location:Fooda.php?messege=Success");

    }else{
        header("location:InsertFood.php?messege=fail");
    };
}


?>