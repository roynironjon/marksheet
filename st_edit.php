<?php 
    require ('dib_con.php');

    if(isset($_GET['id'])){
        $id = base64_decode($_GET['id']);
        
        $sql = "SELECT * FROM student WHERE id=$id";
        $result = $conn->query($sql);

        if($result){
            $data = $result->fetch_assoc();
        }
    }

    include('view/st_edit_view.php');
?>
