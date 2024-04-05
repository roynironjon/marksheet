<?php 
    include 'st_info_header.php'; 
?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0;margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10 bg-secondary">          
            <div class="col-md-6 mx-auto mb-5">
                <div class="card mt-5 bg-primary text-white p-5">
                    <div class="card-header">
                        <h2><i class="fa-solid fa-user"></i> Student Create-</h2>
                    </div>
                    <div class="cart-body bg-primary">
                        <form action="" method="POST">
                            <div class="form-group mb-2">
                                <label class="mb-2">Name :</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name">
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2">Roll :</label>
                                <input type="number" name="roll" class="form-control" placeholder="Enter roll">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Rg No :</label>
                                <input type="number" name="registration" class="form-control" placeholder="Enter registration">
                            </div>
                            <div class="form-group mb-2">
                                <input class="btn btn-sm btn-info px-3 py-2 text-white" type="reset" value="Reset">
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

