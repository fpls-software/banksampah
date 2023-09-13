<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_m extends CI_Model {
	public function pembelian($data) {
		$transaksi = array(
			'id_transaksi'	=> $data['id_transaksi'],
			'id_client'		=> $data['id_client'],
			'tgl_transaksi'	=> $data['tgl_transaksi'],
			'jml'			=> $data['jml'],
			'kd_sampah'		=> $data['kd_sampah'],
			'harga'			=> $data['harga_beli'],
		);
		$this->db->insert('tb_transaksi', $transaksi);
	}
	public function datatransaksiByid($id_transaksi) {
		$this->db->where('id_transaksi', $id_transaksi);
		$query = $this->db->get('view_transaksi');
		return $query->result_array();
	}
	public function simpannota($data) {
		$nota = array(
			'no_nota'		=> $data['no_nota'],
			'tgl_transaksi'	=> $data['tgl_transaksi'],
			'jml'			=> $data['jml'],
			'nm_sampah'		=> $data['nm_sampah'],
			'harga'			=> $data['harga'],
			'total'			=> $data['total'],
		);
		$this->db->insert('tb_bukti_transaksi', $nota);
	}
}