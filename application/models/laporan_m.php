<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_m extends CI_Model {
	public function cetaklaporan($dari, $sampai) {
		$query = $this->db->query("SELECT * FROM view_transaksi WHERE tgl_transaksi BETWEEN '$dari' AND '$sampai'");
		return $query->result_array();
	}
	public function nota($dari, $sampai) {
		$query = $this->db->query("SELECT * FROM tb_bukti_transaksi WHERE tgl_transaksi BETWEEN '$dari' AND '$sampai'");
		return $query->result_array();
	}
}