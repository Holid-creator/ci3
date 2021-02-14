<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $data = array(
      'nama' => 'Muhammad Holidin',
      'alamat' => 'Kp. Pasir sereh'
    );
    $this->load->view('home', $data);
  }

  public function profile()
  {
    echo 'Profile';
  }
}
