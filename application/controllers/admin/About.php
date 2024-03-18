<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        // $this->profile_model->admin_login();
        $data['about'] = $this->profile_model->get_data('tb_about')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/about', $data);

        $this->load->view('template_admin/footer');
    }

    public function update_about($id)
    {
        // $this->profile_model->admin_login();
        $where = array('id' => $id);
        $data['about'] = $this->db->query("SELECT * FROM tb_about WHERE id = '$id'")->result();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_ubah_about', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_about()
    {
        // $this->profile_model->admin_login();
       
        $data['about'] = $this->profile_model->get_data('tb_about')->result();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_tambah_about', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_about_aksi()
    {
        $this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_about();
		}else{
			$tagline				= $this->input->post('tagline');
			$desc					= $this->input->post('desc');
			$gambar					= $_FILES['gambar']['name'];


			if($gambar='0'){}else{
				$config['upload_path']		= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff|webp';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo "Gambar Mobil Gagal diupload!";
				}else{
					$gambar = $this->upload->data('file_name');
				}
			}

			$data = array(
				'tagline'			=> $tagline,
				'desc'				=> $desc,
				'gambar'			=> $gambar,
			);

			$this->profile_model->insert_data($data, 'tb_about');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Tentang Kami Berhasil Ditambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/about');
		}
    }

    

    public function _rules(){
        $this->form_validation->set_rules('tagline',"Tagline",'required');
        $this->form_validation->set_rules('desc',"Deskripsi",'required');
        
    }

    public function update_about_aksi(){
		
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->update_about($this->input->post('id'));
		}else{
			$id 					= $this->input->post('id');
			$tagline				= $this->input->post('tagline');
			$desc					= $this->input->post('desc');
			$gambar					= $_FILES['gambar']['name'];
			
			if($gambar){
				$config['upload_path']		= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff|webp';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('gambar')){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				}else{
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'tagline'			=> $tagline,
				'desc'				=> $desc,
			);

			$where = array(
				'id' => $id
			);

			$this->profile_model->update_data('tb_about', $data, $where);

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Halaman Tentang Kami Berhasil Diupdate
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/about');
		}
	}

    public function delete_about($id){
		

		$where = array('id' => $id);
		$this->profile_model->delete_data($where,'tb_about');

		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Halaman Tentang Kami Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('admin/about');
	}
}
