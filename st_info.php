<?php include ('view/st_info_header.php'); ?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0;margin-right: 0;">
       <?php include ('view/deshbord.php'); ?>
        <div class="col-md-10 bg-secondary">
        <div class="col-md-6 mx-auto mb-5">
                <div class="card mt-5 bg-primary text-white p-5">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2><i class="fa-solid fa-user"></i> Serch Your Marksheet -</h2>
                        <a class="btn btn-sm btn-outline-info" href="st_list.php">St List</a>
                    </div>
                    <div class="cart-body bg-primary">
                        <!-- <form action="search.php" method="POST" class="form">
                            <div class="form-group mb-3">
                                <label class="mb-2">Roll/Reg.:</label>
                                <input type="text" name="search_value" class="form-control search_value" placeholder="Search br roll or reg">
                                <?php 
                                if(isset($_GET['error'])){
                            ?>
                               <span class="text-danger"><?= base64_decode($_GET['error']); ?></span>
                            <?php
                                }
                            ?>
                            <span class="text-danger error" style="display: none;"></span>
                            </div>
                           
                            <div class="form-group mb-3">
                                <input class="btn btn-sm btn-info p-2 text-white" type="submit" name="search" value="Search">
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="js/jquery_min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('.form').on('submit', function(){
                if($('.search_value').val() === ''){
                    $('.error').html('Search field is required js!');
                    return false;
                } else {
                    $('.error').hide();
                    return true;
                }
            });
        });
    </script>



</body>
</html>
