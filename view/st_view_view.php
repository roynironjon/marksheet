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
                        <h2><i class="fa-solid fa-user"></i> <?= $data['name']?> Details</h2>
                        <a class="btn btn-sm btn-outline-info" href="st_list.php">St List</a>
                    </div>
                    <div class="cart-body bg-primary">
                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>                          
                                    <th>Name</th>
                                    <th>:</th>
                                    <td><?= $data['name']; ?></td>
                                </tr>
                                <tr>                          
                                    <th>Roll</th>
                                    <th>:</th>
                                    <td><?= $data['roll']; ?></td>
                                </tr>
                                <tr>                          
                                    <th>Registration</th>
                                    <th>:</th>
                                    <td><?= $data['registration']; ?></td>
                                </tr>
                            </thead>
                            <tbody>
                                
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

