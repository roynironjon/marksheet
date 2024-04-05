<?php 
    require ('dib_con.php');

    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $registration = $_POST['registration'];
        $update_at = date('Y-m-d H:i:s');

        $sql = "UPDATE `student` SET `name`='$name',`roll`='$roll',`registration`=' $registration', update_at='$update_at' WHERE id=$id";

        $result = $conn->query($sql);

        if($result){
            header('location: st_list.php');
        } 

    }


?>