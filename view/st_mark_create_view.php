<?php 
    include 'st_info_header.php'; 
?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0;margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10 bg-secondary">          
            <div class="col-md-8 mx-auto mb-5">
                <div class="card mt-4 bg-primary text-white px-5 py-2">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2><i class="fa-solid fa-user"></i> Student Mark Create-</h2>
                        <a class="btn btn-sm btn-outline-info" href="st_mark_list.php">St Mark List</a>
                    </div>
                    <div class="cart-body bg-primary">
                        <form action="" method="POST">
                            <div class="form-group mb-1">
                                <label>Name:</label>
                                <select name="student_id" class="form-control">
                                    <option delected hidden>Select Student</option>
                                    <?php 
                                        foreach($student as $students){
                                    ?>
                                    <option value="<?= $students ['id']?>"><?= $students ['name']?></option>
                                    <?php 
                                        } 
                                    ?>
                                </select>
                                <div class="form-group mb-1">
                                    <label>Bangla :</label>
                                    <input type="number" name="bangla" class="form-control" placeholder="Enter bangla mark">
                                </div>
                            </div>
                            <div class="form-group mb-1">
                                <label>Englis :</label>
                                <input type="number" name="englis" class="form-control" placeholder="Enter englis mark">
                            </div>
                            <div class="form-group mb-1">
                                <label>Math :</label>
                                <input type="number" name="math" class="form-control" placeholder="Enter math mark">
                            </div>
                            <div class="form-group mb-1">
                                <label>Physics :</label>
                                <input type="number" name="physics" class="form-control" placeholder="Enter physics">
                            </div>
                            <div class="form-group mb-1">
                                <label>Chemistry:</label>
                                <input type="number" name="chemistry" class="form-control" placeholder="Enter chemistry">
                            </div>
                            <div class="form-group mb-1">
                                <label>Islam/Hindu :</label>
                                <input type="number" name="isl_hin" class="form-control" placeholder="Enter chemistry">
                            </div>
                            <div class="form-group mb-2 mt-2">
                                <input class="btn btn-sm btn-info p-2 text-white" type="reset" value="Reset">
                                <input class="btn btn-sm btn-info px-2 py-2 text-white" type="submit" name="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include 'st_info_footer.php'; 
?>

