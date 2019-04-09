<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BerandaDosen extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanandosen();
		$email_login = $this->session->userdata('EmailDosen');
		$isi['konten'] = 'Dosen/konten_beranda';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Beranda';
		$isi['sub_judul'] = '';
		$isi['title'] = "SITA | Dashboard Dosen";
		$isi['menu'] = "Dosen/menu/menu_beranda";
		$isi['data']		= $this->db->query("SELECT * FROM dosen WHERE EmailDosen='$email_login'");
		$isi['mhs'] = $this->db->query("SELECT * FROM mahasiswa");
		$this->load->view('Dosen/tampilan_beranda',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
