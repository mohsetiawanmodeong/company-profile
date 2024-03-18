<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	public function index()
	{
		$data['clients'] = $this->profile_model->get_data('tb_clients')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/clients', $data);

        $this->load->view('template_admin/footer');
	}

    public function tambah_client()
    {
        // $this->profile_model->admin_login();
       
        $data['clients'] = $this->profile_model->get_data('tb_clients')->result();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_tambah_client', $data);
        $this->load->view('template_admin/footer');
    }

    public function update_client($id)
    {
        // $this->profile_model->admin_login();
        $where = array('id' => $id);
        $data['clients'] = $this->db->query("SELECT * FROM tb_clients WHERE id ='$id'")->result();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_ubah_client', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_client_aksi()
    {
        $this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_client();
		}else{
			$nama_client			= $this->input->post('nama_client');
			$tgl					= date('Y-m-d');
			$gambar					= $_FILES['gambar']['name'];


			if($gambar='0'){}else{
				$config['upload_path']		= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff|webp';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo "Gambar Gagal diupload!";
				}else{
					$gambar = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nama_client'		=> $nama_client,
				'date_created'		=> $tgl,
				'gambar'			=> $gambar,
			);

			$this->profile_model->insert_data($data, 'tb_clients');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Client Berhasil Ditambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/clients');
		}
    }

    public function update_client_aksi(){
		
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->update_client($this->input->post('id'));
		}else{
			$id 					= $this->input->post('id');
			$nama_client			= $this->input->post('nama_client');
            $tgl					= date('Y-m-d');
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
				'nama_client'		=> $nama_client,
				'date_created'		=> $tgl,
				
			);

			$where = array(
				'id' => $id
			);

			$this->profile_model->update_data('tb_clients', $data, $where);

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Client Berhasil Diupdate
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/clients');
		}
	}

    public function delete_client($id){
		

		$where = array('id' => $id);
		$this->profile_model->delete_data($where,'tb_clients');

		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data Client Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('admin/clients');
	}

    

    public function _rules(){
        $this->form_validation->set_rules('nama_client',"Nama Client",'required');
       
    }



}
