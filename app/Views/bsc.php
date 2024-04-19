<!-- Courses Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Batchlor Of Science</h6>
                <h1 class="mb-5">Math/Chemestry</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                foreach($bsc as $data){

                ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <!-- <img class="img-fluid" src="assets/img/course-1.jpg" alt=""> -->
                            <iframe width="420" height="345" src="<?php echo $data['link'];?>"></iframe>


                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                               
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">

                           
                            <h5 class="mb-4"><?php echo $data['title'];?> </h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i><?php echo $data['teacher'];?></small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i><?php echo $data['timer'];?></small>
                            
                        </div>
                    </div>
                </div>
                <?php }?>
               
            </div>

        </div>
    </div>
    <!-- Courses End -->