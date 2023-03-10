    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="<?php echo base_url(); ?>index.php">
                <?php foreach($company_data as $company): ?>
                    <h2 class="text-white fw-bold m-0"><?php echo $company['company_name']; ?></h2>
                 </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i><?php echo $company['company_address']; ?></small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i><?php echo $company['company_email']; ?></small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i><?php echo $company['company_phone']; ?></small>
                    
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="<?php echo $company['company_facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="<?php echo $company['company_twitter']; ?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="<?php echo $company['company_linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->