<?php include 'V_header.php'; ?>

<div class="col-lg-5">
  <h2>Edit Data Alumni</h2>
  <form action="<?php echo base_url('C_home/update') ?>" method="POST">
    <div class="mb-3 mt-3">
      <label for="email">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value="<?php echo $queryAlmDetail->nama ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="text">NIM:</label>
      <input type="text" class="form-control" id="nim" placeholder="Format xx.xx.xxxx" name="nim" value="<?php echo $queryAlmDetail->nim ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="text">Konsentrasi:</label>
      <input type="text" class="form-control" id="konsentrasi" placeholder="Masukkan konsentrasi" name="konsentrasi" value="<?php echo $queryAlmDetail->konsentrasi ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="text">Tahun Masuk:</label>
      <input type="date" name='tahun_masuk' class="form-control" id="tahun_masuk" value="<?php echo $queryAlmDetail->tahun_masuk ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="text">Tahun & Bulan Lulus:</label>
      <input type="date" name='tahun_lulus' class="form-control" id="tahun_lulus" value="<?php echo $queryAlmDetail->tahun_lulus ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="number">IPK:</label>
      <input type="number" step="any" class="form-control" id="ipk" placeholder="Masukkan nilai IPK" name="ipk" value="<?php echo $queryAlmDetail->ipk ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Status Pekerjaan:</label>
      <input type="text" class="form-control" id="status_pekerjaan" placeholder="Masukkan status pekerjaan" name="status_pekerjaan" value="<?php echo $queryAlmDetail->status_pekerjaan ?>">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include 'V_footer.php'; ?>