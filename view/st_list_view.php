<?php 
    include 'st_info_header.php'; 
?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0;margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10 bg-secondary">          
            <div class="col-md-8 mx-auto mb-5">
                <div class="card mt-5 bg-primary text-white p-5">
                    <div class="card-header d-flex justify-content-sm-between align-items-center">
                        <h2><i class="fa-solid fa-users"></i> Student List-</h2>
                        <a class="btn btn-sm btn-outline-info" href="st_mark_create.php">St Mark Create</a>
                        <a class="btn btn-sm btn-outline-info" href="st_info.php">Back</a>
                    </div>
                    <div class="cart-body bg-primary">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Registration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                    foreach($student as $row=>$students){
                                ?>
                                    <tr>
                                    <td><?= $row+1 ?></td>
                                    <td><?= $students['name']?></td>
                                    <td><?= $students['roll']?></td>
                                    <td><?= $students['registration']?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="st_view.php?id=<?=base64_encode($students['id']); ?>" class="btn btn-sm bg-primary">View</a>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <a href="st_edit.php?id=<?=base64_encode($students['id']); ?>" class="btn btn-sm bg-warning">Edit</a>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <a onclick="return confirm('Are yoou sure ?')"  href="st_delete.php?id=<?=base64_encode($students['id']); ?>" class="btn btn-sm bg-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                        
                                <?php
                                }
                                ?>
                                
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

