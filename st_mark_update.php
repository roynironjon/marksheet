<?php 

    // require ('dib_con.php');

    // if(isset($_GET['id'])){
    //     $id = $_GET['id'];
    //     $student_id = $_POST['student_id'];
    //     $bangla = $_POST['bangla'];
    //     $englis = $_POST['englis'];
    //     $math = $_POST['math'];
    //     $physics = $_POST['physics'];
    //     $chemistry = $_POST['chemistry'];
    //     $isl_hin = $_POST['isl_hin'];

    //     $sql = "UPDATE `mark` SET `student_id`=' $student_id',`bangla`='$bangla',`englis`='$englis',`math`='$math',`physics`='$physics',`chemistry`='$chemistry',`isl_hin`='$isl_hin' WHERE id=$id";

    //     $result = $conn->query($sql);

    //     var_dump($result);

    //     // if($result){
    //     //     header('location: st_mark_list.php');
    //     // } 
    // }
   

    require('dib_con.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $bangla = mysqli_real_escape_string($conn, $_POST['bangla']);
        $englis = mysqli_real_escape_string($conn, $_POST['englis']);
        $math = mysqli_real_escape_string($conn, $_POST['math']);
        $physics = mysqli_real_escape_string($conn, $_POST['physics']);
        $chemistry = mysqli_real_escape_string($conn, $_POST['chemistry']);
        $isl_hin = mysqli_real_escape_string($conn, $_POST['isl_hin']);

        $sql = "UPDATE `mark` SET `bangla`='$bangla', `englis`='$englis', `math`='$math', `physics`='$physics', `chemistry`='$chemistry', `isl_hin`='$isl_hin' WHERE id=$id";

        $result = $conn->query($sql);

        if($result){
           header('location: st_mark_list.php');
        } 
    }

?>




