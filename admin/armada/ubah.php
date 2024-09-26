<?php

// Mendapatkan id_kategori dari parameter URL
$id_armada = $_GET['id_armada'];

// Mengambil data kategori berdasarkan id_kategori
$ubah = mysqli_query($koneksi, "SELECT * FROM armada WHERE id_armada = '$id_armada'");
$data = mysqli_fetch_array($ubah);
?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                    <form action="armada/proses_ubah.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_armada" value="<?php echo $data['id_armada'] ?>">

                        <div class="form-group mb-3">
                            <label for="">visi</label>
                            <input type="text" name="visi" class="form-control" value="<?php echo $data['visi']; ?>">

                        </div>
                        <div class="form-group mb-3">
                            <label for="">misi</label>
                            <input type="text" name="misi" class="form-control" value="<?php echo $data['misi']; ?>">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">gambar armada</label>
                            <img width="100" src="uploads/<?php echo $data['gambar_armada'] ?>" alt="">
                            <input type="hidden" name="gambar_armada_lama" value="<?php echo $data['gambar_armada'] ?>" id="">
                            <input type="file" name="gambar_armada" class="form-control" value="<?php echo $data['gambar_armada'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
<!---Container Fluid-->