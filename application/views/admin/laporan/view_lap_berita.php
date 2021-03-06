<div class="content-wrapper mt-3">
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title">Laporan Berita</h3>
                        </div>

                        <div class="card-body">



                            <table id="laptabel" class="table table-sm table-borderless table-responsive" style="width:100%">

                                <thead>
                                    <tr>
                                        <td colspan="2">
                                            <button type='button' class='btn btn-primary btn-xs dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <span class='caret'></span> Pilih Waktu </button>
                                            <div class='dropdown-menu' style='border:1px solid #cecece;'>
                                                <a class='dropdown-item' href='<?= base_url('admin/laporanBerita/') ?>'>Semua</a>
                                                <a class=' dropdown-item' href='<?= base_url('admin/laporanBerita_hari') ?>'>Hari Ini</a>
                                                <a class=' dropdown-item' href='<?= base_url('admin/laporanBerita_minggu') ?>'>7 hari terahir</a>
                                                <a class=' dropdown-item' href='<?= base_url('admin/laporanBerita_bulan') ?>'>30 hari terakhir</a>
                                                <a class=' dropdown-item' href='<?= base_url('admin/laporanBerita_tahun') ?>'>1 tahun terakhir</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th>Judul Berita</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($record->result_array() as $row) { ?>
                                        <tr>
                                            <td><?= $no ?> </td>
                                            <td><?= $row['judul_berita'] ?></td>
                                            <td><?= $row['tgl']; ?></td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        $('#laptabel').DataTable({
            "searching": false,
            "ordering": false,
            "bInfo": false,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>