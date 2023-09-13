<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
	public function data() {
		$username = $_SESSION['username'];
		$data = array(
			'dataclient' => $this->Client_m->dataclient(),
			'datauser' => $this->Dashboard_m->datauser($username),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('client/data', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot');
	} 
	public function edit($id_client) {
		$username = $_SESSION['username'];
		$data = array(
			'dataclient' => $this->Client_m->dataclientBykd($id_client),
			'datauser' => $this->Dashboard_m->datauser($username),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('client/edit', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot');
	}
	public function tambah() {
		$username = $_SESSION['username'];
		$data = array(
			'datauser' => $this->Dashboard_m->datauser($username),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('client/tambah', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot');
	}
	public function update() {
		$data = array(
			'id_client'	=> $this->input->post('id_client'),
			'nama'		=> $this->input->post('nama'),
			'alamat'	=> $this->input->post('alamat'),
		);
		$udpate = $this->Client_m->update($data);
		if($update = true) {
			echo "
				<script>
					alert('Data Berhasil Diperbarui');
					window.location.href = '".base_url('index.php/client/data/')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Memperbarui Data');
					window.location.href = '".base_url('index.php/client/edit/').$id_client."';
				</script>
			";
		}
	}
	public function simpan() {
		$data = array(
			'id_client'	=> $this->input->post('id_client'),
			'nama'		=> $this->input->post('nama'),
			'alamat'	=> $this->input->post('alamat'),
		);
		$simpan = $this->Client_m->simpan($data);
		if($simpan = true) {
			echo "
				<script>
					alert('Data Berhasil Ditambahkan');
					window.location.href = '".base_url('index.php/client/data/tambah')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menambahkan Data');
					window.location.href = '".base_url('index.php/client/data/tambah')."';
				</script>
			";
		}
	}
	public function hapus($id_client) {
		$hapus = $this->Client_m->hapus($id_client);
		if($hapus = true) {
			echo "
				<script>
					alert('Data Berhasil Dihapus');
					window.location.href = '".base_url('index.php/client/data')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menghapus Data');
					window.location.href = '".base_url('index.php/client/data')."';
				</script>
			";
		}
	}
}