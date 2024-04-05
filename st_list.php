<?php 
    require ('dib_con.php');

    $sql = "SELECT * FROM `student`";
    $result = $conn->query($sql);

    if($result){
        $student = $result->fetch_all(MYSQLI_ASSOC);
    }
    include('view/st_list_view.php');
?>