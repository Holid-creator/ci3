<title><?= $title; ?></title>

<div class="container mt-3">
  <?= form_open('buku/proccess'); ?>
  <table>
    <tr>
      <td>Judul</td>
      <td width="50px" align="center">:</td>
      <td>
        <?= form_input('judul', '', array('class' => 'form-control mb-2', 'required' => 'required'));
        'class="form-control"' ?>
      </td>
    </tr>
    <tr>
      <td>Pengarang</td>
      <td width="50px" align="center">:</td>
      <td>
        <?= form_input('pengarang', '', array('class' => 'form-control mb-2', 'required' => 'required'));
        'class="form-control"' ?>
      </td>
    </tr>
    <tr>
      <td>Tahun Terbit</td>
      <td width="50px" align="center">:</td>
      <td>
        <?= form_input(array('type' => 'number', 'name' => 'thn_terbit', 'class' => 'form-control mb-2', 'required' => 'required'));
        'class="form-control"' ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
        <?= form_input(array('type' => 'submit', 'name' => 'add', 'value' => 'Tambah', 'class' => 'btn btn-success btn-sm', 'style' => 'float:right;')); ?>
      </td>
    </tr>
  </table>
  <?= form_close(); ?>
</div>