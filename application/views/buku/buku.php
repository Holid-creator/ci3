<body>
  <div class="container mt-5">
    <div style="text-align: right;"><a href="<?= base_url('buku/add') ?>" class="btn btn-info btn-sm mb-2"><i class="fa fa-plus"></i> Tambah Buku</a></div>
    <div class="table-responsive">
      <div id="flash" data-flash="<?= $this->session->flashdata('success') ?>"></div>
      <table class="table table-bordered table-striped table-hover" id="buku">
        <thead>
          <tr class="bg-warning">
            <th>No.</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($buku as $bk) :
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $bk->judul; ?></td>
              <td><?= $bk->pengarang; ?></td>
              <td><?= $bk->thn_terbit; ?></td>
              <td>
                <a href="<?= site_url('buku/edit/' . $bk->id_buku) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                <a id="hps" href="<?= site_url('buku/del/' . $bk->id_buku) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

<script src="<?= base_url('assets/datatables/js/jquery-3.5.1.js') ?>"></script>
<script src="<?= base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>

<script>
  $(document).ready(function() {
    $('#buku').DataTable();
  });
</script>
<script>
  $(document).on('click', '#hps', function(e) {
    e.preventDefault();
    var link = $(this).attr('href');

    Swal.fire({
      title: 'Yakin mau dihapus?',
      text: "Tekan Ya Untuk Menghapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!',
      confirmButtonCancel: 'Jangan'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = link;
      }
    })
  });

  var flash = $('#flash').data('flash');
  if (flash) {
    Swal.fire({
      icon: 'success',
      title: 'Suksess',
      text: flash,
    })
  }
</script>

</html>