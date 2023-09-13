<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampah extends CI_Controller {
	public function data() {
		$username = $_SESSION['username'];
		$data = array(
			'datasampah' => $this->Sampah_m->datasampah(),
			'datauser' => $this->Dashboard_m->datauser($username), 
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('sampah/data', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot');
	}
	public function pemasukan() {
		$username = $_SESSION['username'];
		$data = array(
			'datasampah' => $this->Sampah_m->datasampah(),
			'datauser' => $this->Dashboard_m->datauser($username),
			'datapemasukan' => $this->Sampah_m->pemasukan(),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('sampah/pemasukan', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot');
	}
	public function tambahpemasukan() {
		$data = array(
			'kd_sampah' => $this->input->post('kd_sampah'),
			'nm_sampah'	=> $this->input->post('nm_sampah'),
			'jml'		=> $this->input->post('jml'),
		);
		$simpan = $this->Sampah_m->tambahpemasukan($data);
		if($simpan = true) {
			echo "
				<script>
					alert('Data Berhasil Ditambahkan');
					window.location.href = '".base_url('index.php/sampah/pemasukan')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menambahkan Data');
					window.location.href = '".base_url('index.php/sampah/pemasukan')."';
				</script>
			";
		}
	}
	public function deletepemasukan($id_pemasukan) {
		$simpan = $this->Sampah_m->deletepemasukan($id_pemasukan);
		if($simpan = true) {
			echo "
				<script>
					alert('Data Berhasil Dihapus');
					window.location.href = '".base_url('index.php/sampah/pemasukan')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menghapus Data');
					window.location.href = '".base_url('index.php/sampah/pemasukan')."';
				</script>
			";
		}
	}
	public function pengeluaran() {
		$username = $_SESSION['username'];
		$data = array(
			'datasampah' => $this->Sampah_m->datasampah(),
			'datauser' => $this->Dashboard_m->datauser($username),
			'datapengeluaran' => $this->Sampah_m->pengeluaran(),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('sampah/pengeluaran', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot');
	}
	public function tambahpengeluaran() {
		$data = array(
			'kd_sampah' => $this->input->post('kd_sampah'),
			'nm_sampah'	=> $this->input->post('nm_sampah'),
			'jml'		=> $this->input->post('jml'),
		);
		$simpan = $this->Sampah_m->tambahpengeluaran($data);
		if($simpan = true) {
			echo "
				<script>
					alert('Data Berhasil Ditambahkan');
					window.location.href = '".base_url('index.php/sampah/pengeluaran')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menambahkan Data');
					window.location.href = '".base_url('index.php/sampah/pengeluaran')."';
				</script>
			";
		}
	}
	public function deletepengeluaran($id_pengeluaran) {
		$simpan = $this->Sampah_m->deletepengeluaran($id_pengeluaran);
		if($simpan = true) {
			echo "
				<script>
					alert('Data Berhasil Dihapus');
					window.location.href = '".base_url('index.php/sampah/pengeluaran')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menghapus Data');
					window.location.href = '".base_url('index.php/sampah/pengeluaran')."';
				</script>
			";
		}
	}
	
	public function edit($kd_sampah) {
		$username = $_SESSION['username'];
		$data = array(
			'datasampah' => $this->Sampah_m->datasampahBykd($kd_sampah),
			'datauser' => $this->Dashboard_m->datauser($username),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('sampah/edit', $data);
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
		$this->load->view('sampah/tambah', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot');
	}
	public function update() {
		$data = array(
			'kd_sampah'		=> $this->input->post('kd_sampah'),
			'nm_sampah' 	=> $this->input->post('nm_sampah'),
			'satuan'		=> $this->input->post('satuan'),
			'harga_beli'	=> $this->input->post('harga_beli'),
			'harga_jual'	=> $this->input->post('harga_jual'),
			'jns_sampah'	=> $this->input->post('jns_sampah'),
		);
		$udpate = $this->Sampah_m->update($data);
		if($update = true) {
			echo "
				<script>
					alert('Data Berhasil Diperbarui');
					window.location.href = '".base_url('index.php/sampah/data/')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Memperbarui Data');
					window.location.href = '".base_url('index.php/sampah/edit/').$kd_sampah."';
				</script>
			";
		}
	}
	public function simpan() {
		$data = array(
			'kd_sampah'		=> $this->input->post('kd_sampah'),
			'nm_sampah' 	=> $this->input->post('nm_sampah'),
			'satuan'		=> $this->input->post('satuan'),
			'harga_beli'	=> $this->input->post('harga_beli'),
			'harga_jual'	=> $this->input->post('harga_jual'),
			'jns_sampah'	=> $this->input->post('jns_sampah'),
		);
		$simpan = $this->Sampah_m->simpan($data);
		if($simpan = true) {
			echo "
				<script>
					alert('Data Berhasil Ditambahkan');
					window.location.href = '".base_url('index.php/sampah/data/tambah')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menambahkan Data');
					window.location.href = '".base_url('index.php/sampah/data/tambah')."';
				</script>
			";
		}
	}
	public function hapus($kd_sampah) {
		$hapus = $this->Sampah_m->hapus($kd_sampah);
		if($hapus = true) {
			echo "
				<script>
					alert('Data Berhasil Dihapus');
					window.location.href = '".base_url('index.php/sampah/data')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menghapus Data');
					window.location.href = '".base_url('index.php/sampah/data')."';
				</script>
			";
		}
	}
}