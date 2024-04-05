<?php 

    require ('dib_con.php');

    $sql = "SELECT * FROM `student`";
    $result = $conn->query($sql);

    if($result){
        $student = $result->fetch_all(MYSQLI_ASSOC);
    }

    if(isset($_POST['submit'])){
        $student_id = $_POST['student_id'];
        $bangla = $_POST['bangla'];
        $englis = $_POST['englis'];
        $math = $_POST['math'];
        $physics = $_POST['physics'];
        $chemistry = $_POST['chemistry'];
        $isl_hin = $_POST['isl_hin'];

    $sql = "INSERT INTO mark(student_id,bangla,englis,math,physics,chemistry,isl_hin) VALUES ('$student_id','$bangla','$englis','$math','$physics',' $chemistry','$isl_hin ')";

        $result = $conn->query($sql);

        if($result){
            header('location: st_mark_list.php');
        } 
    }

    include ('view/st_mark_create_view.php');


?>