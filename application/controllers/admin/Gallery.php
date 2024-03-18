<?php
defined('BASEPATH') or exit('No direct script access allowed');

class gallery extends CI_Controller
{

	public function index()
	{
		$data['gallery'] = $this->profile_model->get_data('tb_gallery')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/gallery', $data);
		$this->load->view('template_admin/footer');
	}



	public function tambah_gallery()
	{
		// $this->profile_model->admin_login();

		$data['gallery'] = $this->profile_model->get_data('tb_gallery')->result();

		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/form_tambah_gallery', $data);
		$this->load->view('template_admin/footer');
	}

	public function update_gallery($id)
	{
		// $this->profile_model->admin_login();
		$where = array('id' => $id);
		$data['gallery'] = $this->db->query("SELECT * FROM tb_gallery WHERE id ='$id'")->result();
		$data['drop'] = $this->db->query("SELECT DISTINCT kategori FROM tb_gallery")->result();


		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/form_ubah_gallery', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_gallery_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->tambah_gallery();
		} else {
			$gambar					= $_FILES['gambar']['name'];
			$kategori				= $this->input->post('kategori');
			$kategori2				= $this->input->post('kategorilain');
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
			if ($kategori == "Lainnya") {
				$dataToSave = $kategori2;
			} else {
				$dataToSave = $kategori;
			}

			$data = array(
				'gambar'			=> $gambar,
				'kategori'			=> $dataToSave,
				'date_created'		=> $tgl,

			);

			$this->profile_model->insert_data($data, 'tb_gallery');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Gallery Berhasil Ditambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/gallery');
		}
	}

	public function update_gallery_aksi()
	{

		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->update_gallery($this->input->post('id'));
		} else {
			$id 					= $this->input->post('id');
			$kategori				= $this->input->post('kategori');
			$tgl					= date('Y-m-d');
			$gambar					= $_FILES['gambar']['name'];

			if ($gambar) {
				$config['upload_path']		= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff|webp';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'kategori'			=> $nama_client,
				'date_created'		=> $tgl,

			);

			$where = array(
				'id' => $id
			);

			$this->profile_model->update_data('tb_gallery', $data, $where);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Gallery Berhasil Diupdate
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/gallery');
		}
	}



	public function delete_gallery($id)
	{


		$where = array('id' => $id);
		$this->profile_model->delete_data($where, 'tb_gallery');

		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Foto Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('admin/gallery');
	}



	public function _rules()
	{
		$this->form_validation->set_rules('kategori', "Kategori", 'required');
	}
}
