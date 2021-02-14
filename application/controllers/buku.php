<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Buku extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_buku', 'buku');
  }
  public function index()
  {
    $query = $this->buku->tampil();

    // Cara Biasa
    // $data['buku'] = $query->result();

    // Cara Array
    $data = array(
      'buku' => $query->result(),
      'title' => 'Halaman Buku'
    );
    $this->load->view('templates/header', $data);
    $this->load->view('buku/buku', $data);
  }

  public function add()
  {
    $data = array(
      'title' => 'Tambah Buku',
    );
    $this->load->view('templates/header', $data);
    $this->load->view('buku/tambah', $data);
  }

  public function edit($id = null)
  {
    $query = $this->buku->tampil($id);
    $data = array(
      'title' => 'Edit Buku',
      'buku' => $query->row()
    );
    $this->load->view('templates/header', $data);
    $this->load->view('buku/edit', $data);
  }

  public function proccess()
  {
    if (isset($_POST['add'])) {
      $inputan = $this->input->post(null, true);
      $this->buku->add($inputan);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data Berhasil Tambahkan');
        redirect('buku');
      } else if (isset($_POST['edit'])) {
        $edit = $this->input->post(null, true);
        $this->buku->edit($edit);
      }
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('buku');
      }
    }
  }

  public function del($id)
  {
    $this->buku->del($id);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
    }
    redirect('buku');
  }
}
