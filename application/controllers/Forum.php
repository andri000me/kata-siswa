<?php

class Forum extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

		$this->load->database();
		$this->load->model('Unggahan_model');
		
	}

	public function index()
	{
		$config['base_url'] = 'http://localhost/kata-siswa/forum/index';
		$config['total_rows'] = $this->Unggahan_model->jumlahData();
		$config['per_page'] = 12;
		$data['start'] = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['judul'] = 'Kata Siswa';
		$data['unggahan'] = $this->Unggahan_model->getUnggahan($config['per_page'], $data['start']);

		$data['user'] = $this->session->userdata('nama');
		$data['gambar'] = $this->Unggahan_model->getAllSiswa();
		
		$this->load->view('templates/header',$data);
		$this->load->view('forum/index',$data);
		$this->load->view('templates/footer');	
	}

	public function diskusi($id)
    {
		$data['user'] = $this->session->userdata('nama');
		
		$data['judul'] = 'Diskusi Siswa';
		
		$data['unggahan'] = $this->Unggahan_model->getUnggahanById($id);
		$data['diskusi'] = $this->Unggahan_model->getAllDiskusi();

		$data['gambar'] = $this->Unggahan_model->getAllSiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('forum/diskusi',$data);
        $this->load->view('templates/footer');
	}

	public function unggah() 
    {
		$this->Unggahan_model->uploadUnggahan();
		$this->load->view('forum/unggah');
		$this->session->set_flashdata('message', '<div class="alert alert-success font-weight-bold ml-3" role="alert">Unggahan anda berhasil terkirim</div>');
	}

	public function kirim($id) 
    {
		$data['diskusi'] = $this->Unggahan_model->uploadDiskusi();
		$data['unggahan'] = $this->Unggahan_model->getUnggahanById($id);
		$this->load->view('forum/kirim', $data);
	}
	
}
