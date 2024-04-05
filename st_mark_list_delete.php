<?php 
    require ('dib_con.php');

    if(isset($_GET['id'])){
        $id = base64_decode($_GET['id']);
        
        $sql = "DELETE FROM mark WHERE id=$id";
        $result = $conn->query($sql);

        if($result){
            header('location: st_mark_list.php');
        }
    }
    
    include('st_mark_list.php');
?>