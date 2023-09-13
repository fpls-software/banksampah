<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampah_m extends CI_Model {
	public function datasampah() {
		$query = $this->db->get('tb_sampah');
		return $query->result_array(); 
	}
	public function pemasukan() {
		$this->db->where('jenis', 'penjual');
		$query = $this->db->get('view_transaksi');
		return $query->result_array();
	}
	public function tambahpemasukan($data) {
		$sampah = array(
			'kd_sampah'		=> $data['kd_sampah'],
			'nm_sampah'		=> $data['nm_sampah'],
			'jml'			=> $data['jml'],
		);
		$this->db->insert('tb_pemasukan', $sampah);
	}
	public function deletepemasukan($id_pemasukan) {
		$this->db->where('id_pemasukan', $id_pemasukan);
		$this->db->delete('tb_pemasukan');
	}	
	public function pengeluaran() {
			$this->db->where('jenis', 'pembeli');
			$query = $this->db->get('view_transaksi');
			return $query->result_array();
		}
		public function tambahpengeluaran($data) {
			$sampah = array(
				'kd_sampah'		=> $data['kd_sampah'],
				'nm_sampah'		=> $data['nm_sampah'],
				'jml'			=> $data['jml'],
			);
			$this->db->insert('tb_pengeluaran', $sampah);
		}
		public function deletepengeluaran($id_pengeluaran) {
			$this->db->where('id_pengeluaran', $id_pengeluaran);
			$this->db->delete('tb_pengeluaran');
		}
	
	public function datasampahBykd($kd_sampah) {
		$this->db->where('kd_sampah', $kd_sampah);
		$query = $this->db->get('tb_sampah');
		return $query->result_array();
	}
	public function update($data) {
		$this->db->where('kd_sampah', $data['kd_sampah']);
		$sampah = array(
			'kd_sampah'		=> $data['kd_sampah'],
			'nm_sampah'		=> $data['nm_sampah'],
			'satuan'		=> $data['satuan'],
			'harga_beli'	=> $data['harga_beli'],
			'harga_jual'	=> $data['harga_jual'],
			'jns_sampah'	=> $data['jns_sampah'],
		);
		$this->db->update('tb_sampah', $sampah);
	}
	public function simpan($data) {
		$sampah = array(
			'kd_sampah'		=> $data['kd_sampah'],
			'nm_sampah'		=> $data['nm_sampah'],
			'satuan'		=> $data['satuan'],
			'harga_beli'	=> $data['harga_beli'],
			'harga_jual'	=> $data['harga_jual'],
			'jns_sampah'	=> $data['jns_sampah'],
		);
		$this->db->insert('tb_sampah', $sampah);
	}
	public function hapus($kd_sampah) {
		$this->db->where('kd_sampah', $kd_sampah);
		$this->db->delete('tb_sampah');
	}
}