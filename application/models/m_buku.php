<?php
class M_buku extends CI_Model
{
  public function tampil($id = null)
  {
    // Cara Simpel
    // $query = $this->db->get('tb_buku');

    // Cara Select *
    $this->db->select('*');
    $this->db->from('tb_buku');
    if ($id != null) {
      $this->db->where('id_buku', $id);
    }
    $query = $this->db->get();

    // Cara Query
    // $query = $this->db->query("SELECT * FROM tb_buku");
    return $query;
  }

  public function add($data)
  {
    $param = array(
      'judul' => $data['judul'],
      'pengarang' => $data['pengarang'],
      'thn_terbit' => $data['thn_terbit'],
    );
    $this->db->insert('tb_buku', $param);
  }

  public function edit($data)
  {
    $param = array(
      'judul' => $data['judul'],
      'pengarang' => $data['pengarang'],
      'thn_terbit' => $data['thn_terbit'],
    );

    $this->db->set($param);
    $this->db->where('id_buku', $data['id_buku']);
    $this->db->update('tb_buku');
  }

  public function del($id)
  {
    $param = array(
      'id_buku' => $id
    );
    $this->db->where('id_buku', $id);
    $this->db->delete('tb_buku');
  }
}
