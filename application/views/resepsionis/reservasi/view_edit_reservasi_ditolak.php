<link rel="stylesheet" href="<?= base_url('assets/template/css/') ?>jquery.datetimepicker.min.css">
<script src="<?= base_url('assets/template/js/') ?>jquery.datetimepicker.full.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper mt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Reservasi</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('resepsionis/edit_reservasi_ditolak') ?>" method="post" enctype="multipart/form-data">
                                <div class="card-body col-md-8">
                                    <div class="row">
                                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $rows['id_reservasi'] ?>">
                                        <div class="form-group col-sm-6">
                                            <label for="tanggal">Nama</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="<?= $rows['nama'] ?>" required readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="tanggal">Kategori</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="<?= $rows['kategori'] ?>" required readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="tanggal">Tanggal kunjungan</label>
                                            <div class="input-group">
                                                <input type="text" name="tanggal" class="form-control" id="datepickeradmin" value="<?= $rows['tanggal'] ?>" required>
                                                <div class=" input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Jam kunjungan</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control timepickeradmin" id="timepickeradmin" name="waktu" value="<?= $rows['waktu'] ?>" required>
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Jumlah</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="jumlah" value="<?= $rows['jumlah'] ?>" required>
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary">Edit Data Reservasi</button>
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
<script>
    $('#datetimePicker').datetimepicker();
</script>