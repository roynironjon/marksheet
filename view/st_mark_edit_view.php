<?php 
    include 'st_info_header.php'; 
?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0;margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10 bg-secondary">          
            <div class="col-md-8 mx-auto mb-5">
                <div class="card mt-2 bg-primary text-white px-5 py-2">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2><i class="fa-solid fa-user"></i> Student Mark Edit-</h2>
                        <a class="btn btn-sm btn-outline-info" href="st_mark_list.php">St Mark List</a>
                    </div>
                    <div class="cart-body bg-primary">
                        <form action="st_mark_update.php?id=<?= $data ['id']; ?>" method="POST">
                            <div class="form-group mb-1">
                                <div class="form-group mb-1">
                                    <label>Name :</label>
                                    <input type="text" name="student_id" value="<?= $data ['name']; ?>" class="form-control">
                                </div>
                                
                                <div class="form-group mb-1">
                                    <label>Bangla :</label>
                                    <input type="number" name="bangla" value="<?= $data ['bangla']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-1">
                                <label>Englis :</label>
                                <input type="number" name="englis" value="<?= $data ['englis']; ?>"  class="form-control">
                            </div>
                            <div class="form-group mb-1">
                                <label>Math :</label>
                                <input type="number" name="math" value="<?= $data ['math']; ?>"  class="form-control">
                            </div>
                            <div class="form-group mb-1">
                                <label>Physics :</label>
                                <input type="number" name="physics" value="<?= $data ['physics']; ?>"  class="form-control">
                            </div>
                            <div class="form-group mb-1">
                                <label>Chemistry:</label>
                                <input type="number" name="chemistry" value="<?= $data ['chemistry']; ?>"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Islam/Hindu :</label>
                                <input type="number" name="isl_hin" value="<?= $data ['isl_hin']; ?>"  class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <input class="btn btn-sm btn-info px-3 py-2 text-white" type="submit" name="submit" value="Submit">
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

