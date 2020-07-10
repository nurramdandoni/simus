<nav>
  <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Admin    -->
    <?php if ($this->session->userdata('level') == 1) { ?>
      <li class="nav-item">
        <a href="<?= base_url('admin/home') ?>" class="nav-link">
          <i class="fas fa-tachometer-alt fa-fw nav-icon"></i>
          <p>Dasboard</p>
        </a>
      </li>

      <li class="nav-item has-treeview mt-1">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th-large fa-fw"></i>
          <p>
            Modul Toko
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="<?= base_url('admin/pesanan') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Pesanan</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/produk') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Produk</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/kategori_produk') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Kategori Produk</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/konsumen') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Konsumen</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/supplier') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Supplier</p>
            </a>
          </li>

          <li class="nav-item mb-1">
            <a href="<?= base_url('admin/rekening') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Rekening</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-newspaper fa-fw"></i>
          <p>
            Modul Blog
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="<?= base_url('admin/artikel') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Postingan</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/kategori_artikel') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Kategori </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/tag_artikel') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Tag </p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-ad fa-fw"></i>
          <p>
            Modul Newsletter
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="<?= base_url('admin/newsletter') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Kirim Newsletter</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/subscriber') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Subscriber</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-globe-asia fa-fw"></i>
          <p>
            Modul Web
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="<?= base_url('admin/website') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Identitas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/menu') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Menu</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/halaman') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Halaman</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/logo') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Logo</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/slider') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Slider</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-users fa-fw"></i>
          <p>
            Modul Pengguna
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/users') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Manajemen Pengguna</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fas fa-file-alt fa-fw nav-icon"></i>
          <p>
            Laporan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/laporan') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Laporan Postingan</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/laporanBerita') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Laporan Berita</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/laporanPengguna') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Laporan Pengguna</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item user-panel">
        <p></p>
      </li>
      <li class="nav-item user-panel">
        <p></p>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-user fa-fw"></i>
          <p>
            Profile
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/profile') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>My Profile</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/password') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Password</p>
            </a>
          </li>
        </ul>
      </li>
    <?php } ?>
    <!-- /. Admin  -->

    <!-- Koordinator  -->
    <?php if ($this->session->userdata('level') == 2) { ?>
      <li class="nav-item">
        <a href="<?= base_url('koordinator/home') ?>" class="nav-link">
          <i class="fas fa-tachometer-alt fa-fw nav-icon"></i>
          <p>Dasboard</p>
        </a>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-users fa-fw"></i>
          <p>
            Modul Pengguna
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="<?= base_url('koordinator/users') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Manajemen Pengguna</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item user-panel">
        <p></p>
      </li>
      <li class="nav-item user-panel">
        <p></p>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-user fa-fw"></i>
          <p>
            Profile
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('koordinator/profile') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>My Profile</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('koordinator/password') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Password</p>
            </a>
          </li>
        </ul>
      </li>
    <?php } ?>
    <!-- /. Koordinator  -->

    <!-- Resepsionis  -->
    <?php if ($this->session->userdata('level') == 3) { ?>
      <li class="nav-item">
        <a href="<?= base_url('admin/home') ?>" class="nav-link">
          <i class="fas fa-tachometer-alt fa-fw nav-icon"></i>
          <p>Dasboard</p>
        </a>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fas fa-file-alt fa-fw nav-icon"></i>
          <p>
            Laporan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/laporan') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Laporan Postingan</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/laporanBerita') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Laporan Berita</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/laporanPengguna') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Laporan Pengguna</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item user-panel">
        <p></p>
      </li>
      <li class="nav-item user-panel">
        <p></p>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-user fa-fw"></i>
          <p>
            Profile
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('resepsionis/profile') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>My Profile</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('resepsionis/password') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Password</p>
            </a>
          </li>
        </ul>
      </li>
    <?php } ?>
    <!-- /. Resepsionis  -->

    <!-- Penata Pameran  -->
    <?php if ($this->session->userdata('level') == 4) { ?>
      <li class="nav-item">
        <a href="<?= base_url('penata/home') ?>" class="nav-link">
          <i class="fas fa-tachometer-alt fa-fw nav-icon"></i>
          <p>Dasboard</p>
        </a>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-newspaper fa-fw"></i>
          <p>
            Modul Event
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="<?= base_url('penata/event') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Event</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('penata/kategori_event') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Kategori Event</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/tag_event') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Tag Event</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fas fa-file-alt fa-fw nav-icon"></i>
          <p>
            Laporan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/laporan') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Laporan Postingan</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/laporanBerita') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Laporan Berita</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('admin/laporanPengguna') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Laporan Pengguna</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item user-panel">
        <p></p>
      </li>
      <li class="nav-item user-panel">
        <p></p>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-user fa-fw"></i>
          <p>
            Profile
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('penata/profile') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>My Profile</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= base_url('penata/password') ?>" class="nav-link">
              <i class="far fa-circle nav-icon text-sm"></i>
              <p>Password</p>
            </a>
          </li>
        </ul>
      </li>

    <?php } ?>
    <!-- /. Penata Pameran  -->

    <li class="nav-item mt-1">
      <a href="javascript:void(0)" class="nav-link" onclick="logout()">
        <i class="nav-icon fas fa-sign-out-alt fa-fw"></i>
        <p>
          Keluar
        </p>
      </a>
    </li>
</nav>