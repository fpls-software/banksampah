<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_m extends CI_Model {
	public function datauser($username) {
		$this->db->where('username', $username);
		$load = $this->db->get('tb_user');
		return $load->result_array();
	}
	public function datatransaksi() {
		$load = $this->db->query("SELECT * FROM tb_transaksi ORDER BY id_transaksi Desc LIMIT 1");
		return $load->result_array();
	}
	public function datasampah() {
		$load = $this->db->get('tb_sampah');
		if($load->num_rows() > 0) {
			return $load->result_array();
		}
		else {
			return false;
		}
	}
	public function getsampah($kd_sampah) {
		$query = $this->db->query("SELECT * FROM tb_sampah WHERE kd_sampah='$kd_sampah'");
		foreach($query->result_array() as $sampah) {}
		$res = array(
			'harga_beli' => @$sampah['harga_beli'],
			'satuan'	=> @$sampah['satuan']
		);
		return $res;
	}
	public function getsampah1($kd_sampah) {
		$query = $this->db->query("SELECT * FROM tb_sampah WHERE kd_sampah='$kd_sampah'");
		foreach($query->result_array() as $sampah) {}
		$res = array(
			'harga_jual' => @$sampah['harga_jual'],
			'satuan'	=> @$sampah['satuan']
		);
		return $res;
	}
	public function dataclient() {
		$this->db->where('jenis', 'pembeli');
		$query = $this->db->get("tb_client");
		return $query->result_array();
	}
	public function pembelian() {
		$query = $this->db->query("SELECT COUNT(id_transaksi) as pembelian FROM view_transaksi WHERE jenis='penjual'");
		return $query->result_array();
	}
	public function penjualan() {
		$query = $this->db->query("SELECT COUNT(id_transaksi) as penjualan FROM view_transaksi WHERE jenis='pembeli'");
		return $query->result_array();
	}
	public function jmlpembelian() {
		$query = $this->db->query("SELECT SUM(harga * jml) as jmlpembelian FROM view_transaksi WHERE jenis='penjual'");
		return $query->result_array();
	}
	public function jmlpenjualan() {
		$query = $this->db->query("SELECT SUM(harga * jml) as jmlpenjualan FROM view_transaksi WHERE jenis='pembeli'");
		return $query->result_array();
	}
	public function updatepass($password_hash) {
		$data = array(
			'password' =>$password_hash,
		);
		$this->db->update('tb_user', $data);
	}
}