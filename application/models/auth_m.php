<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model {
	public function cek_login($table, $where){
        return $this->db->get_where($table, $where);
    }
    public function cek_username($table, $where){
        return $this->db->get_where($table, $where);
    }
    public function simpanakun($data) {
        $data1 = array(
            'username'      => $data['username'],
            'password'      => $data['password_hash'],
            'nama'          => $data['nama'],
            'level'         => 'masyarakat',

        );
        $data2 = array(
            'id_client'     => $data['username'],
            'nama'          => $data['nama'],
            'alamat'        => $data['alamat'],
            'jenis'         => 'penjual',
        );
        $this->db->insert('tb_user', $data1);
        $this->db->insert('tb_client', $data2);
    }
}