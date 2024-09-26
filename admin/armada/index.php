 <!-- Container Fluid-->
 <div class="container" id="container-wrapper">


     <!-- Row -->
     <div class="row">
         <!-- Datatables -->
         <div class="col-lg-12">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <a href="?page=armada/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                 </div>
                 <div class="table-responsive p-3">

                     <table class="table align-items-center table-flush" id="dataTable">
                         <thead class="thead-light">
                             <tr>
                                 <th>No</th>
                                 <th>nama armada</th>
                                 <th>jumlah</th>
                                 <th>gambar armada</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM armada ORDER BY id_armada DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
                                 <tr>

                                     <td><?php echo $no++ ?></td>
                                     <td> <?php echo $data['nama_armada'] ?></td>
                                     <td> <?php echo $data['jumlah_armada'] ?></td>
                                     <td class="text-center"> <img width="100" src="uploads/<?php echo $data['gambar_armada'] ?>" alt=""></td>


                                     <td>
                                         <a href="?page=armada/ubah&id_armada=<?php echo $data['id_armada'] ?>
                                         " class="btn btn-success"> <i class="fa fa-edit"></i></a>

                                         <a href="armada/hapus.php?id_armada=<?php echo $data['id_armada'] ?>"
                                             class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus armada ini?')">
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