<?php 
include "Connict.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $dastor = "DELETE FROM catagori WHERE id =".$id ;
    if($connict->query($dastor)===true){
        header("location:Catagoria.php?messege=Success");
    }else{
        header("location:InserCatagori.php?messege=fail");
    };
}


?>