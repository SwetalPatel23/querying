<?php
    $college = $_POST['college'];
    $category = $_POST['category'];
    $merit = $_POST['merit'];

    include("dao.php");
    try{   
         $sql ="insert into apply_tbl (college,category,merit) values('$college','$category',$merit) ";
        mysqli_query($connection,$sql);
    }catch(Exception $e){
        echo $e->getMessage();
    }
    header("location:apply.php");
?>
