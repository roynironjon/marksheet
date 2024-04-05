<?php 
    include 'st_info_header.php'; 
?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0;margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10 bg-secondary">          
            <div class="col-md-6 mx-auto mb-5">
                <div class="card mt-5 bg-primary text-white p-5">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2><i class="fa-solid fa-user"></i> Edit List-</h2>
                        <a class="btn btn-sm btn-outline-info" href="st_list.php">St List</a>
                    </div>
                    <div class="cart-body bg-primary">
                        <form action="st_update.php?id=<?= $data['id']; ?>" method="POST">
                            <div class="form-group mb-2">
                                <label class="mb-2">Name :</label>
                                <input type="text" name="name" value="<?= $data['name']; ?>" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2">Roll :</label>
                                <input type="number" name="roll" value="<?= $data['roll']; ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Rg No :</label>
                                <input type="number" name="registration" value="<?= $data['registration']; ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input class="btn btn-sm btn-info p-2 text-white" type="submit" name="submit" value="Submit">
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

