<?php 
    require ('dib_con.php');

    if(isset($_GET['id'])){
        $id = base64_decode($_GET['id']);
        
        $sql = "SELECT mark.*, student.name 
        FROM mark 
        JOIN student ON mark.student_id = student.id 
        WHERE mark.id = $id";
        
        $result = $conn->query($sql);

        if($result){
            $data = $result->fetch_assoc();
        }
    }

    include('view/st_mark_edit_view.php');
?>
