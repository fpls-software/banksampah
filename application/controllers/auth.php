<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index() {
		$this->load->view('template/head');
		$this->load->view('template/login');
		$this->load->view('template/foot');
	}
	public function register() {
		$this->load->view('template/head');
		$this->load->view('template/register');
		$this->load->view('template/foot');
	}
	public function login() {
		$username       = $this->input->post('username');
        $password       = $this->input->post('password');
        $where          = array(
            'username'  => $username, 
            'password'  => md5($password),  
        );
        $cek            = $this->Auth_m->cek_login('tb_user', $where)->num_rows();
        if($cek > 0)    {
            $data_session = array(
                'username'  => $username,
            );
            $this->session->set_userdata($data_session);
            redirect(base_url('index.php/dashboard'));
        }
        else {
            echo "
				<script>
					alert('Username atau Password salah');
					window.location.href = '".base_url('index.php/auth')."';
				</script>
			";
        }
	}
	public function simpanakun() {
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		$data = array(
			'username'		=> $username,
			'password_hash' => md5($password),
			'nama'			=> $this->input->post('nama'),
			'alamat'		=> $this->input->post('alamat'),
		);
		$where          = array(
            'username'  => $username, 
        );
		$cek_user           = $this->Auth_m->cek_username('tb_user', $where)->num_rows();
		if($cek_user > 0)    { 
			
			echo "
				<script>
					alert('Username Telah Terpakai');
					window.location.href = '".base_url('index.php/auth/register')."';
				</script>
			";
		}
		else {
			$simpan = $this->Auth_m->simpanakun($data);
			if($simpan = true) {
				echo "
				<script>
					alert('Pendaftaran Berhasil, Silahkan Masuk');
					window.location.href = '".base_url('index.php/auth')."';
				</script>
				";
			}
			else {
				echo "
				<script>
					alert('Pendaftaran Gagal');
					window.location.href = '".base_url('index.php/auth/register')."';
				</script>
				";
			}
		}

	}
	public function logout() {
		$this->session->unset_userdata();
		redirect('auth/');
	}
}