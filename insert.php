<?php 
    require('dib_con.php');

    $name ='';  
    $class ='';  
    $roll ='';  
    $registration  ='';  
    $note =''; 

    $err_name ='';  
    $err_class ='';  
    $err_roll ='';  
    $err_registration  ='';  
    $err_note =''; 

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $class = $_POST['class'];
        $roll = $_POST['roll'];
        if(!empty($roll)){
            $roll = intval($roll);
        }
        $registration = $_POST['registration'];
        if(!empty($registration)){
            $registration = intval($registration);
        }
        $note = $_POST['note'];

        $err = 0;
        if (empty($name) || strlen($name) > 20) {
            $err++;
            $err_name = 'Name field is required & should be 20 characters or less';
        }
        if (empty($class) || strlen($class) > 10 || is_numeric($class) || is_int($class)) {
            $err++;
            $err_class = 'Name field is required & should be 10 characters or less';
        }
        if (empty($roll) || !is_numeric($roll) || !is_int($roll) || strlen($roll) !== 6) {
            $err++;
            $err_roll = 'Name field is required & must be 6 digit';
        }
        if (empty($registration) || !is_numeric($registration) || !is_int($registration) || strlen((string)$registration) !== 8) {
            $err++;
            $err_registration = 'Registratio field is required & must be 8 digit';
        }
        if (strlen($note) > 300) {
            $err++;
            $err_note = 'Note must be less than 300 cherecter';
        }
        if($err == 0){
           $insert = "INSERT INTO st_php_validation (name,class,roll,registration,note) VALUES ('$name','$class','$roll','$registration','$note')";

            $result = $conn->query($insert);
            if($result){
                $name ='';  
                $class ='';  
                $roll ='';  
                $registration  ='';  
                $note =''; 
            }
        }

    }



    include ('view/st_insert_view.php');
     //

?>

