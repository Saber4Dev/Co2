<?php







// Test the data query that retrieve from model that show the data table "services"
$data = $this->Company_model->get_company_team(1);
print_r($data); 


?>

<!-- body contents go here -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl about mb-5" style="margin-top: 6rem;">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-primary">About Us</p>
                        <h1 class="display-6 mb-4">The Best Marketing Agency to Improve Your Business</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="img/icon/icon-5.png" alt="">
                                <h5 class="mb-3">Managed Services</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="img/icon/icon-2.png" alt="">
                                <h5 class="mb-3">Dedicated Experts</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Team</p>
                <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
            </div>
            <div class="row g-4">

              <!-- Show and loop the member that is avaliable in the tables team -->
             

        
            <?php if (!empty($company_team)) : ?>
                <?php for ($i=0; $i<count($company_team); $i++) : ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $i * 0.1; ?>s">
                        <div class="team-item rounded overflow-hidden pb-4">

                            <img class="img-fluid mb-4" src="<?= base_url('assets/img/'. $company_team[$i]['member_photo'] ) ?>" alt="<?php echo $company_team[$i]['name']; ?>">
                            <h5><?php echo $company_team[$i]['name']; ?></h5>
                            <span class="text-primary"><?php echo $company_team[$i]['role']; ?></span>
                            <ul class="team-social">
                                <li><a class="btn btn-square" href="<?php echo $company_team[$i]['fb_profile']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="btn btn-square" href="<?php echo $company_team[$i]['twitter_profile']; ?>"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="btn btn-square" href="<?php echo $company_team[$i]['instagram_profile']; ?>"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="btn btn-square" href="<?php echo $company_team[$i]['linkedin_profile']; ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                <?php endfor; ?>
            <?php else: ?>
                <p class="text-center">No team data available for this company.</p>
            <?php endif; ?>

        

                
            </div>
        </div>
    </div>
    <!-- Team End -->

