    <!-- offers_area_start -->
    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Tim Kami</span>
                        <h3>Crew TripSumbar</h3>
                    </div>
                </div>
            </div>
            <div class="row"> <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM tim ORDER BY id_tim DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="admin/uploads/<?php echo $data['foto'] ?>" alt="">
                        </div>
                        <h3><?php echo $data['jabatan'] ?><br>
                          
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

   
