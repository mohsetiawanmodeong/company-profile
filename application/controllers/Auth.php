<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function _rules()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}
	public function index()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek_admin = $this->profile_model->cek_login($username, $password);

			if ($cek_admin == TRUE) {
				$this->session->set_userdata('username', $cek_admin->username);
				$this->session->set_userdata('id', $cek_admin->id);
				$this->session->set_userdata('nama_admin', $cek_admin->nama_admin);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Username atau password salah!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth');
			}
		}
	}

	public function update_pengguna_aksi()
	{
		$pass_baru		= $this->input->post('password');
		$ulang_pass		= $this->input->post('password2');
		$nama_admin		= $this->input->post('nama_admin');
		$username		= $this->input->post('username');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
		$this->form_validation->set_rules('password', 'Password Baru', 'required');
		$this->form_validation->set_rules('password2', 'Ulangi Password', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$data['pengguna'] = $this->profile_model->get_data('tb_admin')->result();
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/pengguna', $data);

			$this->load->view('template_admin/footer');
		} else {


			$data = array(
				'nama_admin'        => $nama_admin,
				'username'        => $username,
				'password' => md5($pass_baru),
			);

			$id   = array('id' => $this->session->userdata('id'));

			$this->profile_model->update_data('tb_admin', $data, $id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Data Pengguna berhasil diupdate, silakan login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/index');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
