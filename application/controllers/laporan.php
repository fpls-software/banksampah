<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function jualbeli() {
		$username = $_SESSION['username'];
		$data = array(
			'datauser' => $this->Dashboard_m->datauser($username),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('laporan/jualbeli', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot', $data);
	}
	public function nota() {
		$username = $_SESSION['username'];
		$data = array(
			'datauser' => $this->Dashboard_m->datauser($username),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('laporan/nota', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot', $data);
	}
	public function cetak() {
		$dari = $this->input->get('dari');
		$sampai = $this->input->get('sampai');
		$data = array(
			'dari'		=> $dari, 
			'sampai'	=> $sampai,
			'laporan'	=>$this->Laporan_m->cetaklaporan($dari, $sampai),
		);
		$this->load->view('template/head');
		$this->load->view('laporan/cetakjualbeli', $data);
	}
		public function notafilter() {
		$username 	= $_SESSION['username'];
		$dari		= $this->input->get('dari');
		$sampai 	= $this->input->get('sampai');
		$data 		= array(
			'datauser'  => $this->Dashboard_m->datauser($username),
			'dari'		=> $dari, 
			'sampai'	=> $sampai,
			'laporan'	=>$this->Laporan_m->nota($dari, $sampai),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('laporan/notafilter', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot', $data);
	}
	
}