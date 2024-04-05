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
            
            $bangla = $data['bangla'];
            $englis = $data['englis'];
            $math = $data['math'];
            $physics = $data['physics'];
            $chemistry = $data['chemistry'];
            $isl_hin = $data['isl_hin'];

            $marks = ['Bangla'=>$bangla, 'Englis'=>$englis, 'Math'=>$math, 'Physics'=>$physics, 'Chemistry'=>$chemistry, 'isl_hin'=>$isl_hin];          
        }
    }

    include('view/st_marksheet_view.php');
?>