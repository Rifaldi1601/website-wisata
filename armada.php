<style>
    .team-item img
     {
        width: 100%;
        /* Membuat lebar gambar selalu mengikuti lebar kontainer */
        height: 250px;
        /* Menentukan tinggi tetap untuk semua gambar */
        object-fit: cover;
        /* Memotong gambar agar sesuai dengan ukuran kontainer tanpa mengubah proporsi */
    }
</style>

<!-- features_room_startt -->
<div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Armada</span>
                        <h3>Sewa Armada TripSumbar</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
        <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM armada ORDER BY id_armada DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
            <div class="single_rooms team-item">
                <div class="room_thumb">
                    <img src="admin/uploads/<?php echo $data['gambar_armada'] ?>" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3><?php echo $data['nama_armada'] ?></h3>
                        </div>
                        <a href="https://api.whatsapp.com/send/?phone=6282392195763&text=Halo%2C+saya+ingin+memesan+armada+&type=phone_number&app_absent=0" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- features_room_end -->