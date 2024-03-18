<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
  public function index()
  {
    // $this->profile_model->admin_login();
    $data['layanan'] = $this->profile_model->get_data('tb_layanan')->result();
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/layanan', $data);

    $this->load->view('template_admin/footer');
  }

  public function _rules()
  {
    $this->form_validation->set_rules('clipart', "Clipart", 'required');
    $this->form_validation->set_rules('nama_layanan', "Nama Layanan", 'required');
    $this->form_validation->set_rules('desc', "Deskripsi", 'required');
  }
  public function tambah_layanan()
  {
    // $this->profile_model->admin_login();

    $data['layanan'] = $this->profile_model->get_data('tb_layanan')->result();

    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/form_tambah_layanan', $data);
    $this->load->view('template_admin/footer');
  }

  public function update_layanan($id)
  {
    // $this->profile_model->admin_login();

    $where = array('id' => $id);
    $data['layanan'] = $this->db->query("SELECT * FROM tb_layanan WHERE id ='$id'")->result();

    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/form_ubah_layanan', $data);
    $this->load->view('template_admin/footer');
  }

  public function tambah_layanan_aksi()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->tambah_layanan();
    } else {
      $clipart        = $this->input->post('clipart');
      $nama_layanan      = $this->input->post('nama_layanan');
      $desc          = $this->input->post('desc');

      $data = array(
        'clipart'    => $clipart,
        'nama_layanan'  => $nama_layanan,
        'desc'      => $desc,
      );

      $this->profile_model->insert_data($data, 'tb_layanan');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Layanan Berhasil Ditambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
      redirect('admin/layanan');
    }
  }

  public function update_layanan_aksi()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->update_layanan();
    } else {
      $id           = $this->input->post('id');
      $clipart        = $this->input->post('clipart');
      $nama_layanan   = $this->input->post('nama_layanan');
      $desc           = $this->input->post('desc');

      $data = array(
        'clipart'    => $clipart,
        'nama_layanan'  => $nama_layanan,
        'desc'      => $desc,
      );

      $where = array(
        'id' => $id
      );

      $this->profile_model->update_data('tb_layanan', $data, $where);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Layanan Berhasil Diupdate
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
      redirect('admin/layanan');
    }
  }



  public function delete_layanan($id)
  {


    $where = array('id' => $id);
    $this->profile_model->delete_data($where, 'tb_layanan');

    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Layanan Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
    redirect('admin/layanan');
  }
}
