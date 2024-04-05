<?php 
    include 'st_info_header.php'; 
?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0;margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10 bg-secondary">          
            <div class="col-md-6 mx-auto mb-5">
                <div class="card mt-3 bg-primary text-white px-5">
                    <div class="card-header">
                        <h2><i class="fa-solid fa-user"></i> Student Form-</h2>
                    </div>
                    <div class="cart-body bg-primary">
                        <form action="" method="POST">
                        <div class="form-group mb-2">
                                <label class="mb-2">Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" value="<?= $name ?>" class="form-control" placeholder="Enter name">
                                <span class="text-danger"><?= $err_name ?></span>
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2">Class<span class="text-danger">*</span></label>
                                <input type="text" name="class" value="<?= $class ?>"  class="form-control" placeholder="Enter name">
                                <span class="text-danger"><?= $err_class ?></span>
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2">Roll<span class="text-danger">*</span></label>
                                <input type="text" name="roll" value="<?= $roll ?>"  class="form-control" placeholder="Enter roll">
                                <span class="text-danger"><?= $err_roll ?></span>
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2">Rg No<span class="text-danger">*</span></label>
                                <input type="text" name="registration" value="<?= $registration ?>"  class="form-control" placeholder="Enter registration">
                                <span class="text-danger"><?= $err_registration ?></span>
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2">Note</label><br>
                                <textarea name="note" value="<?= $note ?>"  class="form-control" style="resize: none;" placeholder="Write to note"></textarea>
                                <span class="text-danger"><?= $err_note ?></span>
                            </div>
                            <div class="form-group mb-3">
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

