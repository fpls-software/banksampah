<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_m extends CI_Model {
	public function dataclient() {
		$this->db->where('jenis', 'pembeli');
		$query = $this->db->get('tb_client');
		return $query->result_array();
	}
	public function dataclientBykd($id_client) {
		$this->db->where('id_client', $id_client);
		$query = $this->db->get('tb_client');
		return $query->result_array();
	}
	public function update($data) {
		$this->db->where('id_client', $data['id_client']);
		$client = array(
			'id_client'	=> $data['id_client'],
			'nama'		=> $data['nama'],
			'alamat'	=> $data['alamat'],
			'jenis'		=> 'pembeli'
		);
		$this->db->update('tb_client', $client);
	}
	public function simpan($data) {
		$client = array(
			'id_client'	=> $data['id_client'],
			'nama'		=> $data['nama'],
			'alamat'	=> $data['alamat'],
			'jenis'		=> 'pembeli'
		);
		$this->db->insert('tb_client', $client);
	}
	public function hapus($id_client) {
		$this->db->where('id_client', $id_client);
		$this->db->delete('tb_client');
	}
}