<?php

class Profil extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

		$this->load->database();
		$this->load->model('Profil_model');
		
	}

	public function index()
	{
        $data['judul'] = 'Profil Saya';

        $data['user'] = $this->session->userdata('nama');
		$data['nis'] = $this->session->userdata('nis');
		$data['gambar'] = $this->session->userdata('gambar');
		$data['id'] = $this->session->userdata('id');
        $data['error'] = ' ';
		
		$this->load->view('templates/header',$data);
		$this->load->view('profil/index',$data);
		$this->load->view('templates/footer');	
    }

     public function tambah(){
		$foto = $_FILES['gambar'];

		if($foto == "") {

		} else {
			$config['upload_path']		= './upload';
			$config['allowed_types']	= 'gif|png|jpg';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('gambar')) {
				echo "gagal";
			} else {
				$foto = $this->upload->data('file_name');
				$this->Profil_model->ubahDataSiswa();
				$this->session->set_flashdata('message', '<div class="alert alert-success font-weight-bold ml-3" role="alert">Gambar diubah, silahkan login kembali</div>');
			}
		}

		redirect('profil');
	}
}