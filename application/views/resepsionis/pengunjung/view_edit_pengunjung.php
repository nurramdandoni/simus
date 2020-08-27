<div class="content-wrapper mt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Pengunjung</h3>
                        </div>
                        <?= $this->session->flashdata('message') ?>
                        <form action="<?= base_url('resepsionis/edit_pengunjung') ?>" method="post">
                            <div class="card-body">
                                <input type='hidden' name='id' value='<?= $rows['id_pengunjung'] ?>'>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <?= form_error('kategori', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                                    <div class="col-sm-6">
                                        <select name='kategori' class='form-control' required>
                                            <option value='' selected>- Pilih Kategori Pengunjung -</option>
                                            <?php
                                            foreach ($record as $row) {
                                                if ($rows['kategori'] == $row['id_kategori_pengunjung']) {
                                                    echo "<option value='$row[id_kategori_pengunjung]' selected>$row[nama_kategori]</option>";
                                                }
                                                echo "<option value='$row[id_kategori_pengunjung]'>$row[nama_kategori]</option>";
                                            } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-6">
                                        <input type='number' class='form-control' name='jumlah' value="<?= $rows['jumlah'] ?>" required>
                                        <?= form_error('jumlah', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama lengkap</label>
                                    <div class="col-sm-6">
                                        <input type='text' class='form-control' name='nama' value="<?= $rows['nama'] ?>" required>
                                        <?= form_error('nama', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ID Card</label>
                                    <?= form_error('id_card', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                                    <?php
                                    if ($row['id_card'] == 'KTP') { ?>
                                        <div class="col-sm-6">
                                            <input class="mr-2" type='radio' value='KTP' name='id_card' checked> KTP
                                            <input class="mr-2 ml-5" type='radio' value='Paspor' name='id_card'> Paspor
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-sm-6">
                                            <input type='radio' value='KTP' name='id_card'> &nbsp; KTP
                                            <input class="ml-3" type='radio' value='Paspor' name='id_card' checked> &nbsp; Paspor
                                        </div>
                                    <?php }
                                    ?>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nomor Id Card</label>
                                    <div class="col-sm-6">
                                        <input type='number' class='form-control' name='no_id' value="<?= $rows['no_id'] ?>" required>
                                        <?= form_error('no_id', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Negara</label>
                                    <div class="col-sm-6">
                                        <select name='negara' class='form-control' required>
                                            <option value='' selected>- Pilih Negara -</option>
                                            <?php
                                            foreach ($negara as $n) {
                                                if ($rows['negara'] == $n['id_negara']) {
                                                    echo "<option value='$n[id_negara]' selected>$n[nama]</option>";
                                                }
                                                echo "<option value='$n[id_negara]'>$n[nama]</option>";
                                            } ?>
                                        </select>
                                    </div>
                                    <?= form_error('negara', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kebangsaan</label>
                                    <div class="col-sm-6">
                                        <select name="kebangsaan" class='form-control select2' required>
                                            <option value='' selected>- Pilih Kebangsaan -</option>
                                            <?php
                                            foreach ($negara as $k) {
                                                if ($rows['kebangsaan'] == $k['id_negara']) {
                                                    echo "<option value='$k[id_negara]' selected>$k[nama]</option>";
                                                }
                                                echo "<option value='$k[id_negara]'>$k[nama]</option>";
                                            } ?>
                                        </select>
                                    </div>
                                    <?= form_error('kebangsaan', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Provinsi</label>
                                    <div class="col-sm-6">
                                        <input type='text' class='form-control' name='provinsi' placeholder="misal: Jawa Barat" value="<?= $rows['provinsi']; ?>">
                                        <?= form_error('provinsi', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kota</label>
                                    <div class="col-sm-6">
                                        <input type='text' class='form-control' name='kota' value="<?= $rows['kota']; ?>" required>
                                        <?= form_error('kota', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-6">
                                        <input type='text' class='form-control' name='alamat' value="<?= $rows['alamat']; ?>" required>
                                        <?= form_error('alamat', '<small class="font-italic text-danger ml-1">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode Pos</label>
                                    <div class="col-sm-6">
                                        <input type='number' class='form-control' name='kode_pos' value="<?= $rows['kode_pos']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-6">
                                        <button type='submit' name='submit' class='btn btn-primary btn-sm'>Perbaharui</button>
                                        <a href='<?= base_url('resepsionis/pengunjung') ?>'><button type='button' class='btn btn-secondary btn-sm ml-1'>Batal</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>