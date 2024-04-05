<?php 
    require ('dib_con.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $registration = $_POST['registration'];

        $insert = "INSERT INTO student(name, roll, registration) VALUES ('$name','$roll',' $registration')";

        $result = $conn->query($insert);

        if($result){
            header('location: st_list.php');
        } 

    }

    include('view/student_create.php');
?>
