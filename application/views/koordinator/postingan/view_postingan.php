<div class="content-wrapper mt-3">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Postingan</h3>

            </div>

            <div class="card-body">
              <table id="table1" class="table table-sm table-borderless" style="width: 100%">
                <thead>
                  <tr>
                    <th style='width:5%'>No</th>
                    <th>Tgl Posting</th>
                    <th>Penulis</th>
                    <th>Gambar</th>
                    <th>Judul Postingan</th>
                    <th style="width: 10%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($record->result_array() as $row) {
                    $tgl_artikel = tgl_indo($row['tanggal']);
                    if ($row['status'] == 'Y') {
                      $status = '<span style="color:green">Published</span>';
                    } else {
                      $status = '<span style="color:red">Unpublished</span>';
                    }
                    echo "<tr><td>$no</td>
                        <td>$tgl_artikel</td>
                        <td>$row[username]</td>
                        <td class='image-popup-detail' href='" . base_url('assets/images/artikel/') . $row['gambar'] . "'>
                            <img src='" . base_url('assets/images/artikel/') . $row['gambar'] . "' alt='Gambar' style='width: 70px; height:50px;'>
                        </td>
                        <td>$row[judul]</td>
                        <td>
                            <a class='btn btn-success btn-xs' title='Detail' href='" . base_url() . "koordinator/detail_postingan/" . encrypt_url($row['id_artikel']) . "'><i class='fas fa-eye fa-fw'></i></a>
                        </td>
                        </tr>";
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
  function confirmation(ev) {
    ev.preventDefault();
    var data_id = ev.currentTarget.getAttribute('data-id');
    var currentLocation = window.location;
    Swal.fire({
      title: 'Konfirmasi Hapus Data',
      text: "Apakah Anda ingin menghapus data ini?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus',
      cancelButtonText: 'Batal',
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: site_url + 'admin/delete_artikel/' + data_id,
          type: "POST",
          dataType: "JSON",
          success: function(data) {
            Swal.fire({
              title: 'Dihapus!',
              text: 'Data berhasil dihapus',
              icon: 'success',
              showConfirmButton: false,
              timer: 1500
            }).then(() => {
              location.reload();
            })
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.debug(jqXHR);
            console.debug(textStatus);
            console.debug(errorThrown);
          },
        });
      }
    })
  }
</script>