<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function pembelian() {
		$data = array(
			'id_transaksi'	=> $this->input->post('id_transaksi'),
			'tgl_transaksi'	=> $this->input->post('tgl_transaksi'),
			'kd_sampah'		=> $this->input->post('kd_sampah'),
			'harga_beli'	=> $this->input->post('harga_beli'),
			'jml'			=> $this->input->post('jml'),
			'id_client'		=> 'none',
		);
		$simpan = $this->Transaksi_m->pembelian($data);
		if($simpan = true) {
			echo "
				<script>
					alert('Transaksi Berhasil');
					window.location.href = '".base_url('index.php/transaksi/nota/').$data['id_transaksi']."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Transaksi Gagal');
					window.location.href = '".base_url('index.php/dashboard/')."';
				</script>
			";
		}
		
	}
	public function penjualan() {
		$data = array(
			'id_transaksi'	=> $this->input->post('id_transaksi'),
			'tgl_transaksi'	=> $this->input->post('tgl_transaksi'),
			'kd_sampah'		=> $this->input->post('kd_sampah'),
			'harga_beli'	=> $this->input->post('harga_jual'),
			'jml'			=> $this->input->post('jml'),
			'id_client'		=> $this->input->post('id_client'),
		);
		$simpan = $this->Transaksi_m->pembelian($data);
		if($simpan = true) {
			echo "
				<script>
					alert('Transaksi Berhasil');
					window.location.href = '".base_url('index.php/transaksi/nota/').$data['id_transaksi']."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Transaksi Gagal');
					window.location.href = '".base_url('index.php/dashboard/')."';
				</script>
			";
		}
		
	}
	public function nota($id_transaksi) {
		$data = array(
			'datatransaksi' => $this->Transaksi_m->datatransaksiByid($id_transaksi),
		);
		$this->load->view('template/head');
		$this->load->view('print/notaheader', $data);
		$this->load->view('print/nota', $data);
		$this->load->view('print/notafooter');
	}
	public function simpannota() {
		$data = array(
			'no_nota'		=> $this->input->post('no_nota'),
			'tgl_transaksi'	=> $this->input->post('tgl_transaksi'),
			'jml'			=> $this->input->post('jml'),
			'nm_sampah'		=> $this->input->post('nm_sampah'),
			'harga'			=> $this->input->post('harga'),
			'total'			=> $this->input->post('total'),
		);
		$simpan = $this->Transaksi_m->simpannota($data);
		if($simpan = true) {
			echo "
				<script>
					alert('Nota Tersimpan');
					window.location.href = '".base_url('index.php/transaksi/nota/').$data['no_nota']."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menyimpan Data');
					window.location.href = '".base_url('index.php/transaksi/nota/').$data['no_nota']."';
				</script>
			";
		}
	}
}