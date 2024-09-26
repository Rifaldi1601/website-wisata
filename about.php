<?php
     $no = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM about ORDER BY id_about DESC");
     $data =  mysqli_fetch_array($query);
 ?>
<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <span>About Us</span>
                        <h3>Company Profile</h3>
                    </div>
                    <p><?php echo $data['visi'];?></p>
                    <a href="#" class="line-button">Learn More</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">

                <div class="about_thumb d-flex">
                    <div class="img_1">
                        <img src="assets/img/about/about_1.png" alt="">
                    </div>
                    <div class="img_2">
                        <img src="admin/uploads/tripsumbar.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end -->