<?php 
    include 'st_info_header.php'; 
?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0;margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10 bg-secondary">          
            <div class="col-md-8 mx-auto mb-5">
                <div class="card mt-5 bg-primary text-white p-5">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2><i class="fa-solid fa-user"></i> <?=$data['name'] ?? $students ['name']?></h2>
                        <a class="btn btn-sm btn-outline-info" href="st_mark_list.php">St marksheet</a>
                    </div>
                    <div class="cart-body bg-primary">
                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>                          
                                    <th>Subject</th>
                                    <th>Mark</th>
                                    <th>Gread</th>
                                    <th>GPA</th>
                            </thead>
                            <tbody>

                                <?php 
                                    $sum_gpa = 0;
                                    foreach($marks as $subject => $mark){
                                        if($mark >=80 && $mark <=100){
                                            $grade = 'A+';
                                            $gpa = '5.00';
                                        }elseif($mark >=70 && $mark <80){
                                            $grade = 'A';
                                            $gpa = '4.00';
                                        }elseif($mark >=60 && $mark <70){
                                            $grade = 'A-';
                                            $gpa = '3.50';
                                        }elseif($mark >=50 && $mark <60){
                                            $grade = 'B';
                                            $gpa = '3.00';
                                        }elseif($mark >=40 && $mark <50){
                                            $grade = 'C';
                                            $gpa = '2.50';
                                        }elseif($mark >=33 && $mark <40){
                                            $grade = 'D';
                                            $gpa = '2.00';
                                        }
                                        elseif($mark >=0 && $mark <33){
                                            $grade = 'F';
                                            $gpa = '0.00';
                                        }else{
                                            $grade = 'Invailid Mark';
                                            $gpa = 'Invailid Mark';
                                        } 
                                        if($sum_gpa != -1){
                                            if($gpa == '0.00'){
                                                $sum_gpa = -1;                                          
                                            }else{
                                                $sum_gpa += $gpa;
                                            }  
                                        }                                              
                                       
                                ?>

                                <tr>                          
                                    <td><?= $subject ?></td>
                                    <td><?= $mark ?></td>
                                    <td><?= $grade ?></td>
                                    <td><?= $gpa ?></td>
                                </tr>
                                <?php  
                                    }
                                    if( $sum_gpa == -1){
                                        $total_gpa ='0.00';
                                    }else{
                                        $total_gpa = $sum_gpa/6;
                                    }                  
                                    
                                ?>    
                                <tr>                          
                                    <th colspan="3" class="text-center p-3">Total GPA <span>:</span></th>
                                    <th class="py-3"><?= number_format($total_gpa,2) ?></th>
                                </tr>                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include 'st_info_footer.php'; 
?>

