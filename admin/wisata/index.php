 <!-- Container Fluid-->
 <div class="container" id="container-wrapper">


     <!-- Row -->
     <div class="row">
         <!-- Datatables -->
         <div class="col-lg-12">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <a href="?page=wisata/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                 </div>
                 <div class="table-responsive p-3">

                     <table class="table align-items-center table-flush" id="dataTable">
                         <thead class="thead-light">
                             <tr>
                                 <th>No</th>
                                 <th>Nama Kategori</th>
                                 <th>Judul wisata</th>
                                 <th>Tanggal wisata</th>
                                 <th>Isi wisata</th>
                                 <th>Gambar wisata</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php

                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM wisata 
                                 JOIN kategori ON wisata.id_kategori=kategori.id_kategori
                                 ORDER BY id_wisata DESC");
                                while ($data =  mysqli_fetch_array($query)) {
                                ?>
                                 <tr>

                                     <td><?php echo $no++ ?></td>
                                     <td> <?php echo $data['nama_kategori'] ?></td>
                                     <td> <?php echo $data['judul_wisata'] ?></td>
                                     <td> <?php echo date('d-m-Y', strtotime($data['tgl_wisata'])) ?></td>
                                     <td> <?php echo substr($data['isi_wisata'], 0, 50)  ?></td>
                                     <td class="text-center"> <img width="100" src="uploads/<?php echo $data['gambar_wisata'] ?>" alt=""></td>

                                     <td>

                                         <a href="?page=wisata/ubah&id_wisata=<?php echo $data['id_wisata'] ?>
                                         " class="btn btn-success"> <i class="fa fa-edit"></i></a>

                                         <a href="wisata/hapus.php?id_wisata=<?php echo $data['id_wisata'] ?>"
                                             class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus wisata ini?')">
                                             <i class="fa fa-trash"></i></a>
                                     </td>

                                 </tr>
                             <?php } ?>

                         </tbody>

                     </table>
                 </div>
             </div>
         </div>

     </div>
     <!--Row-->


 </div>
 <!---Container Fluid-->