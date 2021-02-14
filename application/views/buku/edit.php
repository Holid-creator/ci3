<title><?= $title; ?></title>

<div class="container mt-3">
  <?= form_open('buku/proccess', '', array('id_buku' => $buku->id_buku)); ?>
  <table>
    <tr>
      <td>Judul</td>
      <td width="50px" align="center">:</td>
      <td>
        <?= form_input('judul', $buku->judul, array('class' => 'form-control mb-2', 'required' => 'required'));
        'class="form-control"' ?>
      </td>
    </tr>
    <tr>
      <td>Pengarang</td>
      <td width="50px" align="center">:</td>
      <td>
        <!-- <?= form_input(array('type' => 'hidden', 'name' => 'id_buku', 'value' => "$buku->id_buku")); ?> -->
        <?= form_input('pengarang', $buku->pengarang, array('class' => 'form-control mb-2', 'required' => 'required'));
        'class="form-control"' ?>
      </td>
    </tr>
    <tr>
      <td>Tahun Terbit</td>
      <td width="50px" align="center">:</td>
      <td>
        <?= form_input(array('type' => 'number', 'name' => 'thn_terbit', 'class' => 'form-control mb-2', 'value' => "$buku->thn_terbit"));
        'class="form-control"' ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
        <?= form_input(array('type' => 'submit', 'name' => 'edit', 'value' => 'Simpan', 'class' => 'btn btn-success btn-sm', 'style' => 'float:right;')); ?>
      </td>
    </tr>
  </table>
  <?= form_close(); ?>
</div>