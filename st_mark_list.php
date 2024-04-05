<?php 
    require ('dib_con.php');


    $sql = "SELECT mark.*,student.name
    FROM mark
    JOIN student ON mark.student_id = student.id";

    $result = $conn->query($sql);
    

    if($result){
        $mark = $result->fetch_all(MYSQLI_ASSOC);
    }
    include('view/st_mark_list_view.php');
?>