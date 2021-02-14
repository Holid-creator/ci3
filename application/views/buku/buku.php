<body>
  <div class="container mt-5">
    <div style="text-align: right;"><a href="<?= base_url('buku/add') ?>" class="btn btn-info btn-sm mb-2"><i class="fa fa-plus"></i> Tambah Buku</a></div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
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
                <a onclick="return confirm('Yakin Hapus')" href="<?= site_url('buku/del/' . $bk->id_buku) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>