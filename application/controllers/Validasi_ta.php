<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Validasi_ta extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanandosen();
		$email_login = $this->session->userdata('EmailDosen');
		$isi['konten'] = 'Dosen/tampilan_validasi_ta';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Validasi TA';
		$isi['sub_judul'] = 'Validasi TA';
		$isi['title'] = "SITA | Dashboard Dosen";
		$isi['menu'] = "Dosen/menu/menu_validasi_ta";
		$isi['data']		= $this->db->query("SELECT * FROM dosen WHERE EmailDosen='$email_login'");
		$isi['mhs'] = $this->db->query("SELECT * FROM mahasiswa");
		$this->load->view('Dosen/tampilan_beranda',$isi);
	}
}
