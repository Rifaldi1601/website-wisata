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
                       <form action="tim/proses_tambah.php" method="POST" enctype="multipart/form-data">
                           <div class="form-group mb-3">
                               <label for="">Nama </label>
                               <input type="text" name="nama_tim" class="form-control" required>
                           </div>

                           <div class="form-group mb-3">
                               <label for="">Jabatan</label>
                               <input name="jabatan" class="form-control" required>
                           </div>


                           <div class="form-group mb-3">
                               <label for="">Foto</label>
                               <input type="file" name="foto" class="form-control" required>
                           </div>

                           <button type="submit" class="btn btn-primary">Submit</button>
                       </form>
                   </div>
               </div>

           </div>

       </div>

   </div>
   <!---Container Fluid-->