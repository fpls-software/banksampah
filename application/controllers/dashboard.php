<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index() {
		$username = $_SESSION['username'];
		$data['datauser'] = $this->Dashboard_m->datauser($username);
		$data['datatransaksi']	= $this->Dashboard_m->datatransaksi();
		$data['datasampah']	= $this->Dashboard_m->datasampah();
		$data['dataclient'] = $this->Dashboard_m->dataclient();
		$data['pembelian']	= $this->Dashboard_m->pembelian();
		$data['jmlpembelian']	= $this->Dashboard_m->jmlpembelian();
		$data['penjualan']	= $this->Dashboard_m->penjualan();
		$data['jmlpenjualan']	= $this->Dashboard_m->jmlpenjualan();
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('dashboard/content', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot', $data);
	}
	public function getsampah() {
		$kd_sampah = $this->input->get('kd_sampah');
		$data = $this->Dashboard_m->getsampah($kd_sampah);
		echo json_encode($data);
	}
	public function getsampah1() {
		$kd_sampah = $this->input->get('kd_sampah');
		$data = $this->Dashboard_m->getsampah1($kd_sampah);
		echo json_encode($data);
	}
	public function ubahpassword() {
		$password = $this->input->post('password');
		$passwordnew = $this->input->post('passwordnew');
		if($password == $passwordnew) {
			$password_hash = md5($password);
			$updatepass = $this->Dashboard_m->updatepass($password_hash);
			if($updatepass = true) {
				echo "
					<script>
						alert('Berhasil Memperbarui Password');
						window.location.href = '".base_url('index.php/dashboard/')."';
					</script>
				";
			}
			else {
				echo "
					<script>
						alert('Gagal Memperbarui Password');
						window.location.href = '".base_url('index.php/dashboard/')."';
					</script>
				";
			}
		}
		else {
			echo "
				<script>
					alert('Konfirmasi Password tidak sama!');
					window.location.href = '".base_url('index.php/dashboard/')."';
				</script>
			";
		}
	}
}