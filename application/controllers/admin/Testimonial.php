<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends CI_Controller
{

	public function index()
	{
		$data['testimonial'] = $this->profile_model->get_data('tb_testimonial')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/testimonial', $data);

		$this->load->view('template_admin/footer');
	}

	public function tambah_testimonial()
	{
		// $this->profile_model->admin_login();

		$data['clients'] = $this->profile_model->get_data('tb_testimonial')->result();

		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/form_tambah_testimonial', $data);
		$this->load->view('template_admin/footer');
	}

	public function update_testimonial($id)
	{
		// $this->profile_model->admin_login();
		$where = array('id' => $id);
		$data['testimonial'] = $this->db->query("SELECT * FROM tb_testimonial WHERE id ='$id'")->result();

		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/form_ubah_testimonial', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_testimonial_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->tambah_testimonial();
		} else {
			$nama					= $this->input->post('nama');
			$company				= $this->input->post('company');
			$rating					= $this->input->post('rating');
			$deskripsi				= $this->input->post('deskripsi');
			$gambar					= $_FILES['gambar']['name'];
			$tgl					= date('Y-m-d');


			if ($gambar = '0') {
			} else {
				$config['upload_path']		= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff|webp';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					echo "Gambar Gagal diupload!";
				} else {
					$gambar = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nama'		=> $nama,
				'company'	=> $company,
				'rating'	=> $rating,
				'deskripsi'	=> $deskripsi,
				'avatar'	=> $gambar,
				'date_created' => $tgl,
			);

			$this->profile_model->insert_data($data, 'tb_testimonial');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Testimoni Berhasil Ditambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/testimonial');
		}
	}

	public function update_testimonial_aksi()
	{

		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->update_testimonial();
		} else {
			$id 					= $this->input->post('id');
			$nama					= $this->input->post('nama');
			$company				= $this->input->post('company');
			$rating					= $this->input->post('rating');
			$deskripsi				= $this->input->post('deskripsi');
			$gambar					= $_FILES['gambar']['name'];
			$tgl					= date('Y-m-d');

			if ($gambar) {
				$config['upload_path']		= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff|webp';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$gambar = $this->upload->data('file_name');
					$this->db->set('avatar', $gambar);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'nama'		=> $nama,
				'company'	=> $company,
				'rating'	=> $rating,
				'deskripsi'	=> $deskripsi,
				'date_created' => $tgl,

			);

			$where = array(
				'id' => $id
			);

			$this->profile_model->update_data('tb_testimonial', $data, $where);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Testimoni Berhasil Diupdate
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/testimonial');
		}
	}

	public function delete_testimonial($id)
	{


		$where = array('id' => $id);
		$this->profile_model->delete_data($where, 'tb_testimonial');

		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Testimoni Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('admin/testimonial');
	}



	public function _rules()
	{
		$this->form_validation->set_rules('nama', "Nama", 'required');
		$this->form_validation->set_rules('company', "company", 'required');
		$this->form_validation->set_rules('deskripsi', "deskripsi", 'required');
		$this->form_validation->set_rules('rating', "rating", 'required');
	}
}
