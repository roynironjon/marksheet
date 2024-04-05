<?php 
    require('dib_con.php');

    $search_value ='';  
    $error_sv ='';  

    if(isset($_POST['search'])){
        $search_value = $_POST['search_value'];
     
        if(!empty($search_value)){
            $search_value = intval($search_value);
        }
        if (empty($search_value) || !is_numeric($search_value) || !is_int($search_value)) {
            if(empty($search_value)){
                $error_sv= 'Search field is requeard';
                $error_sv= base64_encode($error_sv);
                header("location:search_marksheet_view.php?error=$error_sv");
            }else{
                $error_sv= 'Roll or registration number must be a intager value';
                $error_sv= base64_encode($error_sv);
                header("location:search_marksheet_view.php?error=$error_sv");
            }
        }else{
            $search = "SELECT * FROM student WHERE roll LIKE '%$search_value%' OR registration like '%$search_value%'";

            $result = $conn->query($search);

            if($result){
                $students = $result->fetch_assoc();
                if(empty($students)){
                    $empty= base64_encode($empty);
                    header("location:view/search_marksheet_view.php?result='empty'");
                }

                $search_value ='';  
                $error_sv ='';  
                $data = "SELECT * FROM mark WHERE student_id =".$students['id'];
                $result_m = $conn->query($data);

                if($result_m){
                    $data = $result_m->fetch_assoc();
                    
                    $bangla = $data['bangla'];
                    $englis = $data['englis'];
                    $math = $data['math'];
                    $physics = $data['physics'];
                    $chemistry = $data['chemistry'];
                    $isl_hin = $data['isl_hin'];
        
                    $marks = ['Bangla'=>$bangla, 'Englis'=>$englis, 'Math'=>$math, 'Physics'=>$physics, 'Chemistry'=>$chemistry, 'isl_hin'=>$isl_hin];          
                }
                if ($result_m) {
                    $data = $result_m->fetch_assoc();                 
                    $bangla = $data['bangla'];
                    $english = $data['english']; // Corrected the spelling here
                    $math = $data['math'];
                    $physics = $data['physics'];
                    $chemistry = $data['chemistry'];
                    $isl_hin = $data['isl_hin'];
                
                    $marks = ['Bangla' => $bangla, 'English' => $english, 'Math' => $math, 'Physics' => $physics, 'Chemistry' => $chemistry, 'isl_hin' => $isl_hin];          
                }
                
            }
        }
    }

  include 'view/search_marksheet_view.php'; 

?>

