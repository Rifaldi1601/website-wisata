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

   

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
            <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM about ORDER BY id_about DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>Company Profile</h3>
                        </div>
                        <p><?php echo $data['visi'] ?></p>
                        <a href="#" class="line-button">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="admin/uploads/<?php echo $data['gambar_about'] ?>" alt="">
                        </div>
                        
                    </div>
                </div> 
             <?php } ?>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- offers_area_start -->
    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        
                        <h3>Wisata Sumbar</h3>
                    </div>
                </div>
            </div>
            <div class="row"><?php
$nama_kategori =  isset($_GET['nama_kategori']) ? $_GET['nama_kategori'] : null;

if($nama_kategori) {
    $querywisata = mysqli_query($koneksi, "SELECT * FROM wisata
    JOIN kategori ON wisata.id_kategori=kategori.id_kategori
    where nama_kategori = '$nama_kategori'
    ORDER BY id_wisata DESC");
}else{
    $querywisata = mysqli_query($koneksi, "SELECT * FROM wisata
    JOIN kategori ON wisata.id_kategori=kategori.id_kategori
    ORDER BY id_wisata DESC");
}    
while ($wisata = mysqli_fetch_array($querywisata)) {
?>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="admin/uploads/<?php echo $wisata['gambar_wisata'] ?>" alt="">
                        </div>
                        <h3><?php echo $wisata['judul_wisata'] ?> </h3>
                        <a href="detail-<?php echo $wisata['slug']?>"
                        class="btn btn-primary rounded-pill " style="margin-top: 7px;">details</a>
                    </div>
                </div>
                <?php } ?>
              
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <span>TripSumbar</span>
            <h3>Relax and Enjoy your <br>
                Vacation </h3>
            <a href="https://www.youtube.com/watch?v=vLnPwxZdW4Y" class="video_btn popup-video">
                <i class="fa fa-play"></i>
            </a>
        </div>
    </div>
    <!-- video_area_end -->


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

    <!-- forQuery_start -->
    <div class="forQuery">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-md-12">
                    <div class="Query_border">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="Query_text">
                                    <p>For Reservation 0r Query?</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="phone_num"> <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM kontak ORDER BY id_kontak DESC");
                                 $data =  mysqli_fetch_array($query)

                                ?>
                                    <a href="#" class="mobile_no"><?php echo $data['no_telp']?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- forQuery_end-->

    <!-- instragram_area_start -->
    <div class="instragram_area">
        <div class="single_instagram">
            <img src="assets/img/instragram/1.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="assets/img/instragram/2.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="assets/img/instragram/3.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="assets/img/instragram/4.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="assets/img/instragram/5.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- instragram_area_end -->
