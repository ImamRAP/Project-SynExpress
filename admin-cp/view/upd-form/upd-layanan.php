<?php
$data = getUsersById($_GET['id']);
?>
<h3>ubah data Layanan</h3>
<form action="?page=act-users-2" method="POST">
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="email">Layanan</label>
            <input type="email" class="form-control" id="layanan" name="layanan">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="password">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="namaDepan">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="namaBelakang">Status</label>
            <input type="text" class="form-control" id="status" name="status">
         </div>
      </div>
   </div>

   <div class="row justify-content-center">
      <button type="submit" class="btn btn-primary" name="save-layanan" style="width:50%">Simpan</button> &nbsp;
      <a href="?page=layanan" class="btn btn-danger">Batal</a>
   </div>
</form>