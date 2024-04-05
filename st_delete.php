<?php 
    require ('dib_con.php');

    if(isset($_GET['id'])){
        $id = base64_decode($_GET['id']);
        
        $sql = "DELETE FROM `student` WHERE id=$id";
        $result = $conn->query($sql);

        if($result){
            header('location: st_list.php');
        }
    }

?>

