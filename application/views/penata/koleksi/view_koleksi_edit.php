<div class="content-wrapper mt-3">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ubah Koleksi</h3>
            </div>

            <div class="card-body">
              <form action="<?= base_url('penata/edit_koleksi') ?>" method="post" enctype="multipart/form-data">

                <input type='hidden' name='id' value='<?= $rows['id_koleksi'] ?>'>
                <?php
                foreach ($uk as $u) {
                  if ($rows['id_ukuran'] == $u['id_ukuran']) {
                    $ukur = $u['id_ukuran'];
                    $ting = $u['tinggi'];
                    $pan = $u['panjang'];
                    $leb = $u['lebar'];
                    $diam = $u['diameter'];
                    $ber = $u['berat'];
                  }
                } ?>
                <input type='hidden' name='idU' value='<?= $ukur ?>'>


                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor Registrasi</label>
                    <div class="col-sm-6">
                      <input type='number' class='form-control' name='no_regis' value="<?= $rows['no_registrasi'] ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Koleksi</label>
                    <div class="col-sm-6">
                      <input type='text' class='form-control' name='nama_kol' value="<?= $rows['nama_koleksi'] ?>" required>
                      <?= form_error('nama_kol', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kategori Koleksi</label>
                    <div class="col-sm-6">
                      <select name='kategori' class='form-control' required>
                        <option value='' selected>- Pilih Kategori Koleksi -</option>
                        <?php
                        foreach ($record as $row) {
                          if ($rows['id_kategori_koleksi'] == $row['id_kategori_koleksi']) {
                            echo "<option value='$row[id_kategori_koleksi]' selected>$row[nama_kategori]</option>";
                          }
                          echo "<option value='$row[id_kategori_koleksi]'>$row[nama_kategori]</option>";
                        } ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Asal Koleksi</label>
                    <div class="col-sm-6">
                      <input type='text' class='form-control' name='asal_kol' value="<?= $rows['asal_koleksi'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pemilik Asal</label>
                    <div class="col-sm-6">
                      <input type='text' class='form-control' name='pemilik_asal' value="<?= $rows['pemilik_asal'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Cara Perolehan</label>
                    <div class="col-sm-6">
                      <input type='text' class='form-control' name='cara_peroleh' value="<?= $rows['cara_perolehan'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sumber Pusaka</label>
                    <div class="col-sm-6">
                      <input type='text' class='form-control' name='sumber' value="<?= $rows['sumber_pusaka'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ukuran</label>
                    <div class="col-sm-2">
                      <label for=""> Tinggi (cm) </label>
                      <input type='text' class='form-control' name='tinggi' value="<?= $ting ?>">
                    </div>
                    <div class="col-sm-2">
                      <label for=""> Panjang (cm)</label>
                      <input type='text' class='form-control' name='panjang' value="<?= $pan ?>">
                    </div>
                    <div class="col-sm-2">
                      <label for=""> Lebar (cm)</label>
                      <input type='text' class='form-control' name='lebar' value="<?= $leb ?>">
                    </div>
                    <div class="col-sm-2">
                      <label for=""> Diameter (cm)</label>
                      <input type='text' class='form-control' name='diameter' value="<?= $diam ?>">
                    </div>
                    <div class="col-sm-2">
                      <label for=""> Berat (kg)</label>
                      <input type='text' class='form-control' name='berat' value="<?= $ber ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Deskripsi Koleksi</label>
                    <div class="col-sm-10">
                      <textarea rows="5" id="summernote" class='form-control' name='deskripsi'><?= $rows['deskripsi'] ?></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-6">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLangHTML" name="foto">
                        <label class="custom-file-label" for="customFileLangHTML" data-browse="Cari">Pilih gambar...</label>
                      </div>
                    </div>
                  </div>

                  <?php
                  if ($rows['foto'] != '') { ?>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Gambar Saat Ini</label>
                      <div class="col-sm-6">
                        <img src="<?= base_url('assets/images/koleksi/') . $rows['foto'] ?>" alt="" style="height: 150px">
                      </div>
                    </div>
                  <?php } ?>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type='submit' name='submit' class='btn btn-primary btn-sm'>Perbarui</button>
                      <a href='<?= base_url('penata/koleksi') ?>'><button type='button' class='btn btn-secondary btn-sm ml-1'>Batal</button></a>
                    </div>
                  </div>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>